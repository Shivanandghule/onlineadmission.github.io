
<?php
	include 'header.php';
 ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function myFunction1() {
  var x = document.getElementById("fname1");
  x.value = x.value.toUpperCase();
}
function myFunction2() {
  var x = document.getElementById("fname2");
  x.value = x.value.toUpperCase();
}
function myFunction3() {
  var x = document.getElementById("fname3");
  x.value = x.value.toUpperCase();
}
</script>
<body>
<form name="personal_details"method="post"action="details.php"enctype="multipart/form-data">
	<script type="text/javascript">
		function percentage()
	{
		var a=personal_details.edu8.value;
		b=personal_details.edu7.value;
		c=a/b*100
		personal_details.edu9.value=c;
	}
	</script>
<fieldset>
<legend><h1 color="blue">Personal Details</h1></legend>
Full Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp <input type="text"name="t1" placeholder="LastName        FirstName          Middlename"size="35"id="fname1" onfocusout="myFunction1()">&nbsp&nbsp&nbsp&nbsp<br><br>
Father's Name &nbsp &nbsp : &nbsp &nbsp <input type="text"name="t2" placeholder="LastName        FirstName          Middlename"size="35"id="fname2" onfocusout="myFunction2()">&nbsp&nbsp<br><br>
Mothers Name &nbsp&nbsp&nbsp: &nbsp &nbsp <input type="text"name="t3"placeholder="LastName        FirstName          Middlename"size="35"id="fname3" onfocusout="myFunction3()">&nbsp&nbsp<br><br>
Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: &nbsp &nbsp <input type="radio"name="r1"value="male"> Male&nbsp&nbsp&nbsp <input type="radio"name="r1"value="female"> Female&nbsp&nbsp <input type="radio"name="r1"value="transgender"> Transgender<br><br>
Aadhar no &nbsp &nbsp &nbsp &nbsp &nbsp :&nbsp &nbsp <input type="text"name="n1"placeholder="1234 5678 1234"maxlength="12">&nbsp&nbsp<br><br>
</fieldset>

<fieldset>
<legend><h2>Birth Details</h2></legend>
Date Of Birth &nbsp &nbsp &nbsp:&nbsp &nbsp <input type="date"name="d1">&nbsp&nbsp  <br><br>
  Place  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp  <input type="text"name="t9">&nbsp&nbsp&nbsp <br><br>
 Taluka &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp  <input type="text"name="t10">&nbsp&nbsp  <br><br>
  District &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp  <input type="text"name="t11">&nbsp&nbsp <br><br>
 State &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp  <input type="text"name="t12">&nbsp&nbsp  <br><br>
  Religion &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :&nbsp &nbsp  <input type="text"name="t7">&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
  Category &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp  <select name="s1">
<option value="select">Select</option>
<option value="ST">ST</option>
<option value="SC">SC</option>
<option value="VJNT">VJNT</option>
<option value="NT(A)">NT(A)</option>
<option value="NT(B)">NT(B)</option>
<option value="NT(C)">NT(C)</option>
<option value="NT(D)">NT(D)</option>
<option value="OBC">OBC</option>
<option value="SBC">SBC</option>
<option value="SEBC">SEBC</option>
<option value="PWD">PWD</option>
<option value="EWS">EWS</option>
<option value="OPEN">OPEN</option>
</select>&nbsp &nbsp  <br><br>
  Caste &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp  <input type="text"name="t8">
  &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Blood Group &nbsp &nbsp:&nbsp &nbsp  <select name="s2">
<option value="select">Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>&nbsp&nbsp  <br><br>
  Handicap &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp <input type="radio"name="r2"value="yes"> Yes&nbsp&nbsp<input type="radio"name="r2"value="NO"> No&nbsp&nbsp <br><br>
 Minority  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp <input type="radio"name="r3"value="yes"> Yes&nbsp&nbsp<input type="radio"name="r3"value="no"> No&nbsp&nbsp  <br><br>
</fieldset>

 <fieldset>
 <legend><h2>Contact Details</h2></legend>
  Mobile No &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp  <input type="text"name="t4"maxlength="10"required>&nbsp&nbsp <br><br>
  Telephone No &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp  <input type="text"name="t5">&nbsp&nbsp  <br><br>
  Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp  <input type="email"name="t6"placeholder="abc@gmail.com"required>&nbsp&nbsp&nbsp  <br><br>
