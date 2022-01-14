<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>register</title>
<style>
fieldset{text-align:center;}
</style>
</head>
<body style="background-image: url('../images/p17.jpg');background-attachment:fixed;background-size:cover;">
	<br><br><h1 align="center">Register</h1><br>
<center><fieldset style="width:30%;border-style: solid;border-color:#884EA0;border-width: 8px;">
<form method="POST" action="register.php">
<h3>
Student name &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp; <input type="text" name="r1" required><br><br>
Email id &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp &nbsp <input type="email" name="r2" size="20px" required><br><br>
Mobile no &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp <input type="text" name="r3" maxlength="10" required><br><br>
Username &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp <input type="text" name="r4" required><br><br>
Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp <input type="Password" name="r5" required><br><br>
<input type="submit" value="Register" name="Register">
</h3>
</form>
</fieldset>
</body>
</html>

<?php

	if (isset($_POST['Register']))
	{

		include 'dbcon.php';
		echo "<br>";
		echo $name=$_POST['r1'];
		echo $email=$_POST['r2'];
		echo $mobile=$_POST['r3'];
		echo $uname=$_POST['r4'];
		echo $Password=$_POST['r5'];

		$rgt="insert into register(r_id,name,email_id,mobile_no,username,password) values(default,'$name','$email',$mobile,'$uname','$Password')";
		$row=mysqli_query($con,$rgt);

		if($row<1)
		{
			?>
			<script>
					alert("register failed");
					window.open('register.php','_self');

			</script>
			<?php
		}
		else
		{
			?>
			<script>
					alert("register successful");
					window.open('student_login.php','_self');

			</script>
			<?php
		}
	}
?>
