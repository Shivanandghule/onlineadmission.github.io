<?php
  include 'header.php';
?>

<html>
<body>
<table>


<form action="student_search.php" method="post">




  <tr>
    <th><h2>Enter URN No :<h2> </th>

    <td>
    <input type="Number" name="urn" placeholder="222222" />
    </td>


  </tr>



  <tr>
    <td cospan="2" align="center">
    <input type="submit" name="submit" value="Search"/>
    </td>

  </tr>


</form>

</table>


    <?php

  if(isset($_REQUEST['submit']))
  {

  include('../dbcon.php');

  ?>

  <html>
  <center>
    <fieldset style="width:60%;border-style: solid;border-color:#390039;border-width: 2px;text-align: left;">



  <?php

  $id= $_POST['urn'];

  $sql="SELECT * FROM student,admission where student.appl_id=admission.appl_id and urn='$id'";

  $result=mysqli_query($con,$sql);

  if(mysqli_num_rows($result)<1)
  {

    echo"<tr><td colspan='6' >No Records Found</td></tr>";
  }

  else
  {

    $count=0;

    while($data=mysqli_fetch_assoc($result))
    {
      $count++;

    ?>

<legend><h1 color="blue">Personal Details</h1></legend>
Full Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <?php echo $data['sname'];?> &nbsp; &nbsp; &nbsp; &nbsp;
<img src="../dataimg/<?php echo $data['photo']; ?>" style="max-width:150px;height:140px" align="right"><br><br>
Father's Name &nbsp; &nbsp; : &nbsp; &nbsp; <?php echo $data['father_name']; ?> &nbsp; &nbsp; <br><br>
Mothers Name &nbsp;&nbsp; &nbsp; : &nbsp; &nbsp; <?php echo $data['mother_name']; ?> &nbsp; &nbsp; <br><br>
Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; <?php echo $data['gender']; ?> <br><br>
Aadhar no &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; <?php echo $data['aadhar_no']; ?>
<img src="../dataimg/<?php echo $data['sign']; ?>" style="width:150px;height:70px" align="right"><br>&nbsp; &nbsp; <br><br>
Date Of Birth &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <?php echo $data['dob']; ?> &nbsp; &nbsp;  <br><br>
  Birth Place  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp;  <?php echo $data['b_place']; ?> &nbsp; &nbsp; &nbsp; <br><br>
  Category &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <?php echo $data['category']; ?> &nbsp; &nbsp;  <br><br>
  Caste &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp;  <?php echo $data['caste']; ?>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Blood Group &nbsp; &nbsp; :  &nbsp; &nbsp; <?php echo $data['bloodgroup']; ?> &nbsp; &nbsp;  <br><br>
  Handicap &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <?php echo $data['handicap']; ?> &nbsp; &nbsp; <br><br>
 Minority  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <?php echo $data['minority']; ?> &nbsp; &nbsp;  <br><br>
</fieldset>

 <fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">
 <legend><h2>Contact Details</h2></legend>
  Mobile No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp;  <?php echo $data['mobile_no']; ?> &nbsp; &nbsp; <br><br>
  Telephone No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp;  <?php echo $data['telephone_no']; ?> &nbsp; &nbsp;  <br><br>
  Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <?php echo $data['email']; ?> &nbsp; &nbsp; &nbsp;  <br><br>
</h2>
</fieldset>
<br>
<br><br>
<fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">
<legend><h2>Address details</h2></legend>
Residential Address &nbsp; &nbsp; :&nbsp; &nbsp; <?php echo $data['res_addr']; ?>
<br><br>
Permanent Address &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp; <?php echo $data['per_addr']; ?>
<h3>Faculty :&nbsp; &nbsp; <?php echo $data['faculty']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
Class : &nbsp; &nbsp; <?php echo $data['c_class']; ?> <br><br>
</h3>

<?php


    }
  }

  }



?>


</fieldset></center>
</html>
