<?php

include("dbconnect.php");
$db->connect();
$student_subject_id=$_REQUEST["student_subject_id"];
$sql="delete from student_subjects where student_subject_id='$student_subject_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("student_subjects Info Deleted");

document.location="student_subjects_view.php";

</script>