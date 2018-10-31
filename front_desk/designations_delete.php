<?php

include("dbconnect.php");
$db->connect();
$designation_id=$_REQUEST["designation_id"];
$sql="delete from designations where designation_id='$designation_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("designations Info Deleted");

document.location="designations_view.php";

</script>