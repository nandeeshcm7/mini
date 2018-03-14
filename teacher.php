
<?php
 $pagetitle="Employee Records";
 include "includes/header.php"; ?>
  <?php $db = new db(); ?>


<div class="container">
	<?php 
		if(isset($_GET['teacher_id'])){
       $t_id = $_GET['teacher_id'];

       if($db->delete_teacher_record($conn,'usersemp',$t_id)){
       echo "Record was Deleted";
            }
               } ?>

              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Insert/Remove</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
               <p><a href="teacher_entry.php" class="ui blue tiny button "><i class="glyphicon glyphicon-plus"> </i>Insert</a> <a href="teacher_delete.php" class="ui blue tiny button "><i class="glyphicon glyphicon-minus"> </i>Delete</a></p>

                <div class="table-responsive">
                 <table class="ui celled table table table-hover">
					</table>
            </div><!--table-responsive-->
            </div><!--row-->   
           </div><!--container-->	  
<?php include "includes/footer.php"; ?>
