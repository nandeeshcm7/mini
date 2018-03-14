<?php  $pagetitle="AttendenceForm";
  include "includes/headeremp.php"; ?>
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
include("config.php");
?>
<?php 

if(isset($_POST['Present']))
{
	$jd = cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
	require 'connection.php';
	$query4= mysql_query("select datee,Hol from holidays1 where datee = CURDATE()");
	$row4=mysql_fetch_row($query4);
	session_start();
	$userId = $_SESSION['id'];
	$un = $_SESSION['username'];
	$query3=mysql_query("select * from usersemp where id='$userId'");
	$row3=mysql_fetch_row($query3);

	if( date("Y-m-d") != $row3[11])
	{
		if($row4[1]=='working'){
		$query = "update usersemp set No = No+1 where id='$userId'";
		$query1 = "update usersemp set last_update = CURDATE() where id='$userId'";
		$query2 = "insert into userentry(username,id,datee,Attendence) values('".mysqli_real_escape_string($dbcon,$un)."','".mysqli_real_escape_string($dbcon,$userId)."','".mysqli_real_escape_string($dbcon,date("Y-m-d"))."','".mysqli_real_escape_string($dbcon,'P')."')";
		$q2=mysqli_query($dbcon, $query);
		$q3=mysqli_query($dbcon, $query1);
		$q4=mysqli_query($dbcon, $query2);
		}
			else{
				
				echo "sorry..is holiday";
			}
	}
	else{
		echo"SOrry,,,,,,,Today's update is already done ";
	}
}


?>

<div class="form-container">
    <form method="post" action="AttendenceFormemp.php" role="form">
     <!-- <div class="container"> -->
    

      <button type="submit" name="Present" value="Present" class="btn btn-success btn-sm">PRESENT</button>
	 
   
 </form>
 </div> <!--form-container-->

</div><!--container-->
<?php include "includes/footer.php"; ?>