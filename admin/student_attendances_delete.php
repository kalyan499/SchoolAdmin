<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$student_attendance_id=$_REQUEST["student_attendance_id"];
$sql="delete from student_attendances where student_attendance_id='$student_attendance_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Student Attendances Deleted Successfully";

 header("location:student_attendances_view.php");
?>