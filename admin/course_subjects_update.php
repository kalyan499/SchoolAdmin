<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["course_id"]=$_POST["course_id"];
$data["subject_id"]=$_POST["subject_id"];
$data["sem"]=$_POST["sem"];
$data["employee_id"]=$_POST["employee_id"];
$db->query_update("course_subjects",$data,"course_subject_id='".$_POST['course_subject_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Course Subjects Updated Successfully";

 header("location:course_subjects_view.php");
?>