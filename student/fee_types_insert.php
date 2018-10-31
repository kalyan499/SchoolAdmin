<?php

include("dbconnect.php");
$db->connect();
$data["fee_type"]=$_POST["fee_type"];
$db->query_insert("fee_types",$data);

 $db->close();

?>

<script type="text/javascript">

alert("fee_types Info Added");

document.location="fee_types_view.php";

</script>