<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["name"]=$_POST["name"];
$data["min_marks"]=$_POST["min_marks"];
$data["max_marks"]=$_POST["max_marks"];
$data["exam_date"]=$_POST["exam_date"];
$data["course_id"]=$_POST["course_id"];
$data["sem"]=$_POST["sem"];
$data["description"]=$_POST["description"];
$db->query_update("exams",$data,"exam_id='".$_POST['exam_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Exams Updated Successfully";

 header("location:exams_view.php");
?>