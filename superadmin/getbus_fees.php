<?php
error_reporting(0);
include("dbconnect.php");
$db->connect();
$bus_route_id=$_REQUEST["bus_route_id"];
$sqlr="select * from bus_routes where bus_route_id='$bus_route_id'";
$resr=$db->query($sqlr);
$rowr=$db->fetch_array($resr);
echo $rowr["route_fees"];
?>