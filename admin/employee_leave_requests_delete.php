<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$employee_leave_request_id=$_REQUEST["employee_leave_request_id"];
$sql="delete from employee_leave_requests where employee_leave_request_id='$employee_leave_request_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Employee Leave Requests Deleted Successfully";

 header("location:employee_leave_requests_view.php");
?>