<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$course_subject_id=$_REQUEST["course_subject_id"];
$sql="delete from course_subjects where course_subject_id='$course_subject_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Course Subjects Deleted Successfully";

 header("location:course_subjects_view.php");
?>