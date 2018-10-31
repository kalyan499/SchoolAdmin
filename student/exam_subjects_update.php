<?php

include("dbconnect.php");
$db->connect();
$data["exam_id"]=$_POST["exam_id"];
$data["subject_id"]=$_POST["subject_id"];
$data["course_id"]=$_POST["course_id"];
$data["sem"]=$_POST["sem"];
$db->query_update("exam_subjects","exam_subject_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("exam_subjects Info Updated");

document.location="exam_subjects_view.php";

</script>