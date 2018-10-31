<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$country_id=$_REQUEST["country_id"];
$sql="delete from countries where country_id='$country_id'";
$db->query($sql);

 $db->close();
$_SESSION["vsims_msg"]="Country Deleted Successfully";
header("location:countries_view.php");
?>
