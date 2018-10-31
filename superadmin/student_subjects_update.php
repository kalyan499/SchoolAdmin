<?php

include("dbconnect.php");
$db->connect();
$data["student_id"]=$_POST["student_id"];
$data["subject_id"]=$_POST["subject_id"];
$db->query_update("student_subjects","student_subject_id='".$_POST['student_subject_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("student_subjects Info Updated");

document.location="student_subjects_view.php";

</script>