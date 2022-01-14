<?php
  include 'header.php';
?>

<html>
<body>
<table>


<form action="search.php" method="post">




  <tr>
    <th>Enter Application id</th>

    <td>
    <input type="Number" name="appl_id" placeholder="222222" />
    </td>

  <tr>
    <th>Enter Student Name</th>

    <td>
    <input type="text" name="name" placeholder="Enter Student Name"/>
    </td>


  </tr>



  <tr>
    <td cospan="2" align="center">
    <input type="submit" name="submit" value="Search"/>
    </td>

  </tr>


</form>

</table>

<html>
<form>
  <table align="center" >
    <tr>
      <td colspan="2" align="center"><input type="submit" name="view"  value="View All"></td>

    </tr>
  </table>
</form>
</html>

  <?php

  if(isset($_REQUEST['submit']))
  {

  include('../dbcon.php');

  ?>

  <html>
  <center>
    <fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">



  <?php

  $id= $_POST['appl_id'];
  $nm= $_POST['name'];

  $sql="select * from student where appl_id='$id'";

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
</fieldset>

<fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">
<legend><h2>Birth Details</h2></legend>
Date Of Birth &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <?php echo $data['dob']; ?> &nbsp; &nbsp;  <br><br>
  Place  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp;  <?php echo $data['b_place']; ?> &nbsp; &nbsp; &nbsp; <br><br>
 Taluka &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp;  <?php echo $data['b_taluka']; ?> &nbsp; &nbsp;  <br><br>
  District &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <?php echo $data['b_district']; ?> &nbsp; &nbsp; <br><br>
 State &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :  &nbsp; &nbsp; <?php echo $data['b_state']; ?> &nbsp; &nbsp;  <br><br>
  Religion &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; <?php echo $data['religion']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
</fieldset>
<fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">
<legend><h1>Previous Education Details</h1></legend>
<h3>Board/University &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;:&nbsp; &nbsp;<?php echo $data['board_university']; ?></h3>
<h3>Previous School/College Name &nbsp;  &nbsp; :&nbsp;  &nbsp;  <?php echo $data['college_school']; ?></h3>
<h3>Course Name  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp;  &nbsp;  <?php echo $data['course']; ?></h3>
<h3>Class &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp; :&nbsp; &nbsp;  <?php echo $data['class']; ?> </h3>
<h3>Seat No &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  :&nbsp; &nbsp; <?php echo $data['seat_no']; ?></h3>
<h3>Passing Year &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp; <?php echo $data['passing_year']; ?></h3>
<h3>Total Marks &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;  <?php echo $data['t_marks']; ?></h3>
<h3>Marks Obtained  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;  <?php echo $data['m_obtained']; ?> </h3>
<h3>Percentage &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;  <?php echo $data['percentage']; ?> </h3>
<h3>Marksheet &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; &nbsp;  <img src="../dataimg/<?php echo $data['marksheet']; ?>" style="width:100px;height:170px"align="center"><br></h3>
</fieldset>
<br>
<fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">
<legend><h1>Current Education Details</h1></legend>
<h3>Faculty :&nbsp; &nbsp; <?php echo $data['faculty']; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
Class : &nbsp; &nbsp; <?php echo $data['c_class']; ?> <br><br>
Subjects :<?php echo $data['subject']; ?>
</h3>






    <?php


    }
  }

  }



?>


</fieldset></center>

<?php

  if(isset($_REQUEST['view']))
  {

  include('../dbcon.php');

  ?>

  <html>

  <table align="center" width="70%" border="1" style="margin-top:10px;">
  <tr style="background-color:black; color:white;">

  <th>Sr.No</th>
  <th>application id</th>
  <th>Name</th>
  <th>Faculty</th>
  <th>Class</th>

  </tr>

  </html>

  <?php

  $sql="SELECT appl_id,sname,faculty,c_class FROM student";

  $result=mysqli_query($con,$sql);

  if(mysqli_num_rows($result)<1)
  {

    echo"<tr><td colspan='8' >No Records Found</td></tr>";
  }

  else
  {

    $count=0;

    while($data=mysqli_fetch_assoc($result))
    {
      $count++;

    ?>
    <tr align="center">

    <td><?php echo $count;  ?></td>
    <td><?php echo $data['appl_id']; ?></td>
    <td><?php echo $data['sname'];?></td>
    <td><?php echo $data['faculty']; ?></td>
    <td><?php echo $data['c_class']; ?></td>
    </tr>

    <?php


    }
  }

  }



?>

</table>

</html>
