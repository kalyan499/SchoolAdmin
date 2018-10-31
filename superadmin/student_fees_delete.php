<?php

include("dbconnect.php");
$db->connect();
$student_fee_id=$_REQUEST["student_fee_id"];
$sql="delete from student_fees where student_fee_id='$student_fee_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("student_fees Info Deleted");

document.location="student_fees_view.php";

</script>