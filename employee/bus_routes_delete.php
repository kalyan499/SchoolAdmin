<?php

include("dbconnect.php");
$db->connect();
$bus_route_id=$_REQUEST["bus_route_id"];
$sql="delete from bus_routes where bus_route_id='$bus_route_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("bus_routes Info Deleted");

document.location="bus_routes_view.php";

</script>