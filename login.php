<?php
	session_start();
	if(isset($_SESSION["ukey"]))
	{
		header("location:userhompage.php");
	}
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$con=mysqli_connect("localhost","root","","mycollege") or die("conn faild");
		$userid=$_REQUEST["userid"];
		$password=md5($_REQUEST["password"]);

		$result=mysqli_query($con,"select * from usermaster where userid='$userid' and password='$password'");

		if($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$_SESSION["ukey"]=$userid;
			header('location:userhomepage.php');
		} else {
			echo"INVALID DETAILS";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> LOG IN</title>
	<link rel="icon" href="images/favicon.jpg"/>
	<link rel="stylesheet" type="text/css" href="stylejury.css">
</head>
<body>
	<div class="loginbox">
		<img src="images/user.jpg" class="user"/>
		<h1> LOGIN HERE !</h1>
		<form method="post">
		<h3>UserID:<input type="text" name="userid"/>
		<br/>
		Password:<input type="password" name="password"/></h3>
		<br/>
		<br/>
		<input type="submit" name="b1" value="LOGIN"/>
		<a href="forgetpwd.php"><h2>FORGET PASSWORD </a><a href="register.php">| SIGN UP</h2></a>
		</form>
		<br/>
	</div>
</body>
</html>