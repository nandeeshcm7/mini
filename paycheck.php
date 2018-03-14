<?php
  $pagetitle="PayCheck";
  include "includes/header.php"; 
?>
<div class="container">
         <div class="row">
                 <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">PayCheck</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("config.php");
?>
<div class="table-responsive">
<table class="ui celled table table table-hover">
<thead>
<tr>
<th>MONTH</th>

    </tr>
   </thead>
 <?php
 $fm= ($_POST['mon']);
 if($fm=="JAN"){
	 echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		}
	else if($fm=="FEB")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="MAR")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="APR")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="MAY")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="JUNE")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="JULY")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="AUG")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="SEP")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="OCT")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="NOV")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	else if($fm=="DEC")	
	{
		echo"<tr>";
		echo '<td>'. $fm . '</td>';
		echo"</tr>";
		
	}
	?>
 
   </div><!--table-responsive-->
       
	<div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
					  
					  <th>EMPLOYEE_ID</th>
					  <th>Designation</th>
					  <th>Basic Pay</th>
					  <th>Monthly Alloances(HRA)</th>
					  <th>Annual benifits(LTA)</th>
					  <th>Bonus</th>
					  <th>PF Gratuity</th>
					  <th>TotalSalary</th>
                      </tr>
                  </thead>
     
