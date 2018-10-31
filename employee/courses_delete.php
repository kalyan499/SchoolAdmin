<?php

include("dbconnect.php");
$db->connect();
$course_id=$_REQUEST["course_id"];
$sql="delete from courses where course_id='$course_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("courses Info Deleted");

document.location="courses_view.php";

</script>