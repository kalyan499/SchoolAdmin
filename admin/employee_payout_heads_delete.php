<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$employee_payout_head_id=$_REQUEST["employee_payout_head_id"];
$sql="delete from employee_payout_heads where employee_payout_head_id='$employee_payout_head_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Employee Payout Heads Deleted Successfully";

 header("location:employee_payout_heads_view.php");
?>