<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["role_id"]=$_POST["role_id"];
$data["controller"]=$_POST["controller"];
$data["action"]=$_POST["action"];
$data["permitted"]=$_POST["permitted"];
$db->query_insert("permissions",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Permissions Added Successfully";
 header("location:permissions_view.php");
?>