</h2>
</fieldset>
<br>
<br><br>
<fieldset>
<legend><h2>Address details</h2></legend>
Residential Address &nbsp &nbsp :&nbsp &nbsp<textarea rows="3"cols="40"name="ra"required></textarea>
<br><br>
Permanent Address &nbsp &nbsp &nbsp:&nbsp &nbsp<textarea rows="3" cols="40"name="pa"required>  </textarea>
</fieldset>
<br><br>
<fieldset>
<legend><h2>Upload</h2></legend>
Photo  &nbsp &nbsp &nbsp:&nbsp &nbsp  <input type="file"name="image"required>
<br><br>
Sign  &nbsp &nbsp &nbsp:&nbsp &nbsp  <input type="file"name="sign"required>
</fieldset>
<br><br>
<fieldset>
<legend><h1>Previous Education Details</h1></legend>
<h3>Board/University &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;:&nbsp; &nbsp;<input type="text" name="edu1" size="50" required></h3>
<h3>Previous School/College Name &nbsp;  &nbsp; :&nbsp;  &nbsp;  <input type="text" name="edu2" size="50" required></h3>
<h3>Course Name  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp;  &nbsp;  <input type="text" name="edu3" size="50" required></h3>
<h3>Class &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; :&nbsp; &nbsp;  <input type="text" name="edu4" size="50" required></h3>
<h3>Seat No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  :&nbsp; &nbsp;  <input type="text" name="edu5" size="50" required></h3>
<h3>Passing Year &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;  <input type="text" name="edu6" size="50" maxlength="4" required></h3>
<h3>Total Marks &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;  <input type="text" name="edu7" onblur="percentage()" size="50" required></h3>
<h3>Marks Obtained  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;  <input type="text" name="edu8" size="50" onblur="percentage()" required> </h3>
<h3>Percentage &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;  <input type="text" name="edu9" maxlength="4" size="50"></h3>
<h3>Marksheet &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;  <input type="file" name="edu10"></h3>
</fieldset>
<br>
<fieldset>
<legend><h1>Current Education Details</h1></legend>
<h3>Faculty :&nbsp; &nbsp; <select name="edu11">
<option value="select">select</option>
<option value="Science">Science</option>
<option value="Arts">Arts</option>
<option value="Commerce">Commerce</option>
<option value="Computer Science">Computer Science</option>
</select>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
Class : &nbsp; &nbsp; <select name="edu12">
<option value="select">select</option>
<option value="11th"> 11 <sup> th </sup> </option>
<option value="12th"> 12 <sup>th</sup> </option>
<option value="First Year">First Year</option>
<option value="Second Year">Second Year</option>
<option value="Third Year">Third Year</option>
</select><br><br>
Subjects :
<br><br> <textarea rows="8" cols="15" placeholder="e.g.English" name="edu13"></textarea>
</h3>
</fieldset>
<br><br>
<input style="padding: 15px 32px;font-size: 24px;" type="submit"name="submit"value="SUBMIT">
&nbsp&nbsp&nbsp
<input style="padding: 15px 32px;font-size: 24px;" type="reset"name="reset"value="RESET">
</form>
</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
		include('dbcon.php');

		$appl_id=mt_rand(1000,999999);
		$_SESSION['appl_id']=$appl_id;
		echo $_SESSION['appl_id'];
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

	$sign= $_FILES['sign']['name'];

	$tpname=$_FILES['sign']['tmp_name'];

	move_uploaded_file($tpname,"../dataimg/$sign");

	$b=$_POST['edu1'];
		$c=$_POST['edu2'];
		$cn=$_POST['edu3'];
		$cl=$_POST['edu4'];
		$sn=$_POST['edu5'];
		$py=$_POST['edu6'];
		$tm=$_POST['edu7'];
		$mo=$_POST['edu8'];
		$per=$_POST['edu9'];
		$ms= $_FILES['edu10']['name'];

	$temp=$_FILES['edu10']['tmp_name'];

	move_uploaded_file($temp,"../dataimg/$ms");

		$f=$_POST['edu11'];
		$c=$_POST['edu12'];
		$s=$_POST['edu13'];

	print_r($_POST);
	print_r($_FILES);


		$qry="INSERT INTO student (appl_id, Sname, father_name, mother_name, gender, aadhar_no, dob, B_place, B_taluka, B_district, B_state, religion, category, caste, bloodgroup, handicap, minority, mobile_no, telephone_no, email, res_addr, per_addr, photo, sign, board_university, college_school, course, class, seat_no, passing_year, t_marks, m_obtained, percentage, marksheet, faculty, c_class, subject) VALUES ('$appl_id', '$Sname', '$Father', '$Mother', '$gender', '$aadhar', '$dob', '$b_place', '$b_taluka', '$b_district', '$b_state', '$religion', '$category', '$caste', '$bloodgroup', '$handicap', '$minor', '$mobile',$telephone, '$email', '$r_addr', '$p_addr', '$image', '$sign', '$b', '$c', '$cn', '$cl', '$sn', '$py', '$tm', '$mo', '$per', '$ms', '$f', '$c', '$s') ";

		$run=mysqli_query($con,$qry);
		print_r($run);
		if($run==true)
		{

  			?>

			<script>
				alert("Your Personal Details Saved Successfully");
				window.open('print.php?Aid=<?php echo $appl_id;?>','_self');
			</script>
			<?php
		}

	}
?>
