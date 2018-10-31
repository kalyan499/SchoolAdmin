<?php

include("dbconnect.php");
$db->connect();
$data["student_id"]=$_POST["student_id"];
$data["course_id"]=$_POST["course_id"];
$data["sem"]=$_POST["sem"];
$data["fee_type_id"]=$_POST["fee_type_id"];
$data["fees"]=$_POST["fees"];
$data["paid_status"]=$_POST["paid_status"];
$db->query_update("student_fees","student_fee_id='".$_POST['student_fee_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("student_fees Info Updated");

document.location="student_fees_view.php";

</script>