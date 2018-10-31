<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["employee_id"]=$_POST["employee_id"];
$data["paid_date"]=$_POST["paid_date"];
$data["payout_month"]=$_POST["payout_month"];
$data["payout_year"]=$_POST["payout_year"];
$data["basic_salary"]=$_POST["basic_salary"];
$data["approval_status"]=$_POST["approval_status"];
$db->query_update("employee_payouts",$data,"employee_payout_id='".$_POST['employee_payout_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Employee Payouts Updated Successfully";

 header("location:employee_payouts_view.php");
?>