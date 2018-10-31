<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$student_payment_fee_id=$_REQUEST["student_payment_fee_id"];
$sql="delete from student_payment_fees where student_payment_fee_id='$student_payment_fee_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Student Payment Fees Deleted Successfully";

 header("location:student_payment_fees_view.php");
?>