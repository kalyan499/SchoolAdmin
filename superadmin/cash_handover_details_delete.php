<?php

include("dbconnect.php");
$db->connect();
$cash_handover_id=$_REQUEST["cash_handover_id"];
$sql="delete from cash_handover_details where cash_handover_id='$cash_handover_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("cash_handover_details Info Deleted");

document.location="cash_handover_details_view.php";

</script>