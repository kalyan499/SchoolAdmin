<?php

include("dbconnect.php");
$db->connect();
$data["student_id"]=$_POST["student_id"];
$data["subject_id"]=$_POST["subject_id"];
$db->query_insert("student_subjects",$data);

 $db->close();

?>

<script type="text/javascript">

alert("student_subjects Info Added");

document.location="student_subjects_view.php";

</script>