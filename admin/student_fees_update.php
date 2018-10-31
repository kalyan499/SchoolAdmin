<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["student_id"]=$_POST["student_id"];
$data["course_id"]=$_POST["course_id"];
$data["year"]=$_POST["year"];
$data["fee_type_id"]=$_POST["fee_type_id"];
$data["fees"]=$_POST["fees"];
$data["paid_status"]=$_POST["paid_status"];
$db->query_update("student_fees",$data,"student_fee_id='".$_POST['student_fee_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Student Fees Updated Successfully";

 header("location:student_fees_view.php");
?>