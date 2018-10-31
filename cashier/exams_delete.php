<?php

include("dbconnect.php");
$db->connect();
$exam_id=$_REQUEST["exam_id"];
$sql="delete from exams where exam_id='$exam_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("exams Info Deleted");

document.location="exams_view.php";

</script>