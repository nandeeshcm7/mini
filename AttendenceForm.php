
<?php  $pagetitle="AttendenceForm";
  include "includes/header.php"; ?>
 <div class="container">
              <div class="row">
                 <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendance Form</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                  </div>
                </div>
<?php  

error_reporting(E_ALL ^ E_DEPRECATED);
include("config.php");?>
<?php 
if(isset($_POST['Present']))
{
	
	require 'connection.php';
	session_start();
	$var_value = $_GET['varname'];
	$userId = $_GET['var'];
	$query3=mysql_query("select * from usersemp where id='$userId'");
	$row=mysql_fetch_row($query3);

		if( date("Y-m-d") != $row[10])
		{
			$query = "update usersemp set No = No+1 where id='$userId'";
			$query1 = "update usersemp set last_update = CURDATE() where username='$var_value'";
			$query2 = "insert into userentry(username,id,datee) values('".mysqli_real_escape_string($dbcon,$var_value)."','".mysqli_real_escape_string($dbcon,$userId)."','".mysqli_real_escape_string($dbcon,date("Y-m-d"))."')";
			$q2=mysqli_query($dbcon, $query);
			$q3=mysqli_query($dbcon, $query1);
			$q4=mysqli_query($dbcon, $query2);
			
		}
		else
		{
				echo"SOrry,,,,,,,Today's update is already done ";
		}	
}


?>
<div class="form-container">
    <form method="post" action="AttendenceForm.php" role="form">
     <!-- <div class="container"> -->
    

      <button type="submit" name="Present" value="Present" class="btn btn-success btn-sm">PRESENT</button>
	  <button type="submit" name="Absent" value="Absent" class="btn btn-success btn-sm">ABSENT</button>
	  <button type="submit" name="CL" value="CL" class="btn btn-success btn-sm">CL</button>
	 
   
 </form>
 </div> <!--form-container-->

</div><!--container-->
<?php include "includes/footer.php"; ?>