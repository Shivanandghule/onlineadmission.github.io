
<?php

include('../dbcon.php');



	$id=$_REQUEST['stud_id'];

	$qry="DELETE FROM admission WHERE urn='$id';";

	$result=mysqli_query($con,$qry);

	if($result == true)
	{

	?>


	<script>

		alert('Data Deleted Successfully.');


			window.open('delete.php','_self');


	</script>

	<?php


	}

?>
