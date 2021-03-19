<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$con=mysqli_connect("localhost","root","","mycollege") or die("conn faild");
		$userid=$_REQUEST["userid"];
		$securityquestion =$_REQUEST["securityquestion"];
		$answer =$_REQUEST["answer"];
		$result=mysqli_query($con,"select * from usermaster where userid = '$userid' and securityquestion='$securityquestion' and answer='$answer'");
		if($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			$_SESSION["ukey"]=$userid;
			header('location:changepwd.php');
		}else{
			echo"INVALID DETAILS";
		}
	}
?>
	<form method="post">
		UserID:<input type="text" name="userid"/>
		<br/>
		Security Question:<select name="securityquestion">
			<option value="What is your Pet Name?">What is your Pet Name?</option>
			<option value="What is your Favourite Color?">What is your Favourite Color?</option>
		</select>
		<br/>
		Answer: <input type="text" name="answer">
		<br/>
		<input type="submit" name="b1" value="Confirm"/>
		</form>

