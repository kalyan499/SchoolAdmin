<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$state_id=$_REQUEST["state_id"];
$sql="delete from states where state_id='$state_id'";
$db->query($sql);
$db->close();
$_SESSION["vsims_msg"]="State Deleted Successfully";
header("location:states_view.php");
?>
