<?php

include("dbconnect.php");
$db->connect();
$exam_subject_id=$_REQUEST["exam_subject_id"];
$sql="delete from exam_subjects where exam_subject_id='$exam_subject_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("exam_subjects Info Deleted");

document.location="exam_subjects_view.php";

</script>