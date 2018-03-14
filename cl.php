<?php
  $pagetitle="student Report";
  include "includes/header.php"; ?>

<div class="container">
         <div class="row">
                 <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">UPDATE</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
<?Php


$todo=$_POST['todo'];

if(isset($todo) and $todo=="submit"){

$month=$_POST['month'];

$dt=$_POST['dt'];

$year=$_POST['year'];

$date_value="$month/$dt/$year";

echo "mm/dd/yyyy format :$date_value<br>";

$date_value="$year-$month-$dt";

echo "YYYY-mm-dd format :$date_value<br>";

}



?>
<?php
$query4= mysql_query("select datee,Hol from holidays1 where datee = CURDATE()");
$row4=mysql_fetch_row($query4);

if(isset($_POST['Present']))
{
	$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
	
	
	$fid=($_POST["id"]);
	$query9=mysql_query("select username from usersemp where id='$fid'");
	$row9=mysql_fetch_row($query9);
	$fname=$row9[0];
	require 'connection.php';
	$query3=mysql_query("select * from usersemp where id='$fid'");
	$row=mysql_fetch_row($query3);

		if( date("Y-m-d")!= $row[11])
		{
			if($row4[1]=='working'){
			$query = "update usersemp set No = No+1 where id='$fid'";
			$query1 = "update usersemp set last_update = CURDATE() where id='$fid'";
			$query2 = "insert into userentry(username,id,datee,Attendence) values('".mysqli_real_escape_string($dbcon,$fname)."','".mysqli_real_escape_string($dbcon,$fid)."','".mysqli_real_escape_string($dbcon,date("Y-m-d"))."','".mysqli_real_escape_string($dbcon,"P")."')";
			$q2=mysqli_query($dbcon, $query);
			$q3=mysqli_query($dbcon, $query1);
			$q4=mysqli_query($dbcon, $query2);
			}
			else
			{
					echo "sorry...Today is holiday";
			}
		}
		else
		{
				echo"SOrry,,,,,,,Today's update is already done ";
		}	
}
else  if(isset($_POST['Absent']))
{
	$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
	$fid=($_POST["id"]);
	require 'connection.php';
	$query3=mysql_query("select * from usersemp where id='$fid'");
	$row=mysql_fetch_row($query3);
	$query9=mysql_query("select username from usersemp where id='$fid'");
	$row9=mysql_fetch_row($query9);
	$fname=$row9[0];

		if( date("Y-m-d") != $row[11])
		{
			if($row4[1]=='working'){
			$query1 = "update usersemp set last_update = CURDATE() where id='$fid'";
			$query2 = "insert into userentry(username,id,datee,Attendence) values('".mysqli_real_escape_string($dbcon,$fname)."','".mysqli_real_escape_string($dbcon,$fid)."','".mysqli_real_escape_string($dbcon,date("Y-m-d"))."','".mysqli_real_escape_string($dbcon,"A")."')";
			$q3=mysqli_query($dbcon, $query1);
			$q4=mysqli_query($dbcon, $query2);
			}
			else{
				echo "sorry...Today is holiday";
			}
			
		}
		else
		{
				echo"SOrry,,,,,,,Today's update is already done ";
		}	
}
else if(isset($_POST['CL']))
{
	$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
	$fid=($_POST["id"]);
	require 'connection.php';
	$query3=mysql_query("select * from usersemp where id='$fid'");
	$row=mysql_fetch_row($query3);
	$query9=mysql_query("select username from usersemp where id='$fid'");
	$row9=mysql_fetch_row($query9);
	$queryl=mysql_query("select count(*) from userentry where id = '$fid' and Attendence='CL'");
	$rowl=mysql_fetch_row($queryl);
	$fname=$row9[0];
		if( date("Y-m-d") != $row[11])
		{
			if($row4[1]=='working'){
				if($rowl[0]<=25)
				{
			$query = "update usersemp set No = No+1 where id='$fid'";
			$query1 = "update usersemp set last_update = CURDATE() where id='$fid'";
			$query2 = "insert into userentry(username,id,datee,Attendence) values('".mysqli_real_escape_string($dbcon,$fname)."','".mysqli_real_escape_string($dbcon,$fid)."','".mysqli_real_escape_string($dbcon,date("Y-m-d"))."','".mysqli_real_escape_string($dbcon,"CL")."')";
			$q2=mysqli_query($dbcon, $query);
			$q3=mysqli_query($dbcon, $query1);
			$q4=mysqli_query($dbcon, $query2);
				}
				else{
					echo "sorry,All His/Her CL limit is crossed and will be marked as Absent";
					$queryf = "update usersemp set last_update = CURDATE() where id='$fid'";
				$queryg = "insert into userentry(username,id,datee,Attendence) values('".mysqli_real_escape_string($dbcon,$fname)."','".mysqli_real_escape_string($dbcon,$fid)."','".mysqli_real_escape_string($dbcon,date("Y-m-d"))."','".mysqli_real_escape_string($dbcon,"A")."')";
				$qf=mysqli_query($dbcon, $queryf);
				$qg=mysqli_query($dbcon, $queryg);
				}
			}
			else{
				echo "sorry...Today is holiday";
			}
		}
		else
		{
				echo"SOrry,,,,,,,Today's update is already done ";
		}	
}
?>



<form method=post name=f1 action=''><input type=hidden name=todo value=submit>

<table border="0" cellspacing="0" >

<tr><td  align=left  >   

<select name=month value=''>Select Month</option>
<option value='01'>January</option>
<option value='02'>February</option>
<option value='03'>March</option>
<option value='04'>April</option>
<option value='05'>May</option>
<option value='06'>June</option>
<option value='07'>July</option>
<option value='08'>August</option>
<option value='09'>September</option>
<option value='10'>October</option>
<option value='11'>November</option>
<option value='12'>December</option>
</select>



</td><td  align=left  >   

Date<select name=dt >

<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>


</td><td  align=left  >   
Year(yyyy)<input type=text name=year size=4 value=2005>
<input type=submit value=Submit>
</table>
</form>
	<div class="form-container">
		<form method="post" action="cl.php" role="form">
		 <!-- <div class="container"> -->
			<div class="container">
			<!-- <div class="row"> -->
				<div class="col-lg-8">
					<div class="form-group">
						<label for="session" > ID</label>
						<?php
							$qs1=mysql_query("select * from usersemp");	
							echo "<select name='id'  class='form-control'>";		
							while($session=mysql_fetch_row($qs1))
							{		
								echo"<option value=$session[3]>$session[3] $session[4] </option>";
							}
							
							echo "</select>";

						?>
					</div>
				</div>
		
				
		          <div class="col-lg-8"><br>
          <button type="submit" class="btn btn-success btn-lg btn-block" value="Search" name="search">CL</button>

          </div>
			</div>

         </form>
	</div> <!--form-container--> 