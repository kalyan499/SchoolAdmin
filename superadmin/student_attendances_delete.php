<?php

include("dbconnect.php");
$db->connect();
$student_attendance_id=$_REQUEST["student_attendance_id"];
$sql="delete from student_attendances where student_attendance_id='$student_attendance_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("student_attendances Info Deleted");

document.location="student_attendances_view.php";

</script>