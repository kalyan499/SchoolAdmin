<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$setting_id=$_REQUEST["setting_id"];
$sql="delete from college_settings where setting_id='$setting_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="College Settings Deleted Successfully";

 header("location:college_settings_view.php");
?>