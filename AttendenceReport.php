
<?php
  $pagetitle="student Report";
  include "includes/header.php"; ?>
  <div class="container">
  <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendance Report</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$connect=mysql_connect("localhost","root","");
if(!$connect)
{
	echo "Error".mysql_error();
	}
	
	
	$db=mysql_select_db("attendance_db");
	if(!$db)
	{
		echo "Error".mysql_error();
		}
		 
?>
<div class="table-responsive">
<table class="ui celled table table table-hover">
<thead>
<tr>
<th>MONTH</th>

    </tr>
   </thead>
 <?php
 $fm= ($_POST['month']);
 if($fm=="JAN"){
	 echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		}
	else if($fm=="FEB")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="MAR")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="APR")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="MAY")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="JUNE")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="JULY")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="AUG")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="SEP")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="OCT")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="NOV")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="DEC")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	?>
 
   </div><!--table-responsive-->
	<div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
					  <th>Employee_name</th>
					  <th>Employee_id</th>
                      <th>Designation</th>
					  <th>No. of working days</th>
					  <th>No. of days Attended</th>
					  <th>No. of days Absent</th>
					  
                      </tr>
                  </thead>
     <tbody>
          <?php      
			$query2=mysql_query("select username,id,Designation from usersemp");
			
		  if(($_POST['month'])=="JAN")
		  {
			   
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P' AND datee in(select datee from userentry where datee between '2017-01-01' and '2017-01-31')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-01-01' and '2017-01-31')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-01-01' and '2017-01-31')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=31-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0]. '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		  else if(($_POST['month'])=="FEB")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P' AND datee in(select datee from userentry where datee between '2017-02-01' and '2017-02-28')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-02-01' and '2017-02-28')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-02-01' and '2017-02-28')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=28-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0] . '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		   else if(($_POST['month'])=="MAR")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P' AND datee in(select datee from userentry where datee between '2017-03-01' and '2017-03-31')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-03-01' and '2017-03-31')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-03-01' and '2017-03-31')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=31-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0] . '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		   else if(($_POST['month'])=="APR")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P'and datee in(select datee from userentry where datee between '2017-04-01' and '2017-04-30')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-04-01' and '2017-04-30')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-04-01' and '2017-04-30')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=30-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0] . '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		   else if(($_POST['month'])=="MAY")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P' AND datee in(select datee from userentry where datee between '2017-05-01' and '2017-05-31')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-05-01' and '2017-05-31')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-05-01' and '2017-05-31')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=31-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0]. '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		   else  if(($_POST['month'])=="JUNE")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P' AND datee in(select datee from userentry where datee between '2017-06-01' and '2017-06-30')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-06-01' and '2017-06-30')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-06-01' and '2017-06-31')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=30-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0] . '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		  else   if(($_POST['month'])=="JULY")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P'  AND datee in(select datee from userentry where datee between '2017-07-01' and '2017-07-31')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-07-01' and '2017-07-31')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-07-01' and '2017-07-31')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=31-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0] . '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		   else  if(($_POST['month'])=="AUG")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P' AND datee in(select datee from userentry where datee between '2017-08-01' and '2017-08-31')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-08-01' and '2017-08-31')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-08-01' and '2017-08-31')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=31-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0] . '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		   else  if(($_POST['month'])=="SEP")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P' AND datee in(select datee from userentry where datee between '2017-09-01' and '2017-09-30')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-09-01' and '2017-09-30')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-09-01' and '2017-09-30')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=30-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0] . '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		   else  if(($_POST['month'])=="OCT")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P'  AND datee in(select datee from userentry where datee between '2017-10-01' and '2017-10-31')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-10-01' and '2017-10-31')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-10-01' and '2017-10-31')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=31-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0] . '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		   else  if(($_POST['month'])=="NOV")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P' AND datee in(select datee from userentry where datee between '2017-11-01' and '2017-11-30')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-11-01' and '2017-11-30')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-11-01' and '2017-11-30')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=30-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0] . '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
		   else if(($_POST['month'])=="DEC")
		  {
			  while($row2=mysql_fetch_row($query2))
			  {
				$query1=mysql_query("select COUNT(*) from userentry WHERE username='$row2[0]' AND id='$row2[1]' and Attendence='P' AND datee in(select datee from userentry where datee between '2017-12-01' and '2017-12-31')" );
				$row1=mysql_fetch_row($query1);
				$query6=mysql_query("select count(*) from userentry Where username='$row2[0]'AND id='$row2[1]' and Attendence='A' and datee in(select datee from userentry where datee between '2017-12-01' and '2017-12-31')");
				$row6=mysql_fetch_row($query6);
				$query3=mysql_query("select count(*) from Holidays1 Where Hol='holiday' and datee in (select datee from Holidays1 where datee between '2017-11-01' and '2017-11-31')");
				$row3=mysql_fetch_row($query3);
				$not=$row6[0];
				$wor=31-$row3[0];
				echo"<tr>";
				echo '<td>'. $row2[0] . '</td>';
				echo '<td>'. $row2[1] . '</td>';
				echo '<td>'. $row2[2] . '</td>';echo '<td>'. $wor . '</td>';
				echo '<td>'. $row1[0] . '</td>';
				echo '<td>'. $not . '</td>';
				
				echo"</tr>";
			  }
		  }
	
           ?>
      </tbody>     
            </table>

             </div><!--table-responsive-->
            </div><!--container-->
<?php include "includes/footer.php"; ?>
