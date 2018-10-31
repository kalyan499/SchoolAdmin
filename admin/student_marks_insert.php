<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["exam_subject_id"]=$_POST["exam_subject_id"];
$data["student_id"]=$_POST["student_id"];
$data["marks"]=$_POST["marks"];
$db->query_insert("student_marks",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Student Marks Added Successfully";
 header("location:student_marks_view.php");
?>