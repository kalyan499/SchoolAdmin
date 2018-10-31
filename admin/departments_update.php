<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["department_name"]=$_POST["department_name"];
$db->query_update("departments",$data,"department_id='".$_POST['department_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Departments Updated Successfully";

 header("location:departments_view.php");
?>