<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["employee_payout_id"]=$_POST["employee_payout_id"];
$data["salary_head_id"]=$_POST["salary_head_id"];
$data["head_amount"]=$_POST["head_amount"];
$db->query_insert("employee_payout_heads",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Employee Payout Heads Added Successfully";
 header("location:employee_payout_heads_view.php");
?>