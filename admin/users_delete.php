<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$user_id=$_REQUEST["user_id"];
$sql="delete from users where user_id='$user_id'";
$db->query($sql);

 $db->close();
 $_SESSION["vsims_msg"]="User Deleted Successfully";
  header("location:users_form.php");
?>
