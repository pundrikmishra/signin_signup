<?php 
ob_start();
session_start();
if(!isset($_SESSION['name'])){
header('location:index.php');
} 
echo "<h1>Welcome: ".$_SESSION['name']."</h1>";
echo"<a href='logout.php'>Logout</a>";





 ?>