<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$publisher_id=$_REQUEST["publisher_id"];
$sql="delete from publishers where publisher_id='$publisher_id'";
$db->query($sql);

 $db->close();
$_SESSION["vsims_msg"]="Publisher Deleted Successfully";
header("location:publishers_view.php");
?>
