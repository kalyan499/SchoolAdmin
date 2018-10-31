<?php

include("dbconnect.php");
$db->connect();
$data["location"]=$_POST["location"];
$db->query_update("locations","location_id='".$_POST['location_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("locations Info Updated");

document.location="locations_view.php";

</script>