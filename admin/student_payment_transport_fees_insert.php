<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["student_payment_id"]=$_POST["student_payment_id"];
$data["fees_paid"]=$_POST["fees_paid"];
$db->query_insert("student_payment_transport_fees",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Student Payment Transport Fees Added Successfully";
 header("location:student_payment_transport_fees_view.php");
?>