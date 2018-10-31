<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$student_payment_id=$_REQUEST["student_payment_id"];
$sql="delete from student_payments where student_payment_id='$student_payment_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Student Payments Deleted Successfully";

 header("location:student_payments_view.php");
?>