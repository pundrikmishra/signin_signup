<?php
ob_start();
session_start();
if(!isset($_POST['Emailid'])){
header('location:index.php');
}


if(!isset($_POST['Password'])){
header('location:index.php');
}

include('conn_database.php');
$Emailid=$_POST["Emailid"];
$Password=md5($_POST["Password"]);
$select = $conn->prepare("SELECT * FROM `user` where `email`='$Emailid'and `password`='$Password'");
$select->execute();

$total_row=$select->rowCount();
if($total_row>0)
{
    foreach($result as $row)   {
    	$_SESSION['name'] = $row['name'];
    	header('location:home.php');
       

    }
    
}
else
{
    $_SESSION['error']= "Email or password is wrong";
}  
if(isset($_SESSION['error'])){
    header('location:index.php'); 
}

?>