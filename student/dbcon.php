<?php
   /*$host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname =student";
   $credentials = "user=root";*/


   $con = mysqli_connect( 'localhost','root','','student');
   if($con==null)
   {
      $create=mysqli_query("CREATE DATABASE student");

      $con = mysqli_connect( 'localhost','root','','student');

      if(!$con)
      {
       echo "Error : Unable to open database\n";
      }
      else
      {
         echo "Opened database successfully\n";
      }
   }
   else
   {
         echo"hii";
   }
?>
