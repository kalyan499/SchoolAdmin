<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$student_subject_id=$_REQUEST["student_subject_id"];
$sql="delete from student_subjects where student_subject_id='$student_subject_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Student Subjects Deleted Successfully";

 header("location:student_subjects_view.php");
?>