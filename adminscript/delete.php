<?php

session_start();

		if(isset($_SESSION['uid']))

		{
			echo " ";

		}

		else

		{
			header('location: ../adminlogin.php');
		}

?>

<?php
	include('header.php');

?>

<table>


<form action="deletestudent.php" method="post">





	<tr>
		<th><t2>Enter Student Name</t2></th>

		<td>
		<input type="text" name="name" placeholder="Enter Student Name" required />
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

	<table align="center" width="80%" border="1" style="margin-top:10px;">
	<tr style="background-color:black; color:white;">

	<th>Sr. Number</th>
	<th>URN</th>
	<th>Student Name</th>
	<th>faculty</th>
	<th>Class</th>
	<th>fee Status</th>
	<th>delete</th>>

	</tr>

	</html>

	<?php


	$name= $_POST['name'];

	$sql="SELECT * FROM admission,application WHERE admission.appl_id=application.appl_id and sname LIKE '%$name%'";

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
    <td><?php echo $data['urn']; ?></td>
    <td><?php echo $data['sname'];?></td>
    <td><?php echo $data['faculty']; ?></td>
    <td><?php echo $data['c_class']; ?></td>
    <td><?php echo $data['fee_status']; ?></td>
    <td><a href="deleteform.php?stud_id=<?php echo $data['urn']; ?>">Delete</a></td>
    </tr>

    <?php


    }
  }

  }



?>

</table>

</html>
