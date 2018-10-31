<?php

include("dbconnect.php");
$db->connect();
$data["course_id"]=$_POST["course_id"];
$data["subject_id"]=$_POST["subject_id"];
$data["sem"]=$_POST["sem"];
$data["employee_id"]=$_POST["employee_id"];
$db->query_insert("course_subjects",$data);

 $db->close();

?>

<script type="text/javascript">

alert("course_subjects Info Added");

document.location="course_subjects_view.php";

</script>