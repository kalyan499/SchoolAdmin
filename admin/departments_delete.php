<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$department_id=$_REQUEST["department_id"];
$sql="delete from departments where department_id='$department_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Departments Deleted Successfully";

 header("location:departments_view.php");
?>