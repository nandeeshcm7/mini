
<?php
session_start(); 
$uname=$_SESSION['username'];
  $pagetitle="student Report";
  include "includes/headeremp.php"; ?>
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
				  <th>EMPLOYEE_ID</th>
				  <th>EMPLOYYE_NAME</th>
                      </tr>
                  </thead>
			 <tbody>	  
			<?php  	  
		$query=mysql_query("select id,username from usersemp where username='$uname'");
			$row=mysql_fetch_row($query);
			
		echo"<tr>";
           echo '<td>'. $row[0] . '</td>';
            echo '<td>'. $row[1] . '</td>';

			echo"</tr>";
           ?>
      </tbody>     
	 </div><!--table-responsive-->  
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
$query5=mysql_query("select datee from userentry");
$row5=mysql_fetch_row($query5);	  
$userId = $_SESSION['id'];
$un = $_SESSION['username'];
$sel3=($_POST['month']);

		if($sel3=="JAN")
		{
            $query=mysql_query("select * from userentry WHERE  id='$userId ' AND datee in(select datee from userentry where datee between '2017-01-01' and '2017-01-31')" );


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
           $query=mysql_query("select * from userentry WHERE id='$userId ' AND datee in(select datee from userentry where datee between '2017-02-01' and '2017-02-28')" );
			


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
           $query=mysql_query("select * from userentry WHERE  id='$userId ' AND datee in(select datee from userentry where datee between '2017-03-01' and '2017-03-31')" );

			

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
            $query=mysql_query("select * from userentry WHERE  id='$userId ' AND datee in(select datee from userentry where datee between '2017-04-01' and '2017-04-30')" );



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
            $query=mysql_query("select * from userentry WHERE  id='$userId ' AND datee in(select datee from userentry where datee between '2017-05-01' and '2017-05-31')" );


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
           $query=mysql_query("select * from userentry WHERE  id='$userId ' AND datee in(select datee from userentry where datee between '2017-06-01' and '2017-06-30')" );


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
           $query=mysql_query("select * from userentry WHERE  id='$userId ' AND datee in(select datee from userentry where datee between '2017-07-01' and '2017-07-31')" );


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
           $query=mysql_query("select * from userentry WHERE id='$userId ' AND datee in(select datee from userentry where datee between '2017-08-01' and '2017-08-31')" );


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
           $query=mysql_query("select * from userentry WHERE id='$userId ' AND datee in(select datee from userentry where datee between '2017-09-01' and '2017-09-30')" );

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
            $query=mysql_query("select * from userentry WHERE id='$userId ' AND datee in(select datee from userentry where datee between '2017-10-01' and '2017-10-31')" );


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
            $query=mysql_query("select * from userentry WHERE  id='$userId ' AND datee in(select datee from userentry where datee between '2017-11-01' and '2017-11-30')" );


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
           $query=mysql_query("select * from userentry WHERE  id='$userId ' AND datee in(select datee from userentry where datee between '2017-12-01' and '2017-12-31')" );


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
             </div><!--table-responsive-->
            </div><!--container-->
<?php include "includes/footer.php"; ?>
