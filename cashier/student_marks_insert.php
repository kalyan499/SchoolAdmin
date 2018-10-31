<?php

include("dbconnect.php");
$db->connect();
$data["exam_subject_id"]=$_POST["exam_subject_id"];
$data["student_id"]=$_POST["student_id"];
$data["marks"]=$_POST["marks"];
$db->query_insert("student_marks",$data);

 $db->close();

?>

<script type="text/javascript">

alert("student_marks Info Added");

document.location="student_marks_view.php";

</script>