
<?php
	include"header.php";
?>

<html>
<head><title></title>
<script language="javascript">
function Fee()
{
var a=receipt.total.value;
b=receipt.Paying.value;
c=a-b;
receipt.Remaining.value=c;
}
</script>
</head>
<body>
<fieldset>
<legend>Receipt</legend>
<form name="receipt" method="POST" action="fee.php">
Application ID : <input type="text"id="name" name="Aid"> <br><br>
faculty: <input type="text"id="name" name="fty"> <br><br>

class: <input type="text"id="name" name="class"> <br><br>
Total Fee : <input type="text" name="total" onblur="Fee()"> <br><br>
Fee Paying : <input type="text" name="Paying" onblur="Fee()"> <br><br>
Fee Remaining : <input type="text" name="Remaining"><br><br>
Payment Status : <input type="text"name="status"> <br><br>
<input type="submit"name="submit"value="submit">
</fieldset>
</form>
</body>
</html>


<?php
	if(isset($_POST['submit']))
  {

  include('../dbcon.php');

  print_r($_POST);

  $urn= mt_rand(10000,99999);
  $appl_id= $_POST['Aid'];
  $tf= $_POST['total'];
  $fp= $_POST['Paying'];
  $rem= $_POST['Remaining'];
  $ps= $_POST['status'];
  $rn=mt_rand(100,9999);

  $qry="insert into admission(urn,appl_id,fees,paid_amount,remaining_fee,fee_status,receipt_no)values('$urn','$appl_id','$tf','$fp','$rem','$ps','$rn')";

  $run=mysqli_query($con,$qry);

    if($run==true)
    {
      ?>
      <script>
        alert("student Details Saved Successfully");
        window.open('rec.php','_self');
      </script>
      <?php
    }
}

?>
