
<?php
session_start();

             if(isset($_SESSION['id'])){
              $username=($_SESSION['username']);
              $userId=($_SESSION['id']);
            }
            else{
              header("Location:login.php");
            }

 $pagetitle="Home Page";
 include "includes/header.php";
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
        

    <div id="templatemo-blog">
            <div class="container">
                <div class="row">
                 <?php include "includes/sidebar.php";?>
                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
						<li>   
						<div class="clearfix"> </div>
                        <p class="blog_text">
							Siddaganga Institute of Technology is 
							Committed to: •Impart quality education by establishing effective learning-teaching-learning process to produce competent engineers with high professional ethics and societal responsibility.•Create congenial environment and provide state-of the-art infrastructure.•Continually improve the effectiveness of the quality managment system.
							</li>

                        </ul>
                    </div> <!-- /.blog_post 1 --> 
                </div>
              </div>
           </div>
    </div>
	
	<?php include "includes/footer.php"; ?>