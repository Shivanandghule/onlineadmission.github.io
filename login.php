<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		header('location:adminscript/admin.html');
	}
?>
<! DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="login.php"method="post">
		<center><fieldset>
		<legend><h1>Admin Login</h1></legend>
		<h3 align="center">Username &nbsp &nbsp : &nbsp &nbsp <input type="text"name="uname"required></h3>
		<h3 align="center">password &nbsp &nbsp : &nbsp &nbsp <input type="password"name="pass"required></h3>
		<input type="submit"value="login"name="login">
		</fieldset>
		</center>
	</form>
</body>
</html>
<?php
	include('dbcon.php');

	if(isset($_POST['login']))
	{
		print_r($_POST);
		$username=$_POST['uname'];
		$password=$_POST['pass'];


		$qry="SELECT * FROM admin WHERE username='$username'AND password='$password'";
		  $run=mysqli_query($con,$qry);
		 $row=mysqli_fetch_row($run);

		 if($row<1)
		 {
			 ?>
			 <script>
			 alert('username or password not match');
			 window.open('login.php','_self')
			 </script>
			 <?php

		 }
		 else
		 {
			 $data=mysqli_fetch_assoc($run);

			 $id=$data['id'];

			 session_start();

			 $_SESSION['uid']=$id;
				header('location:adminscript/admin.html');
		 }
	}
?>
