<?php
 $name=$_POST['your_name'];
 $rollno=$_POST['your_rollno'];
 $dob=$_POST['your_dob'];
 $class=$_POST['your_class'];
 $AI=$_POST['AI_mark'];
 $wireless=$_POST['wireless_mark'];
 $design=$_POST['design_mark'];
 $cryptography=$_POST['cryptography_mark'];
 $cnetwork=$_POST['cnetwork_mark'];
  $simulation=$_POST['simulation_mark'];
  
$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("student_mis", $con);



$sql="INSERT INTO student_record (Rollno, Name, Class,DOB,subject1,subject2,subject3,subject4,subject5,subject6) 
VALUES ('$rollno','$name','$class','$dob','$AI','$wireless','$design','$cnetwork','$cryptography','$simulation')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added <br>";
echo '<a href="marksheet.php">'."Input the next student details".'</a>';

mysql_close($con);
?>