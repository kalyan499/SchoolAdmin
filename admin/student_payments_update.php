<?php

include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$spid=$_REQUEST["spid"];

$data["approval_status"]=1;
$student_payment_id=$db->query_update("student_payments",$data,"student_payment_id='$spid'");


 $db->close();
 $_SESSION["vsims_msg"]="Student Payment Approved Successfully";
  header("location:home.php");
?>