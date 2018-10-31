<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$data["expense_type"]=$_POST["expense_type"];
$db->query_update("expense_types",$data,"expense_type_id='".$_POST['expense_type_id']."'");

$db->close();
$_SESSION["vsims_msg"]="Expense Type Updated Successfully";
header("location:expense_types_view.php");
?>
