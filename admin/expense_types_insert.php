<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
$data["expense_type"]=$_POST["expense_type"];
if($a=="insert")
$db->query_insert("expense_types",$data);
else
$db->query_insert("expense_types",$data,"expense_type_id='".$_POST["expense_type_id"]."'");
 $db->close();
$_SESSION["vsims_msg"]="Expense Type Updated Successfully";

header("location:expense_types_view.php");
?>