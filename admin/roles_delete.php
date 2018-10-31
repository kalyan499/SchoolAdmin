<?php

include("dbconnect.php");
$db->connect();
$role_id=$_REQUEST["role_id"];
$sql="delete from roles where role_id='$role_id'";
$db->query($sql);

 $db->close();
 $_SESSION["vsims_msg"]="Roles Deleted Successfully";
header("location:roles_form.php");
?>
