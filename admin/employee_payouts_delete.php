<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$employee_payout_id=$_REQUEST["employee_payout_id"];
$sql="delete from employee_payouts where employee_payout_id='$employee_payout_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Employee Payouts Deleted Successfully";

 header("location:employee_payouts_view.php");
?>