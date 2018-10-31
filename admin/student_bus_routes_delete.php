<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$student_bus_route_id=$_REQUEST["student_bus_route_id"];
$sql="delete from student_bus_routes where student_bus_route_id='$student_bus_route_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Student Bus Routes Deleted Successfully";

 header("location:student_bus_routes_view.php");
?>