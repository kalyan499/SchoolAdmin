<?php

include("dbconnect.php");
$db->connect();
$data["designation"]=$_POST["designation"];
$db->query_update("designations","designation_id='".$_POST['designation_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("designations Info Updated");

document.location="designations_view.php";

</script>