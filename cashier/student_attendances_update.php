<?php

include("dbconnect.php");
$db->connect();
$data["student_id"]=$_POST["student_id"];
$data["attendance_date"]=$_POST["attendance_date"];
$data["attendance_time"]=$_POST["attendance_time"];
$data["status"]=$_POST["status"];
$data["subject_id"]=$_POST["subject_id"];
$data["course_id"]=$_POST["course_id"];
$data["sem"]=$_POST["sem"];
$db->query_update("student_attendances","student_attendance_id='".$_POST['student_attendance_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("student_attendances Info Updated");

document.location="student_attendances_view.php";

</script>