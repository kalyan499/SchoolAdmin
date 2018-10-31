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

$data["attendance_status"]=$_POST[$eid];
$db->query_update("employee_attendances",$data,"employee_id='".$eid."' and attendance_date='".$_POST['attendance_date']."'");
}
 $db->close();

 $_SESSION["vsims_msg"]="Attendance Updated Successfully";
 header("location:employeeAttendance.php");
?>