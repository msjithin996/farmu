<?php
session_start();
include_once('config.php'); 
$user=$_POST['username'];
$pass=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$location=$_POST['location'];
$state=$_POST['state'];
	
	
	
	
	
	
	if (isset($_POST["login"])) {
	
	
	
	$sql="SELECT loginid FROM login WHERE username='$user' and password='$pass'";
$query=mysql_query($sql,$dbcon);
$count=mysql_num_rows($query);
$row=mysql_fetch_row($query);

	$userid=$row[0];
	
if($count==1)
{
$sq="SELECT * FROM user WHERE username='$user'";
$quer=mysql_query($sq,$dbcon);
$rows=mysql_fetch_row($quer);

if($userid=='admin')
{
	$location=$rows[4];
	
	$_SESSION['username']=$user;
	$_SESSION['location']=$location;
	echo $location;
	header("location:admin/index.html");

}


else if ($userid=='farmer')
{

		$location=$rows[4];
	$_SESSION['username']=$user;
	$_SESSION['location']=$location;
	$_SESSION['templocation']='null';
header("location:farmer/index.php");


}
else if ($userid=='agriofficer')
{
		$_SESSION['username']=$user;

header("location:agriofficer/index.php");

	
}

}
else{
		
		echo"email or password is incorrect.<br>click here to <a href='index.html'>try again</a>";
}

	}
	else if (isset($_POST["register"])) {
$sql="INSERT INTO  `farmu`.`user` (`username` ,`name` ,`email` ,`phno` ,`location` ,`state`)VALUES ('$user',  '$name',  '$email',  '$phno',  '$location',  '$state');";
$query=mysql_query($sql,$dbcon);
		
	$sq="INSERT INTO  `farmu`.`login` (`loginid`,`username`, `password`)VALUES ('farmer','$user','$pass');";
$quer=mysql_query($sq,$dbcon);	
		
	}
else
{

	
}


?>
