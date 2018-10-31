<?php
include("dbconnect.php");
error_reporting(0);
$db->connect();
$city_id=$_REQUEST["city_id"];
$sqlr="select * from cities where city_id='$city_id'";
$resr=$db->query($sqlr);
$rowr=$db->fetch_array($resr);
echo $rowr["pincode"]; 
$db->close();
?>
