<? php

  session_start();
       //echo"hii";
       if(isset($_SESSION['uid']))
       {
         echo "";
       }
       else
       {
         header('location : admin_login.php');
       }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.navbar {
  overflow: hidden;
  background-color: brown;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: brown;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: yellow;
}

.show {
  display: block;
}
.sticky
{
  position: -webkit-sticky;
  position: sticky;
  top:0;
}
	.admintitle,.act
	{
	background-image:url(../images/p3.jmysqli);
	color:#fff;
	margin-left:1px;
	margin-right:1px;
	height:140px;
	width:1330px;
	line-height:80px;
	font-size:40px;
  position: absolute;
  top:1px;

	}
  .toright
  {
    position: absolute;
    right:16px;
    text-align: right;

  }
  a.active
  {
    background-color: ;
  }

</style>
</head>
<body link="olivedrab" vlink="greenyellow" alink="khaki" bgcolor="khaki">
	<div class="admintitle" align="center">
			<h1 class="center">Admin Dashboard</h1>
	</div>
  <br><br><br><br><br><br><br>
  <div class="sticky">
  <div class="navbar">
  <a href="../index.php">Home</a>
  <div class="dropdown">
  <button class="dropbtn" onclick="Admission()">Admission
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="Admission">
    <a href="search.php">Search</a>
    <a href="fee.php">Fee_payment</a>
    <a href="rec.php">generate receipt</a>
    <a href="admission_report.php">Report</a>
  </div>
  </div>
  <div class="dropdown">
  <button class="dropbtn" onclick="Student()">Student
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="Student">
    <a href="student_search.php">Search</a>
    <a href="update.php">Update</a>
    <a href="delete.php">Delete</a>
  </div>
  </div>
  <a href="../logout.php"style="text-align: right;">Logout</a>
</div>
</div>

	<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function Admission() {
  document.getElementById("Admission").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var Admission = document.getElementById("Admission");
    if (Admission.classList.contains('show')) {
      Admission.classList.remove('show');
    }
  }
}
function Student() {
  document.getElementById("Student").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var Student = document.getElementById("Student");
    if (admin.classList.contains('show')) {
      admin.classList.remove('show');
    }
  }
}
</script>

</body>
</html>
