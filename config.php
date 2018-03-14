
<?php
$connect=mysql_connect("den1.mysql2.gear.host","attendancedb");
if(!$connect)
{
	echo "Error".mysql_error();
	}
	
	
	$db=mysql_select_db("attendancedb");
	if(!$db)
	{
		echo "Error".mysql_error();
		}
		



?>
