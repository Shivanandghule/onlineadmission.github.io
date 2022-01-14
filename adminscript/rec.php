<?php
  include 'header.php';
?>

<html>
<body>
<table>


<form action="rec.php" method="post">




  <tr>
    <th><h3>Enter Application id :</h3></th>

    <td>
    <input type="Number" name="appl_id" placeholder="222222" />
    </td>


    <td>&nbsp; &nbsp;</td>
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
  <body>
  <center>
    <fieldset style="width:60%;border-style: solid;border-color:#000000;border-width: 2px;text-align: left;">



  <?php

  $id= $_POST['appl_id'];

  $sql="select * from admission,student where admission.appl_id=student.appl_id and student.appl_id='$id'";

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

<b><center>
	<fieldset style="width: 80%; align-self: center;">
<center>
<h3>Receipt</h3>
</center>
<fieldset style="border-width: 3px; border-color: navy;">
	<p style="text-align: left;"> Student Name : <?php echo $data['Sname'];?><br><br>
    URN No : <?php echo $data['URN']?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Receipt No : <?php echo $data['receipt_no']; ?><br>
	<br>
	Class : <?php echo $data['c_class']; ?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Course : <?php echo $data['faculty']; ?><br>
	<hr>
	 Date : <?php echo date("Y/m/d")?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 	Time  : <?php echo date("h:i:sa"); ?></p><hr>
	<p align="left">Total Fee &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; &nbsp;  <?php echo $data['fees']; ?></p>
	<p align="left">Fee Paid &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; &nbsp;  <?php echo $data['paid_amount']; ?></p>
	<p align="left">Fee Remaining &nbsp; &nbsp; : &nbsp; &nbsp;  <?php echo $data['remaining_fee']; ?></p>
	<p align="left">Payment Status &nbsp; &nbsp;: &nbsp; &nbsp;  <?php echo $data['fee_status']; ?></p>
  <p align="right">Principal</p>
</fieldset>
  <p>**This is Computer generated receipt and not required principal sign</p>
</fieldset>
<button onclick="window.print()" style="margin-left:6%;color:black;background-color:yellow;padding: 10px 10px 10px 10px;line-height: 10px;text-align: center;">Print</button>
</center>
</b>
</body>
</html>
<?php


    }
  }

  }



?>
