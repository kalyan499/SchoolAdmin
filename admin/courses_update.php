<?php

include("dbconnect.php");
$db->connect();
$data["course_name"]=$_POST["course_name"];
$db->query_update("courses","course_id='".$_POST['course_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("courses Info Updated");

document.location="courses_view.php";

</script>