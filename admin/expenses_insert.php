<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$data["expense_type_id"]=$_POST["expense_type_id"];
$data["expense_date"]=$_POST["expense_date"];
$data["expense_amount"]=$_POST["expense_amount"];
$data["payment_mode"]=$_POST["payment_mode"];
$data["paid_by"]=$_POST["paid_by"];
$data["remarks"]=$_POST["remarks"];
$data["approval_status"]=1;
$_POST["expense_date"];
$db->query_insert("expenses",$data);

 $db->close();
$_SESSION["vsims_msg"]="Expense Details Added Successfully";
header("location:expenses_view.php");
?>