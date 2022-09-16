<?php
session_start();
$uname=$_SESSION['fname'];
$pwd=$_SESSION['pwd'];
$fname=$_POST['fname'];
$lname=	$_POST['lname'];
$pno=$_POST['phone'];
$email=$_POST['email']
$
if(isset($_POST['fname']) isset($_POST['lname']) isset($_POST['phone']) isset($_POST['email']) isset($_POST['pwd']) && isset($_POST['submit']))
{
	$con=mysqli_connect("localhost","root","admin","regis") or die("COULDNT CONNECT TO DATABASE");
	$query=mysqli_query($con,"insert into regis values('$fname','$lname','$phone','$email','$pwd')");
	echo "SUCESSFULLY REGISTERED";
}
else
{
	echo "ENTER ALL THE FIELDS";
}
session_destroy();
?>