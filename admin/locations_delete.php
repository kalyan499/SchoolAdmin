<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$location_id=$_REQUEST["location_id"];
$sql="delete from locations where location_id='$location_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Locations Deleted Successfully";

 header("location:locations_view.php");
?>