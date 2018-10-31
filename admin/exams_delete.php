<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$exam_id=$_REQUEST["exam_id"];
$sql="delete from exams where exam_id='$exam_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Exams Deleted Successfully";

 header("location:exams_view.php");
?>