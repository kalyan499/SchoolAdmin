<?php

include("dbconnect.php");
$db->connect();
$data["student_id"]=$_POST["student_id"];
$data["course_id"]=$_POST["course_id"];
$data["sem"]=$_POST["sem"];
$data["fee_type_id"]=$_POST["fee_type_id"];
$data["fees_paid"]=$_POST["fees_paid"];
$data["paid_date"]=$_POST["paid_date"];
$data["approval_status"]=$_POST["approval_status"];
$db->query_update("student_payments","student_payment_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("student_payments Info Updated");

document.location="student_payments_view.php";

</script>