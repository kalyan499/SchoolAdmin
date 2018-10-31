<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["exam_id"]=$_POST["exam_id"];
$data["subject_id"]=$_POST["subject_id"];
$data["course_id"]=$_POST["course_id"];
$data["sem"]=$_POST["sem"];
$db->query_insert("exam_subjects",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Exam Subjects Added Successfully";
 header("location:exam_subjects_view.php");
?>