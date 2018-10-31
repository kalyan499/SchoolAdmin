<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["student_id"]=$_POST["student_id"];
$data["subject_id"]=$_POST["subject_id"];
$data["course_id"]=$_POST["course_id"];
$data["sem"]=$_POST["sem"];
$db->query_insert("student_subjects",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Student Subjects Added Successfully";
 header("location:student_subjects_view.php");
?>