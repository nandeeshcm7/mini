
<?php
  $pagetitle="student Report";
  include "includes/header.php"; ?>
  <div class="container">
         <div class="row">
                 <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Search</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("config.php");
?>

<div class="form-container">

    <form method="post" action="AttendenceReport.php" role="form" class="search-form" style="width: 70%">
    <div class="container">
        <!-- <div class="row"> -->
         <div class="col-lg-8">
		<div class="form-group">
          <label for="session" > MONTH</label>
          <?php
          	
          echo "<select name='month' class='form-control'>";			
          echo"<option value=JAN>JAN </option>";
		  echo"<option value=FEB>FEB </option>";
		  echo"<option value=MAR>MAR</option>";
		  echo"<option value=APR>APR</option>";
		  echo"<option value=MAY>MAY </option>";
		  echo"<option value=JUNE>JUNE </option>";
		  echo"<option value=JULY>JULY </option>";
		  echo"<option value=AUG>AUG </option>";
		  echo"<option value=SEP>SEP </option>";
		  echo"<option value=OCT>OCT </option>";
		  echo"<option value=NOV>NOV </option>";
		  echo"<option value=DEC>DEC </option>";
		  
		  
           
          echo "</select>";

          ?>
          </div>

    
          </div>
          <div class="col-lg-8"><br>
          <button type="submit" class="btn btn-success btn-lg btn-block" value="Search" name="search">Search</button>

          </div>
          </div>
  <table class="ui celled table table table-hover">
					</table>
          
          </div> <!--form-container--> 
          </div><!--container--> 
          <?php include "includes/footer.php"; ?>