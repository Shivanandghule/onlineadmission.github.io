<?php
  include 'header.php';
?>

<html>
<body>
<table>


<form action="admission_report.php" method="post">




  <tr>
    <th>Enter Faculty</th>

    <td>
    <input type="text" name="faculty" placeholder="computer science" />
    </td>

  <tr>
    <th>Enter class</th>

    <td>
    <input type="text" name="class" placeholder="Third Year"/>
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
    <fieldset style="width:60%;border-style: solid;border-color:#390039;border-width: 2px;text-align: left;">



  <?php

  $f= $_POST['faculty'];
  $cl= $_POST['class'];

  $sql="SELECT * FROM student,admission where student.appl_id=admission.appl_id and faculty='$f' and c_class='$cl'";

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
    <center><h1>Report</h1></center>
    <h2 align="left">faculty : <?php echo $data['faculty'] ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; class :  <?php echo $data['c_class'] ?></h2>
   <table align="center" width="70%" border="1" style="margin-top:10px;">
  <tr style="background-color:#194C4C; color:white;">

  <th>Sr.No</th>
  <th>Application id</th>
  <th>URN NO</th>
  <th>Name</th>
  <th>Gender</th>
  <th>Fee Status</th>
  </tr>

    <tr align="center">

    <td><?php echo $count;  ?></td>
    <td><?php echo $data['appl_id']; ?></td>
    <td><?php echo $data['urn']; ?></td>
    <td><?php echo $data['sname'];?></td>
    <td><?php echo $data['gender']; ?></td>
    <td><?php echo $data['fee_status']; ?></td>
    </tr>

<?php


    }
  }

  }



?>

</table>
</fieldset>
</center>
</html>


<?php

  if(isset($_REQUEST['view']))
  {

  include('../dbcon.php');

  ?>

  <html>
  <center>
  <fieldset style="width:60%;border-style: solid;border-color:#390039;border-width: 2px;text-align: left;">
  <center><h1>Report</h1></center>
  <table align="center" width="70%" border="1" style="margin-top:10px;">
  <tr style="background-color:#194C4C; color:white;">

  <th>Sr.No</th>
  <th>application id</th>
  <th>Name</th>
  <th>Faculty</th>
  <th>Class</th>
  <th>Fee Status</th>
  </tr>

  </html>

  <?php

  $sql="SELECT * FROM student,admission where student.appl_id=admission.appl_id";

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
    <td><?php echo $data['fee_status']; ?></td>
    </tr>

    <?php


    }
  }

  }



?>

</table>
</fieldset>
</center>
</html>