<?php
session_start(); 
$fm= ($_POST['mon']);
	require 'connection.php';
	$query2=mysql_query("select id from usersemp");
	if($fm=="JAN")
	{
		$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select COUNT(*) from userentry WHERE  id='$row2[0]' and Attendence='P' AND datee in(select datee from userentry where datee between '2017-01-01' and '2017-01-31')" );
		$row=mysql_fetch_row($query);
		//$queryb=mysql_query("select COUNT(*) from userentry WHERE  id='$row2[0]' and Attendence='CL' ");
		//$rowb=mysql_fetch_row($queryb);
		
			$daysWorked = $row[0];
			$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
			$row1=mysql_fetch_row($query1);
			$wages =$row1[0];
			$x = $daysWorked;
			$y = $wages;
			$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-01-31')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{
					$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';
					echo '<td>'. $row1[1] . '</td>';
					echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';
					echo '<td>'. $row1[1] . '</td>';
					echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';
					echo '<td>'. $row1[1] . '</td>';
					echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'.' -------- '. '</td>';
					echo '<td>'. '-------- '. '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
			{
			
				if($i==1)
				{
					echo "Sorry, Try at the end of the month";
					$i=$i+1;
				}
			}
		}
	}
	else if($fm=="FEB")
	{$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select COUNT(*) from userentry WHERE  id='$row2[0]' AND datee in(select datee from userentry where datee between '2017-02-01' and '2017-02-28')" );
		$row=mysql_fetch_row($query);
		$daysWorked = $row[0];
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-02-28')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';
					echo '<td>'. $row1[1] . '</td>';
					echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';
					echo '<td>'. $row1[1] . '</td>';
					echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';
					echo '<td>'. $row1[1] . '</td>';
					echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '-------- '. '</td>';
					echo '<td>'. '-------- '. '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
		}
	}
	else if($fm=="MAR")
	{$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select COUNT(*) from userentry where  id='$row2[0]' and datee in(select datee from userentry where datee between '2017-03-01' and '2017-03-31')");
		$row=mysql_fetch_row($query);
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
		$daysWorked = $row[0];
		//$NotWorked = 31-$row[0];
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-03-31')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
		}
	}
	else if($fm=="APR")
	{$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select COUNT(*) from userentry where id='$row2[0]' and datee in(select datee from userentry where datee between '2017-04-01' and '2017-04-30')");
		$row=mysql_fetch_row($query);
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
			$daysWorked = $row[0];
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-04-30')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $row2[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
	}
	}
	else if($fm=="MAY")
	{$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select count(*) from userentry where id='$row2[0]' and datee in(select datee from userentry where datee between '2017-05-01' and '2017-05-31')");
		$row=mysql_fetch_row($query);
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
		$daysWorked = $row[0];
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-05-31')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
	}
	}
	else if($fm=="JUNE")
	{$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select count(*) from userentry where id='$row2[0]' and datee in(select datee from userentry where datee between '2017-06-01' and '2017-06-30')");
		$row=mysql_fetch_row($query);
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
		$daysWorked = $row[0];
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-06-30')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
	}
	}
	else if($fm=="JULY")
	{$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select count(*) from userentry where id='$row2[0]' and datee in(select datee from userentry where datee between '2017-07-01' and '2017-07-31')");
		$row=mysql_fetch_row($query);
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
		$daysWorked = $row[0];
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-07-31')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
	}
	}
	else if($fm=="AUG")
	{$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select count(*) from userentry where id='$row2[0]' and datee in(select datee from userentry where datee between '2017-08-01' and '2017-08-31')");
		$row=mysql_fetch_row($query);
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
		$daysWorked = $row[0];
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-08-31')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
	}
	}
	else if($fm=="SEP")
	{$i=1;
		while($row2=mysql_fetch_row($query2)){
		$query=mysql_query("select count(*) from userentry where id='$row2[0]' and datee in(select datee from userentry where datee between '2017-09-01' and '2017-09-30')");
		$row=mysql_fetch_row($query);
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
		$daysWorked = $row[0];
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-09-30')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
		}
	}
	else if($fm=="OCT")
	{$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select count(*) from userentry where id='$row2[0]' and datee in(select datee from userentry where datee between '2017-10-01' and '2017-10-31')");
		$row=mysql_fetch_row($query);
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
			$daysWorked = $row[0];
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-10-31')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
		}
	}
	else if($fm=="NOV")
	{$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select count(*) from userentry where id='$row2[0]' and datee in(select datee from userentry where datee between '2017-11-01' and '2017-11-30')");
		$row=mysql_fetch_row($query);
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
			$daysWorked = $row[0];
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-11-30')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
		}
	}
	else if($fm=="DEC")
	{$i=1;
		while($row2=mysql_fetch_row($query2))
		{
		$query=mysql_query("select count(*) from userentry where id='$row2[0]' and datee in(select datee from userentry where datee between '2017-12-01' and '2017-12-31')");
		$row=mysql_fetch_row($query);
		$query1=mysql_query("select salary,Designation from usersemp WHERE id='$row2[0]'");
		$row1=mysql_fetch_row($query1);
		$daysWorked = $row[0];
		$wages =$row1[0];
		$x = $daysWorked;
		$y = $wages;
		$submit = $z = $x * $y;
			if((date("Y-m-d"))=='2017-12-31')
			{
				$queryc=mysql_query("select * from usersemp where id='$row2[0]'");
				$rowc=mysql_fetch_row($queryc);
				if($rowc[5]=='professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Ass.professor')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. $rowc1[5] . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. $rowc3[5] . '</td>';
					echo '<td>'. $rowc4[5] . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
				else if($rowc[5]=='Non_Teaching')
				{$rowc0[5]=$submit*(35/100);
					$rowc1[5]=$submit*(30/100);
					$rowc2[5]=$submit*(5/100);
					$rowc3[5]=$submit*(20/100);
					$rowc4[5]=$submit*(10/100);
					echo"<tr>";
					echo '<td>'. $row2[0] . '</td>';echo '<td>'. $row1[1] . '</td>';echo '<td>'. $rowc0[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $rowc2[5] . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. '--------' . '</td>';
					echo '<td>'. $submit . '</td>';
					echo"</tr>";
				}
			}
			else
		{
			
			if($i==1)
			{
			echo "Sorry, Try at the end of the month";
			$i=$i+1;
			}
		}
		}
	}


?>


</div><!--table-responsive-->
            </div><!--container-->


<?php include "includes/footer.php"; ?>