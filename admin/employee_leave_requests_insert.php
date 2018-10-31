<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["employee_id"]=$_POST["employee_id"];
$data["leave_type_id"]=$_POST["leave_type_id"];
$data["from_date"]=$_POST["from_date"];
$data["to_date"]=$_POST["to_date"];
$data["num_days"]=$_POST["num_days"];
$data["remarks"]=$_POST["remarks"];
$data["leave_status"]=$_POST["leave_status"];
$db->query_insert("employee_leave_requests",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Employee Leave Requests Added Successfully";
 header("location:employee_leave_requests_view.php");
?>