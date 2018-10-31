<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$data["expense_type_id"]=$_POST["expense_type_id"];
$data["expense_date"]=$_POST["expense_date"];
$data["expense_amount"]=$_POST["expense_amount"];
$data["payment_mode"]=$_POST["payment_mode"];
$data["paid_by"]=$_POST["paid_by"];
$data["remarks"]=$_POST["remarks"];
$db->query_update("expenses",$data,"expense_id='".$_POST['expense_id']."'");

 $db->close();
$_SESSION["vsims_msg"]="Expense Details Updated Successfully";
header("location:expenses_view.php");
?>
