<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$student_marks_id=$_REQUEST["student_marks_id"];
$sql="delete from student_marks where student_marks_id='$student_marks_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Student Marks Deleted Successfully";

 header("location:student_marks_view.php");
?>