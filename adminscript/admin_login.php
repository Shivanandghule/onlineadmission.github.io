<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		header('location:admin_dashboard.php');
	}
?>
<! DOCTYPE HTML>
<html lang="en_US">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body style="background-image: radial-gradient(white, khaki, wheat, yellow);">
	<br><br><br><br><br><br>
	<form action="admin_login.php"method="post">
		<center><br><br><fieldset style="width:25%;border-style: solid;border-color:#A04000;border-width: 4px;">
		<legend><h1>Admin Login</h1></legend>
		<h3 align="center">Username &nbsp &nbsp : &nbsp &nbsp <input type="text"name="uname"required></h3>
		<h3 align="center">password &nbsp &nbsp : &nbsp &nbsp <input type="password"name="pass"required></h3><br>
		<input style="padding: 15px 32px;font-size: 24px;" type="submit"value="Login"name="login">
		</fieldset>
		</center>
	</form>
</body>
</html>
<?php
	include('../dbcon.php');

	if(isset($_POST['login']))
	{
		$username=$_POST['uname'];
		$password=$_POST['pass'];


		$qry="SELECT * FROM admin WHERE username='$username'AND password='$password'";
		  $run=mysqli_query($con,$qry);
		 $row=mysqli_fetch_assoc($run);

		 if($row <1)
		 {

			 ?>
			 <script>
			 alert('username or password not match');
			 window.open('admin_login.php','_self')
			 </script>
			 <?php

		 }
		 else
		 {
		 	var_dump($row);

			 $id=$row['id'];

			 echo "id=".$id;
			 session_start();

			 $_SESSION['uid']=$id;
				header('location:admin_dashboard.php');
		 }
	}
?>
