<?php

include("dbconnect.php");
$db->connect();
$course_fee_id=$_REQUEST["course_fee_id"];
$sql="delete from course_fees where course_fee_id='$course_fee_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("course_fees Info Deleted");

document.location="course_fees_view.php";

</script>