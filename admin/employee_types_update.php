<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["employee_type"]=$_POST["employee_type"];
$db->query_update("employee_types",$data,"employee_type_id='".$_POST['employee_type_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Employee Types Updated Successfully";

 header("location:employee_types_view.php");
?>