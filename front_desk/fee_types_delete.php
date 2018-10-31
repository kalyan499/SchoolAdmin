<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$fee_type_id=$_REQUEST["fee_type_id"];
$sql="delete from fee_types where fee_type_id='$fee_type_id'";
$db->query($sql);

 $db->close();
  $_SESSION["vsims_msg"]="Fee Type Deleted Successfully";
header("location:fee_types_view.php");
?>
