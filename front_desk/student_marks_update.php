<?php

include("dbconnect.php");
$db->connect();
$data["exam_subject_id"]=$_POST["exam_subject_id"];
$data["student_id"]=$_POST["student_id"];
$data["marks"]=$_POST["marks"];
$db->query_update("student_marks","student_marks_id='".$_POST['student_marks_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("student_marks Info Updated");

document.location="student_marks_view.php";

</script>