<?php

include("dbconnect.php");
$db->connect();
$data["course_id"]=$_POST["course_id"];
$data["sem"]=$_POST["sem"];
$data["fee_type_id"]=$_POST["fee_type_id"];
$data["category_id"]=$_POST["category_id"];
$data["fee"]=$_POST["fee"];
$db->query_update("course_fees","course_fee_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("course_fees Info Updated");

document.location="course_fees_view.php";

</script>