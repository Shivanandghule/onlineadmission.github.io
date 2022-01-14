<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		header('location:student_portal.php');
	}
?>
<! DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body  style="background-image: url('../images/p12.jpg');background-attachment:fixed;background-size:cover;">
	<br><br><br><br><br><br>
	<form action="student_login.php"method="post">
		<center><fieldset style="width:25%;border-style: solid;border-color:#F7DC6F;border-width: 4px;">
		<legend><h1>Student Login</h1></legend>
		<h3 align="center">Username &nbsp &nbsp : &nbsp &nbsp <input type="text"name="uname"required></h3>
		<h3 align="center">password &nbsp &nbsp : &nbsp &nbsp <input type="password"name="pass"required></h3><br>
		<input style="padding: 15px 32px;font-size: 24px;" type="submit"value="Login"name="login">
		</fieldset>
		</center>
	</form>
</body>
</html>
<?php
	include('dbcon.php');

	if(isset($_POST['login']))
	{
		$username=$_POST['uname'];
		$password=$_POST['pass'];


		$qry="SELECT * FROM register WHERE username='$username'AND password='$password'";
		  $run=mysqli_query($con,$qry);
		 $row=mysqli_fetch_assoc($run);

		 if($row<1)
		 {
			 ?>
			 <script>
			 alert('username or password not match');
			 window.open('student_login.php','_self')
			 </script>
			 <?php

		 }
		 else
		 {
			 print_r($row);
			 echo $id=$row['r_id'];
			 session_start();
			 session_regenerate_id();
			 	echo $_SESSION['uid']=$id;
			 session_write_close();
			 header('location:student_portal.php');

		 }
	}
?>
