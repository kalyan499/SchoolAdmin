<?php

include("dbconnect.php");
$db->connect();
$data["name"]=$_POST["name"];
$data["min_marks"]=$_POST["min_marks"];
$data["max_marks"]=$_POST["max_marks"];
$data["exam_date"]=$_POST["exam_date"];
$data["course_id"]=$_POST["course_id"];
$data["sem"]=$_POST["sem"];
$data["description"]=$_POST["description"];
$db->query_insert("exams",$data);

 $db->close();

?>

<script type="text/javascript">

alert("exams Info Added");

document.location="exams_view.php";

</script>