<?php

include("dbconnect.php");
$db->connect();
$fee_type_id=$_REQUEST["fee_type_id"];
$sql="delete from fee_types where fee_type_id='$fee_type_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("fee_types Info Deleted");

document.location="fee_types_view.php";

</script>