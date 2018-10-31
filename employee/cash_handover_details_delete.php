<?php

include("dbconnect.php");
$db->connect();
$sql="delete from cash_handover_details where ='$'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("cash_handover_details Info Deleted");

document.location="cash_handover_details_view.php";

</script>