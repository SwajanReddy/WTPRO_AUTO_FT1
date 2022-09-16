 
<?php
	session_start();
	if(isset($_POST['submit']))
	{
	$con=mysqli_connect("localhost","root","admin","regis") or die("Cannot connect to database");
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
	$_SESSION['uname']=$uname;
	$_SESSION['pwd']=$pwd;
	if($uname!="" && $pwd!="")
	{
		$query=mysqli_query($con,"SELECT * FROM regis WHERE uname='$uname' AND pswrd='$pwd'") or die("Couldnt retrieve data");
		$num_rows=mysqli_num_rows($query);
		if($num_rows!=0)
		{
			while($row=mysqli_fetch_array($query))
			{
					echo "WELCOME&nbsp;".$row['fname'];
			}
			exit(0);
		}
		$query=mysqli_query($con,"SELECT * FROM regis WHERE uname='$uname' AND pswrd!='$pwd'") or die("Couldnt execute this query");
		$num_rows=mysqli_num_rows($query);
		if($num_rows!=0)
		{
			echo "PASSWORD MISMATCH";
		}
		else
		{
			header("location:register.html");
		}
	}
	else
	{
	echo "ENTER USERNAME AND PASSWORD";
	}
	mysqli_close($con);
	}
?>
 