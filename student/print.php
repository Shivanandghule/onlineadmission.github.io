<?php
	include 'header.php';
 ?>


<?php

  include('../dbcon.php');
  session_start();
	print_r($_SESSION);
  ?>

  <html>
  <center>
    <fieldset style="width:50%;border-style: solid;border-color:#000000;border-width: 4px;">
  <table border="0">


  <?php
        $id=$_SESSION['appl_id'];//$_GET['Aid'];
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
    <tr>


    	<th><h1>Application Form</h1></th>
    </tr>
    <tr>  <td>Student Name : <?php echo $data['sname'];?></td><br>
    <td rowspan="4"colspan="6"><img src="../dataimg/<?php echo $data['photo']; ?>" style="max-width:100px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td><br>
    </tr><tr>
        <td>Father Name :<?php echo $data['father_name']; ?></td>
    </tr><tr><td>Mother Name :<?php echo $data['mother_name']; ?></td>
    </tr><tr><td>Gender : <?php echo $data['gender']; ?></td>
    </tr><tr><td>Aadhar No :<?php echo $data['aadhar_no']; ?></td>
      <td rowspan="2"><img src="../dataimg/<?php echo $data['sign']; ?>" style="max-width:100px;"></td>
    </tr><tr><td>DOB : <?php echo $data['dob']; ?></td>
    </tr><tr><td>Birth Place :<?php echo $data['b_place']; ?></td>
    <td colspan="6">Birth taluka :<?php echo $data['b_taluka']; ?></td>
    </tr><tr><td>Birth District :<?php echo $data['b_district']; ?></td>
    <td colspan="6">Birth State :<?php echo $data['b_state']; ?></td>
    </tr><tr><td>Religion :<?php echo $data['religion']; ?></td>
    <td colspan="6">category :<?php echo $data['category']; ?></td>
    </tr><tr><td>caste :<?php echo $data['caste']; ?></td>
    <td colspan="6">bloodgroup :<?php echo $data['bloodgroup']; ?></td>
    </tr><tr><td>Handicap :<?php echo $data['handicap']; ?></td>
    <td colspan="6">Mionority :<?php echo $data['minority']; ?></td>
    </tr><tr><td>Mobile No :<?php echo $data['mobile_no']; ?></td>
    <td colspan="6">Telephone No :<?php echo $data['telephone_no']; ?></td>
    </tr><tr><td>Email :<?php echo $data['email']; ?></td>
    </tr><tr><td>Residential Address :<?php echo $data['res_addr']; ?></td>
    </tr><tr><td>Permanent Address :<?php echo $data['per_addr']; ?></td>
    </tr><tr><td>Previous Education</td></tr>
    <tr><td>School/college :<?php echo $data['college_school']; ?></td>
    </tr><tr><td>Board/university<?php echo $data['board_university']; ?></td>
    </tr><tr><td>Course :<?php echo $data['course']; ?></td>
    <td colspan="6">Class :<?php echo $data['class']; ?></td>
    </tr><tr><td>Seat No :<?php echo $data['seat_no']; ?></td>
    <td colspan="6">Passing Year :<?php echo $data['passing_year']; ?></td>
    </tr><tr><td>Total Marks :<?php echo $data['t_marks']; ?></td>
    <td >Marks :<?php echo $data['m_obtained']; ?></td>
    <td>Percentage :<?php echo $data['percentage']; ?></td>
    </tr><tr><td>Marksheet :<img src="../dataimg/<?php echo $data['marksheet']; ?>" style="max-width:100px;"></td>
    </tr><tr><td>Current Course </td>
    </tr><tr><td>Faculty :<?php echo $data['faculty']; ?></td>
    <td colspan="6">Class :<?php echo $data['c_class']; ?></td>
    </tr><tr><td>Subject :<?php echo $data['subject']; ?></td>
    </tr>
    <tr><td><button onclick="window.print()" style="margin-left:40%;color:black;background-color:yellow;padding: 10px 10px 8px 30px;line-height: 10px;text-align: center;">print</button></td></tr>
    <?php


    }
  }




?>

</table>
</center>
</fieldset>
</html>
