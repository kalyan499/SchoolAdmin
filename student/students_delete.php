<?php

include("dbconnect.php");
$db->connect();
$student_id=$_REQUEST["student_id"];
$sql="delete from students where student_id='$student_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("students Info Deleted");

document.location="students_view.php";

</script>