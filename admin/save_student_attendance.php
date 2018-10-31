<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$course_id=$_POST['course_id'];
$year=$_POST['year'];
$sql="select * from students where course_id='$course_id' and current_year='$year' and academic_year='".$_SESSION["academic_year"]."'";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
$eid=$row["student_id"];
$data=array();
$data["student_id"]=$eid;
$data["attendance_date"]=$_POST["attendance_date"];
$data["course_id"]=$_POST["course_id"];
$data["year"]=$_POST["year"];
$data["attendance_status"]=$_POST[$eid];
$db->query_insert("student_attendances",$data);
}
 $db->close();

 $_SESSION["vsims_msg"]="Attendance Updated Successfully";
 header("location:attendances_management.php");
?>