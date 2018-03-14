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
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("config.php");
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
if(isset($_POST['make']))
{
	require 'connection.php';
	$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
	if($row4[1]=='holiday')
	{
		$query7="delete from holidays1 where datee = CURDATE() and Hol='holiday'";
		
		if($dbcon->query($query7)==TRUE)
		{	
			$queryd = "insert into holidays1(datee,Hol) values('".mysqli_real_escape_string($dbcon,date("Y-m-d"))."','".mysqli_real_escape_string($dbcon,'working')."')";
			$qd=mysqli_query($dbcon, $queryd);
			echo "Marked as working day and You all carry on Working";
		
		}
	}
	else{
			echo" today is already working day";
	}
}
else if(isset($_POST['makeh']))
{
	require 'connection.php';
	$fid=($_POST["id"]);
	$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
	if($row4[1]=='working')
	{
		$queryh=mysql_query("select COUNT(*) from userentry where datee = CURDATE()");
		$rowh=mysql_fetch_row($queryh);
		if($rowh[0]==0)
		{
			echo  $rowh[0];
			$query7="delete from holidays1 where datee = CURDATE() and Hol='working'";
			if($dbcon->query($query7)==TRUE)
			{	
				$querye = "insert into holidays1(datee,Hol) values('".mysqli_real_escape_string($dbcon, date("Y-m-d"))."','".mysqli_real_escape_string($dbcon,'holiday')."')";
				$qe=mysqli_query($dbcon, $querye);
				echo "Marked as Holiday";
		
			}
		}
		else{
			echo"sorry Already Employees have Marked their Attendence";
		}
	}
	else
	{			
		echo" today is already holiday day";		
	}
}
?>


	<div class="form-container">
		<form method="post" action="AdminAttendence.php" role="form">
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
					
					    <button type="submit" name="make" value="make" class="btn btn-success btn-sm">MaKe Today as Working Day</button>
						
				</div>
				<div class="col-lg-8"><br>
					
					    <button type="submit" name="makeh" value="makeh" class="btn btn-success btn-sm">MaKe Today as Holiday</button>
						
				</div>
			</div>

         </form>
	</div> <!--form-container--> 
	<div class="form-container">

    <form method="post" action="cl.php" role="form" class="search-form" style="width: 70%">
    <div class="container">
        <!-- <div class="row"> -->
         <div class="col-lg-8">
     
          </div>
          <div class="col-lg-8"><br>
          <button type="submit" class="btn btn-success btn-lg btn-block" value="Search" name="search">CL</button>

          </div>
          </div>
  <table class="ui celled table table table-hover">
					</table>
          
          </div> <!--form-container--> 
</div><!--container--> 
<?php include "includes/footer.php"; ?>