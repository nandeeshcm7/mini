
<?php
 $pagetitle="Teachers Registration Page";
 include "includes/header.php";
include("config.php"); ?>
 <?php 
    if (isset($_POST['register'])) {
      
      $Attendence = $_POST['att'];
      $No = $_POST['no'];
      $password = $_POST['password'];
      $id = $_POST['id'];
      $username = $_POST['username'];
      $dob= $_POST['dob'];
	  $desg= $_POST['desg'];
      $gender= $_POST['gender'];
      $email= $_POST['email'];
      $phone= $_POST['phone'];
	  $salary= $_POST['salary'];
	  $last_update= $_POST['last_update'];
     
      $db = new db();
	  require 'connection.php';
      session_start();
	  $userId = $_SESSION['id'];
	  if($id!=$userId)
	  {
		  $query10="insert into usersemp(Attendence,No,password,id,username,Designation,dob,gender,email,phone,salary,last_update) values('".mysqli_real_escape_string($dbcon,$Attendence)."','".mysqli_real_escape_string($dbcon,$No)."','".mysqli_real_escape_string($dbcon,$password)."','".mysqli_real_escape_string($dbcon,$id)."','".mysqli_real_escape_string($dbcon,$username)."','".mysqli_real_escape_string($dbcon,$desg)."','".mysqli_real_escape_string($dbcon,$dob)."','".mysqli_real_escape_string($dbcon,$gender)."','".mysqli_real_escape_string($dbcon,$email)."','".mysqli_real_escape_string($dbcon,$phone)."','".mysqli_real_escape_string($dbcon,$salary)."','".mysqli_real_escape_string($dbcon,$last_update)."')";
		  $q10=mysqli_query($dbcon, $query10);	
		  echo "inserted succesfully";
	  }
	  
	  else
			echo "Problem while inserting ...Check whether you have unique ID for each Employee";
    }
     ?>  
<div class="container">

               <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Employee Entry</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>


<div class="form-container">

    <form action="#" method="post" role="form" >
    <div class="container">
    <div class="row">
		 <div class="col-lg-3">
          <div class="form-group">
            <label for="username" > username (*)</label>
            <input type="text" class="form-control" required id="username" placeholder="username" name="username">
          </div>
    </div>
			    <div class="col-lg-3">
          <div class="form-group">
            <label for="id">id</label>
            <input type="text" class="form-control" required id="id" placeholder="id"  name="id">
          </div>
    </div>
	    <div class="col-lg-3">
          <div class="form-group">
            <label for="No"> No</label>
            <input type="text" class="form-control" required id="No" placeholder="Default(0)"  name="no">
          </div>
    </div>
		    <div class="col-lg-3">
          <div class="form-group">
            <label for="password">password</label>
            <input type="text" class="form-control" required id="password" placeholder="password"  name="password">
          </div>
    </div>
	
   
 
    </div>
    </div>
    <div class="container">
    <div class="row">
	  <div class="col-lg-3">

          <div class="form-group">
          <label for="gender">Gender</label>
           <select  class="form-control" required id="sex" name="gender" >
           <option>-------select-------</option>
           <option value="male">male</option>
           <option value="female">female</option> 
           </select>
          </div>
  </div>
  	    <div class="col-lg-3">
          <div class="form-group">
            <label for="Attendence"> Designation</label>
            <select class="form-control" required id="Designation" name="desg">
			<option>-------select-------</option>
			<option value="professor">Professor</option>
           <option value="Ass.professor">Ass.professor</option> 
		   <option value="Non_Teaching">Non-Teaching staff</option>   
		   </select>
          </div>
    </div>
 <div class="col-lg-3">

          <div class="form-group">
            <label for="email" >email</label>
            <input type="email" class="form-control" required id="email" placeholder=" email" name="email">
          </div>
   </div>
      <div class="col-lg-3">
          <div class="form-group">
            <label for="dob"> dob</label>
            <input type="text" class="form-control" required id="dob" placeholder="dob"  name="dob">
          </div>
    </div>



  </div>
  </div>
   <div class="container">
    <div class="row">
    <div class="col-lg-3">

          <div class="form-group">
            <label for="phone">phone </label>
            <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone">
          </div>
    </div>
	    <div class="col-lg-3">
          <div class="form-group">
            <label for="salary" > Salary </label>
            <input type="text" class="form-control" required id="salary" placeholder=" Enter salary"  name="salary">
          </div>
    </div>
		 <div class="col-lg-3">

          <div class="form-group">
            <label for="last_update">last_update </label>
            <input type="text" class="form-control" id="last_update" placeholder="last_update(today)" name="last_update">
          </div>
    </div>
		    <div class="col-lg-3">
          <div class="form-group">
            <label for="Attendence"> Attendence</label>
            <input type="text" class="form-control" required id="Attendence" placeholder="Default(A)"  name="att">
          </div>
    </div>
    </div>
    </div>
   

          <div class="ui mini buttons col-sm-offset-3 col-sm-3">
          <button type="submit" class="ui mini positive button" name="register">Register</button>
          <div class="or"></div>
          <button type="reset" class="ui mini red button" name="back">Clear</button>
          </div>
      
       </form>
          </div><!--form-container-->
        </div> <!--container-->
   
<?php include "includes/footer.php"; ?>
