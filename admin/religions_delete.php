<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$religion_id=$_REQUEST["religion_id"];
$sql="delete from religions where religion_id='$religion_id'";
$db->query($sql);

 $db->close();
$_SESSION["vsims_msg"]="Religion Deleted Successfully";
header("location:religions_view.php");
?>
