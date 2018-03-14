
<?php
session_start();

             if(isset($_SESSION['id'])){
              $username=($_SESSION['username']);
              $userId=($_SESSION['id']);
            }
            else{
              header("Location:loginemp.php");
            }

 $pagetitle="Home Page";
 include "includes/headeremp.php";
      include "includes/slider.php";
      ?>
        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to </span><span class="txt_orange">SIT</span>
                    <p class="txt_slogan">
                </div>	
            </div>
        </div>   
