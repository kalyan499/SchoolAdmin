<?php

include("dbconnect.php");
$db->connect();
$course_subject_id=$_REQUEST["course_subject_id"];
$sql="delete from course_subjects where course_subject_id='$course_subject_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("course_subjects Info Deleted");

document.location="course_subjects_view.php";

</script>