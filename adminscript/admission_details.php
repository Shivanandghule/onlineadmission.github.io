<? php

	session_start();
			 //echo"hii";
			 if(isset($_SESSION['uid']))
			 {
				 echo "";
			 }
			 else
			 {
				 header('location : ../login.php');
			 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get" action="admission_details.php">
		Application Id &nbsp; &nbsp;:&nbsp; &nbsp; <input type="search" name="s">
	<input type="submit" value="search" name="submit"><input type="reset" value="reset" name="reset">
	</form>
</body>
</html>

<? php
	 echo "string";
	if(isset($_GET['submit']))
		echo $ser=$_GET['s'];
?>