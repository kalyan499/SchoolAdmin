<?php

include("dbconnect.php");
$db->connect();
$data["fee_type"]=$_POST["fee_type"];
$db->query_update("fee_types","fee_type_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("fee_types Info Updated");

document.location="fee_types_view.php";

</script>