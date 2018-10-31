<?php

include("dbconnect.php");
$db->connect();
$data["route_number"]=$_POST["route_number"];
$data["route_distance"]=$_POST["route_distance"];
$data["driver_name"]=$_POST["driver_name"];
$data["assistant_name"]=$_POST["assistant_name"];
$data["vehicle_number"]=$_POST["vehicle_number"];
$data["route_fees"]=$_POST["route_fees"];
$db->query_update("bus_routes","bus_route_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("bus_routes Info Updated");

document.location="bus_routes_view.php";

</script>