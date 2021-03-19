<?php
session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$con=mysqli_connect("localhost","root","","mycollege") or die("conn faild");
		$userid=$_SESSION["ukey"];
		$oldpassword=md5($_REQUEST["oldpassword"]);
		$password=md5($_REQUEST["password"]);
		

		mysqli_query($con,"update usermaster set password='$password' where userid='$userid' and password='$oldpassword'");

		if(mysqli_affected_rows($con)>0)
		{
			echo "CHANGE SUCCESS";
		}else{
			echo "TRY AGAIN";
		}
	}
?>
<form method="post">
		Old Password:<input type="password" name="oldpassword"/>
		<br/>
		New Password:<input type="password" name="password"/>
		<br/>
		Confirm New Password:<input type="password" name="confirmpassword"/>
		<br/>
		<br/>
		<input type="submit" name="b1" value="OK"/>
</form>
<a href="userhome.php"> GO TO USERHOME</a> 