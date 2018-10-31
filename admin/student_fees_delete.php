<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$student_fee_id=$_REQUEST["student_fee_id"];
$sql="delete from student_fees where student_fee_id='$student_fee_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Student Fees Deleted Successfully";

 header("location:student_fees_view.php");
?>