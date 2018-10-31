<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$expense_type_id=$_REQUEST["expense_type_id"];
$sql="delete from expense_types where expense_type_id='$expense_type_id'";
$db->query($sql);

 $db->close();
$_SESSION["vsims_msg"]="Expense Deleted Successfully";

header("location:expense_types_view.php");
?>
