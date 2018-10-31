<?php

include("dbconnect.php");
$db->connect();
$data["designation"]=$_POST["designation"];
$db->query_update("designations","designation_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("designations Info Updated");

document.location="designations_view.php";

</script>