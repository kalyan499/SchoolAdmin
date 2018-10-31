<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$caste_id=$_REQUEST["caste_id"];
$sql="delete from castes where caste_id='$caste_id'";
$db->query($sql);

 $db->close();
$_SESSION["vsims_msg"]="Caste Deleted Successfully";
header("location:castes_view.php");
?>
