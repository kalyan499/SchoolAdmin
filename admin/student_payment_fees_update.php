<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["student_payment_id"]=$_POST["student_payment_id"];
$data["fee_type_id"]=$_POST["fee_type_id"];
$data["fees_paid"]=$_POST["fees_paid"];
$db->query_update("student_payment_fees",$data,"student_payment_fee_id='".$_POST['student_payment_fee_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Student Payment Fees Updated Successfully";

 header("location:student_payment_fees_view.php");
?>