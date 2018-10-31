<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$student_id=$_REQUEST["student_id"];
$sql="delete from students where student_id='$student_id'";
$db->query($sql);

 $db->close();
 $_SESSION["vsims_samsg"]="Student Deleted Successfully";
  header("location:all_students.php");
?>
