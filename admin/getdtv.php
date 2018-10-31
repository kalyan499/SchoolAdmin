<?php
include("dbconnect.php");
error_reporting(0);
$db->connect();
$pcode=$_REQUEST["pcode"];
$sqlr="select pincode,city_id,c.taluk_id,district_id from cities c,taluks t where c.taluk_id=t.taluk_id and pincode='$pcode'";
$resr=$db->query($sqlr);
$rowr=$db->fetch_array($resr);
echo $rowr["district_id"]."$$".$rowr["taluk_id"]."$$".$rowr["city_id"]; 
$db->close();
?>
