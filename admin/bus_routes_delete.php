<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$bus_route_id=$_REQUEST["bus_route_id"];
$sql="delete from bus_routes where bus_route_id='$bus_route_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Bus Routes Deleted Successfully";

 header("location:bus_routes_view.php");
?>