<?php
	include('header.php');
	include('titlehead.php');

	include('../dbcon.php');

	$sid=$_GET['sid'];

	$sql="SELECT * FROM `item` WHERE `id`='$sid'";
	$result=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($result);

?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">



		<legend><h1 color="blue">Personal Details</h1></legend>
Full Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp;<input type="text" name="name" value=<?php echo $data['sname'];?>required> &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" name="name" value="<img src="../dataimg/<?php echo $data['photo']; ?>" style="max-width:150px;height:140px" align="right">required><br><br>
Father's Name &nbsp; &nbsp; : &nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['father_name']; ?>required> &nbsp; &nbsp; <br><br>
Mothers Name &nbsp;&nbsp; &nbsp; : &nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['mother_name']; ?> required>&nbsp; &nbsp; <br><br>
Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['gender']; ?>required> <br><br>
Aadhar no &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; <input type="file" name="name" value=<?php echo $data['aadhar_no']; ?>
<img src="../dataimg/<?php echo $data['sign']; ?>"required> style="width:150px;height:70px" align="right"><br>&nbsp; &nbsp; <br><br>
</fieldset>

<fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">
<legend><h2>Birth Details</h2></legend>
Date Of Birth &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['dob']; ?> required>&nbsp; &nbsp;  <br><br>
  Religion &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['religion']; ?>required> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  Category &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['category']; ?> required>&nbsp; &nbsp;  <br><br>
  Caste &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp;  <input type="text" name="name" value=<?php echo $data['caste']; ?>required>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Blood Group &nbsp; &nbsp; :  &nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['bloodgroup']; ?>required> &nbsp; &nbsp;  <br><br>
</fieldset>

 <fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">
 <legend><h2>Contact Details</h2></legend>
  Mobile No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp;  <input type="text" name="name" value=<?php echo $data['mobile_no']; ?> required>&nbsp; &nbsp; <br><br>
  Telephone No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp;  <input type="text" name="name" value=<?php echo $data['telephone_no']; ?> required>&nbsp; &nbsp;  <br><br>
  Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['email']; ?> required>&nbsp; &nbsp; &nbsp;  <br><br>
</h2>
</fieldset>
<br>
<br><br>
<fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">
<legend><h2>Address details</h2></legend>
Residential Address &nbsp; &nbsp; :&nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['res_addr']; ?>required>
<br><br>
Permanent Address &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['per_addr'required>]; ?>required>
</fieldset>
<br>
<fieldset style="required>width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">
<legend><h1>Current Education Details</h1></legend>
<h3>Faculty :&nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['faculty']; ?> required>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
Class : &nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['c_class']; ?> required><br><br>
</h3>
</fieldset>
<br>
<fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">
<legend><h1>Fee Drequired>etails</h1></legend>
<h3>Fees :&nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['fees']; ?> required>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>
paid Amount: &nbsp; &nbsp; <inpurequired>t type="text" name="name" value=<?php echo $data['paid_amount']; ?>required> <br><br>
Remaining Fees: &nbsp; &nbsp; <input type="text" name="name" value=<?php echo $data['Remaining_fee']; ?>required><br>
fee status  :&nbsp; &nbsp;<input type="text" name="name" value=<?php echo $data['fee_status']; ?>required>
</h3>
</fieldset>

<input type="hidden" name="sid"  value="<?php echo $data['urn']; ?>" />

	<input type=required>"submit" name="submit"  value="Submrequired>it">



</form>

</body>
</html><?php
	irequired>nclude('../footer.php');

?>
