<?php

include("dbconnect.php");
$db->connect();
$employee_leave_request_id=$_REQUEST["employee_leave_request_id"];
$sql="delete from employee_leave_requests where employee_leave_request_id='$employee_leave_request_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("employee_leave_requests Info Deleted");

document.location="employee_leave_requests_view.php";

</script>