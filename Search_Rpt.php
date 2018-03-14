
<?php
$pagetitle="Search Report";
include "includes/header.php"; 
error_reporting(E_ALL ^ E_DEPRECATED);



include("config.php");

?>
<div class="container">
 <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Individual Report </span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
				<div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                  <tr>
				  <th>EMPLOYYE_NAME</th>
					  <th>EMPLOYEE_ID</th>
                      </tr>
                  </thead>
				  </div><!--table-responsive-->  
      <tbody>
	  <?php
	  $sel2=($_POST['id']);
	  $querya=mysql_query("select * from userentry WHERE  id='$sel2' " );
	  $rowa=mysql_fetch_row($querya);
	  echo"<tr>";
	  echo '<td>'. $rowa[0] . '</td>';
				echo '<td>'. $rowa[1] . '</td>';
				echo"</tr>";
	  ?>
	  </tbody>         
            </table>
	<div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                  <tr>
                      <th>DATE</th>
					  <th>STATUS</th>
                      </tr>
                  </thead>
      <tbody>
	  
	  
<?php
session_start();
$query5=mysql_query("select datee from userentry");
$row5=mysql_fetch_row($query5);	  
$sel2=($_POST['id']);	
$sel3=($_POST['month']);
$_SESSION['i']   = $sel2;
$_SESSION['m']   = $sel3;

		if($sel3=="JAN")
		{
            $query=mysql_query("select * from userentry WHERE  id='$sel2' AND datee in(select datee from userentry where datee between '2017-01-01' and '2017-01-31')" );


			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
				 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}	
		else if($sel3=='FEB')
		{
           $query=mysql_query("select * from userentry WHERE id='$sel2' AND datee in(select datee from userentry where datee between '2017-02-01' and '2017-02-28')" );
			


			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
			 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		else if($sel3=="MAR")
		{
           $query=mysql_query("select * from userentry WHERE  id='$sel2' AND datee in(select datee from userentry where datee between '2017-03-01' and '2017-03-31')" );

			

			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
			 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		else if($sel3=='APR')
		{
            $query=mysql_query("select * from userentry WHERE  id='$sel2' AND datee in(select datee from userentry where datee between '2017-04-01' and '2017-04-30')" );



			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
				 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		else if($sel3=='MAY')
		{
            $query=mysql_query("select * from userentry WHERE  id='$sel2' AND datee in(select datee from userentry where datee between '2017-05-01' and '2017-05-31')" );


			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
			 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		else if($sel3=='JUNE')
		{
           $query=mysql_query("select * from userentry WHERE  id='$sel2' AND datee in(select datee from userentry where datee between '2017-06-01' and '2017-06-30')" );


			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
				 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		else if($sel3=='JULY')
		{
           $query=mysql_query("select * from userentry WHERE  id='$sel2' AND datee in(select datee from userentry where datee between '2017-07-01' and '2017-07-31')" );


			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
				 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		else if($sel3=='AUG')
		{
           $query=mysql_query("select * from userentry WHERE id='$sel2' AND datee in(select datee from userentry where datee between '2017-08-01' and '2017-08-31')" );


			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
				 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		else if($sel3=='SEP')
		{
           $query=mysql_query("select * from userentry WHERE id='$sel2' AND datee in(select datee from userentry where datee between '2017-09-01' and '2017-09-30')" );

			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
				 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		else if($sel3=='OCT')
		{
            $query=mysql_query("select * from userentry WHERE id='$sel2' AND datee in(select datee from userentry where datee between '2017-10-01' and '2017-10-31')" );


			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
				 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		else if($sel3=='NOV')
		{
            $query=mysql_query("select * from userentry WHERE  id='$sel2' AND datee in(select datee from userentry where datee between '2017-11-01' and '2017-11-30')" );


			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
				 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		else if($sel3=='DEC')
		{
           $query=mysql_query("select * from userentry WHERE  id='$sel2' AND datee in(select datee from userentry where datee between '2017-12-01' and '2017-12-31')" );


			echo"<tr>";
			while($row=mysql_fetch_row($query))
			{    	
				 
				echo '<td>'. $row[2] . '</td>';
				echo '<td>'. $row[3] . '</td>';
				echo"</tr>";
			}  
		}
		
?>
		</tbody>         
            </table>
					
</div><!--container-->    
            <?php include "includes/footer.php"; ?>




