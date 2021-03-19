<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$con=mysqli_connect("localhost","root","","mycollege") or die("conn faild");
		$userid=$_REQUEST["userid"];
		$password=md5($_REQUEST["password"]);
		$securityquestion=$_REQUEST["securityquestion"];
		$answer=$_REQUEST["answer"];

		mysqli_query($con,"insert into usermaster values('$userid','$password','$securityquestion','$answer')");

		if(mysqli_affected_rows($con)>0)
		{
			echo "REGISTER SUCCESS";
		}else{
			echo "TRY AGAIN";
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
	<div class="registerbox">
		<img src="images/user.jpg" class="user"/>
		<h1> REGISTER HERE !</h1>
		<form method="post">
		UserID:<input type="text" name="userid"/>
		<br/>
		Password:<input type="text" name="password"/>
		<br/>
		Security Question: <select name="securityquestion">
			<option value="What is your Pet Name?">What is your Pet Name?</option>
			<option value="What is your Favourite Color?">What is your Favourite Color?</option>
		</select>
		<br/>
		Answer: <input type="text" name="answer"/>
		<br/>
		<input type="submit" name="b1" value="REGISTER"/>
		</form>
		<br/>
	</div>
</body>
</html>
