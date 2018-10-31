<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["employee_id"]=$_POST["employee_id"];
$data["salary_head_id"]=$_POST["salary_head_id"];
$data["head_amount"]=$_POST["head_amount"];
$db->query_update("employee_salaries",$data,"employee_salary_id='".$_POST['employee_salary_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Employee Salaries Updated Successfully";

 header("location:employee_salaries_view.php");
?>