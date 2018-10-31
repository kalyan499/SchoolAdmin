<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$exam_subject_id=$_REQUEST["exam_subject_id"];
$sql="delete from exam_subjects where exam_subject_id='$exam_subject_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Exam Subjects Deleted Successfully";

 header("location:exam_subjects_view.php");
?>