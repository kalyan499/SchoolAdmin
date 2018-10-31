<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$employee_id=$_REQUEST["employee_id"];
$sql="delete from employees where employee_id='$employee_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Employees Deleted Successfully";

 header("location:all_employees.php");
?>