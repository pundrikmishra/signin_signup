<?php
session_start();
include('conn_database.php');

$Username=$_POST["Username"];
$Emailid=$_POST["Emailid"];
$Password=md5($_POST["Password"]);
$Image = $_FILES["Image"];
$select = $conn->prepare("SELECT `email` FROM `user` where `email`='$Emailid'");
$select->execute();
$result=$select->fetchAll();
$total_row=$select->rowCount();
if($total_row>0)
{
    $_SESSION['error']= "Email already exist";
    if(isset($_SESSION['error'])){
    header('location:index.php'); 
	}
}
else
{
    $qry="INSERT INTO `user` (`name`, `email`, `password`)
    VALUES ('$Username', '$Emailid', '$Password')";
    $conn->exec($qry);
    echo "New record created successfully";

}

?>