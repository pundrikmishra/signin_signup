<?php
ob_start();
session_start();
if(!isset($_SESSION['name'])){
header('location:index.php');
}
session_unset();
session_destroy();
header('location:index.php');




?>