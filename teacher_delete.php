<?php
 $pagetitle="Teachers Registration Page";
 include "includes/header.php";
include("config.php"); ?>
 <?php 
    if (isset($_POST['remove'])) {
      
 
      $id = $_POST['id'];
	  require 'connection.php';
      session_start();
	  $qs2=mysql_query("select id,username from usersemp where id= '$id'");	
	  $session2=mysql_fetch_row($qs2);
		  $sql = "DELETE FROM usersemp WHERE id='$id' and username='$session2[1]'";
          
		  	if(mysqli_query($dbcon, $sql))
				echo "Removed succesfully";
	else echo $session2[1];
	  
	
    }
     ?>  
<div class="container">

               <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Employee Removal</span>
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
          <label for="session" > EMPLOYEE NAME AND ID</label>
          <?php
          $qs1=mysql_query("select id ,username from usersemp");	
          echo "<select name='id' class='form-control'>";			
          while($session=mysql_fetch_row($qs1))
          {		
          		
           echo"<option value=$session[0]>$session[0] $session[1] </option>";
           }
          echo "</select>";

          ?>
          </div>
    </div>
	
   
 
    </div>
    </div>

   

          <div class="ui mini buttons col-sm-offset-3 col-sm-3">
          <button type="submit" class="ui mini positive button" name="remove">Remove</button>
          </div>
      
       </form>
          </div><!--form-container-->
        </div> <!--container-->
   
<?php include "includes/footer.php"; ?>
