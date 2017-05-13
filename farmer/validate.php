<?php
session_start();
include_once('../config.php'); 
$search=$_POST['search'];

	
header("location:shop-single.php?id=$search");




?>
