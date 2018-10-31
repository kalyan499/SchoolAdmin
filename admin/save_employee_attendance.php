<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$sql="select * from employees e,designations d,departments
q where e.designation_id=d.designation_id and e.department_id=q.department_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
$eid=$row["employee_id"];
$data=array();
$data["employee_id"]=$eid;
$data["attendance_date"]=$_POST["attendance_date"];
$data["attendance_status"]=$_POST[$eid];
$db->query_insert("employee_attendances",$data);
}
 $db->close();

 $_SESSION["vsims_msg"]="Attendance Updated Successfully";
 header("location:employeeAttendance.php");
?>