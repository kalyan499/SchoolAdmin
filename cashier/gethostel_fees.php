<?php
error_reporting(0);
include("dbconnect.php");
$db->connect();
$hostel_id=$_REQUEST["hostel_id"];
$hostel_option=$_REQUEST["hostel_option"];
$sqlr="select * from hostel_details where hostel_id='$hostel_id'";
$resr=$db->query($sqlr);
$rowr=$db->fetch_array($resr);
$hostel_fees=$rowr["hostel_fees"];
$mess_fees=$rowr["mess_fees"];
$tot_fees=$hostel_fees+$mess_fees;
if($hostel_option=="hfees")
echo $hostel_fees;
else
echo $tot_fees;
?>