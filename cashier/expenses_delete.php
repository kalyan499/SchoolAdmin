<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$expense_id=$_REQUEST["expense_id"];
$sql="delete from expenses where expense_id='$expense_id'";
$db->query($sql);

 $db->close();
$_SESSION["vsims_msg"]="Expense Details Deleted Successfully";
header("location:expenses_view.php");
?>
