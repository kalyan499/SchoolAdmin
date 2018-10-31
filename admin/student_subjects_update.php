<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["student_id"]=$_POST["student_id"];
$data["subject_id"]=$_POST["subject_id"];
$data["course_id"]=$_POST["course_id"];
$data["sem"]=$_POST["sem"];
$db->query_update("student_subjects",$data,"student_subject_id='".$_POST['student_subject_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Student Subjects Updated Successfully";

 header("location:student_subjects_view.php");
?>