<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$data["expense_type"]=$_POST["expense_type"];
$db->query_insert("expense_types",$data);

 $db->close();
$_SESSION["vsims_msg"]="Expense Type Added Successfully";
header("location:expense_types_view.php");
?>
