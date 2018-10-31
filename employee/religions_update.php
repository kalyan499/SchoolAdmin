<?php

include("dbconnect.php");
$db->connect();
$data["religion_name"]=$_POST["religion_name"];
$db->query_update("religions","religion_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("religions Info Updated");

document.location="religions_view.php";

</script>