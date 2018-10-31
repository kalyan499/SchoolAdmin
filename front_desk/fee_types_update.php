<?php

include("dbconnect.php");
$db->connect();
$data["fee_type"]=$_POST["fee_type"];
$db->query_update("fee_types","fee_type_id='".$_POST['fee_type_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("fee_types Info Updated");

document.location="fee_types_view.php";

</script>