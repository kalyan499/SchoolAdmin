<?php

include("dbconnect.php");
$db->connect();
$location_id=$_REQUEST["location_id"];
$sql="delete from locations where location_id='$location_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("locations Info Deleted");

document.location="locations_view.php";

</script>