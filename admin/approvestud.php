<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();

$data["approval_status"]=1;
$db->query_update("students",$data,"student_id='".$_REQUEST['sid']."'");

 $db->close();
 $_SESSION["vsims_samsg"]="Student Approved Successfully";
  header("location:home.php");
?>