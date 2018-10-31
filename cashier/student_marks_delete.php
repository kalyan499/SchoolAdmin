<?php

include("dbconnect.php");
$db->connect();
$student_marks_id=$_REQUEST["student_marks_id"];
$sql="delete from student_marks where student_marks_id='$student_marks_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("student_marks Info Deleted");

document.location="student_marks_view.php";

</script>