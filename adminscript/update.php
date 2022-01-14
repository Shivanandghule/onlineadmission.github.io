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

    echo"<tr><td colspan='8' >No Records Found</td></tr>";
  }

  else
  {

    $count=0;

    while($data=mysqli_fetch_assoc($result))
    {
      $count++;

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

    <tr align="center">

    <td><?php echo $count;  ?></td>
    <td><?php echo $data['appl_id']; ?></td>
    <td><?php echo $data['sname'];?></td>
    <td><?php echo $data['faculty']; ?></td>
    <td><?php echo $data['c_class']; ?></td>
   	<td></td>
    </tr>






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

  $sql="SELECT appl_id,sname,faculty,C_class FROM student";

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
