<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$employee_salary_id=$_REQUEST["employee_salary_id"];
$sql="delete from employee_salaries where employee_salary_id='$employee_salary_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Employee Salaries Deleted Successfully";

 header("location:employee_salaries_view.php");
?>