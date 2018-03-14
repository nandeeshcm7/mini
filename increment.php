<?php 
require 'connection.php';
session_start();
$userId = $_SESSION['id'];
$query = "update usersemp set No = No+1 where id='$userId'";
$q2=mysqli_query($dbcon, $query);
echo 
?>

