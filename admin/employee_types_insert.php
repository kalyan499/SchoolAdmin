<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["employee_type"]=$_POST["employee_type"];
$db->query_insert("employee_types",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Employee Types Added Successfully";
 header("location:employee_types_view.php");
?>