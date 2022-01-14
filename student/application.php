<?php 
		$Sname=$_POST['t1'];
		$Father=$_POST['t2'];
		$Mother=$_POST['t3'];
		$gender=$_POST['r1'];
		$aadhar=$_POST['n1'];
		$dob=$_POST['d1'];
		$b_place=$_POST['t9'];
		$b_taluka=$_POST['t10'];
		$b_district=$_POST['t11'];
		$b_state=$_POST['t12'];
		$religion=$_POST['t7'];
		$category=$_POST['s1'];
		$caste=$_POST['t8'];
		$bloodgroup=$_POST['s2'];
		$handicap=$_POST['r2'];
		$minor=$_POST['r3'];
		$mobile=$_POST['t4'];
		$telephone=$_POST['t5'];
		$email=$_POST['t6'];
		$r_addr=$_POST['ra'];
		$p_addr=$_POST['pa'];
		//image uploading
		$image= $_FILES['image']['name'];
	
	$tempname=$_FILES['image']['tmp_name'];

	move_uploaded_file($tempname,"../dataimg/$image");
	
	$sign= $_FILES['image']['name'];
	
	$tpname=$_FILES['image']['tmp_name'];

	move_uploaded_file($tpname,"../dataimg/$sign");


		$b=$_POST['edu2'];
		$c=$_POST['edu1'];
		$cn=$_POST['edu3'];
		$cl=$_POST['edu4'];
		$sn=$_POST['edu5'];
		$py=$_POST['edu6'];
		$tm=$_POST['edu7'];
		$mo=$_POST['edu8'];
		$per=$_POST['edu9'];
		$f=$_POST['edu11'];
		$c=$_POST['edu12'];
		$s=$_POST['edu13'];
		$ms= $_FILES['edu10']['name'];
	
	$tempname=$_FILES['edu10']['tmp_name'];

	move_uploaded_file($tempname,"../dataimg/$image");

	print_r($_POST);
 ?>