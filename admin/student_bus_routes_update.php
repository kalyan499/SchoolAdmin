<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["student_id"]=$_POST["student_id"];
$data["bus_route_id"]=$_POST["bus_route_id"];
$data["course_id"]=$_POST["course_id"];
$data["year"]=$_POST["year"];
$data["transport_fees"]=$_POST["transport_fees"];
$db->query_update("student_bus_routes",$data,"student_bus_route_id='".$_POST['student_bus_route_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Student Bus Routes Updated Successfully";

 header("location:student_bus_routes_view.php");
?>