<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["route_number"]=$_POST["route_number"];
$data["route_name"]=$_POST["route_name"];
$data["route_distance"]=$_POST["route_distance"];
$data["driver_name"]=$_POST["driver_name"];
$data["driver_license_number"]=$_POST["driver_license_number"];
$data["driver_phone_number"]=$_POST["driver_phone_number"];
$data["assistant_name"]=$_POST["assistant_name"];
$data["vehicle_number"]=$_POST["vehicle_number"];
$data["route_fees"]=$_POST["route_fees"];
$db->query_insert("bus_routes",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Bus Routes Added Successfully";
 header("location:bus_routes_view.php");
?>