<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["location"]=$_POST["location"];
$db->query_update("locations",$data,"location_id='".$_POST['location_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Locations Updated Successfully";

 header("location:locations_view.php");
?>