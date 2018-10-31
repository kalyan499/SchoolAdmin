<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$data["role_id"]=$_POST["role_id"];
$data["username"]=$_POST["username"];
$data["password"]=md5($_POST["password"]);
$data["active"]=1;
$db->query_insert("users",$data);

 $db->close();
 $_SESSION["vsims_msg"]="User Added Successfully";
  header("location:users_form.php");
?>
