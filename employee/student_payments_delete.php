<?php

include("dbconnect.php");
$db->connect();
$student_payment_id=$_REQUEST["student_payment_id"];
$sql="delete from student_payments where student_payment_id='$student_payment_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("student_payments Info Deleted");

document.location="student_payments_view.php";

</script>