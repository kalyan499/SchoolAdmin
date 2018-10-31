<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$data["expense_type_id"]=$_POST["expense_type_id"];
$data["expense_date"]=$_POST["expense_date"];
$data["payment_mode"]=$_POST["payment_mode"];
$data["paid_by"]=$_POST["paid_by"];
$data["remarks"]=$_POST["remarks"];
$db->query_update("expenses",$data,"expense_id='".$_POST['expense_id']."'");

 $db->close();
$_SESSION["vsims_msg"]="Expense Updated Successfully";

header("location:expenses_view.php");
?>