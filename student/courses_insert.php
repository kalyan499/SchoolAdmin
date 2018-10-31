<?php

include("dbconnect.php");
$db->connect();
$data["course_name"]=$_POST["course_name"];
$db->query_insert("courses",$data);

 $db->close();

?>

<script type="text/javascript">

alert("courses Info Added");

document.location="courses_view.php";

</script>