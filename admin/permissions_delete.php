<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$permission_id=$_REQUEST["permission_id"];
$sql="delete from permissions where permission_id='$permission_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Permissions Deleted Successfully";

 header("location:permissions_view.php");
?>