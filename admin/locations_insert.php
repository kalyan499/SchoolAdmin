<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
$data["location"]=$_POST["location"];
if($a=="insert")
{
$db->query_insert("locations",$data);
 $_SESSION["vsims_msg"]="Locations Added Successfully";
}
else
{
$db->query_update("locations",$data,"location_id='".$_POST['location_id']."'");
  $_SESSION["vsims_msg"]="Locations Updated Successfully";
}
 $db->close();


 header("location:locations_view.php");
?>