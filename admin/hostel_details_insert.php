<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
$data["hostel_name"]=$_POST["hostel_name"];
$data["num_of_rooms"]=$_POST["num_of_rooms"];
$data["hostel_fees"]=$_POST["hostel_fees"];
$data["mess_fees"]=$_POST["mess_fees"];

if($a=="insert")
{
$db->query_insert("hostel_details",$data);
$_SESSION["vsims_msg"]="Hostel Details Added Successfully";
}
else if($a=="update")
{
$db->query_update("hostel_details",$data,"hostel_id='".$_POST['hostel_id']."'");
$_SESSION["vsims_msg"]="Hostel Details Updated Successfully";
}
 $db->close();

 header("location:hostel_details.php");
?>