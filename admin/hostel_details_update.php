<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["hostel_name"]=$_POST["hostel_name"];
$data["num_of_rooms"]=$_POST["num_of_rooms"];
$data["hostel_fees"]=$_POST["hostel_fees"];
$data["mess_fees"]=$_POST["mess_fees"];
$db->query_update("hostel_details",$data,"hostel_id='".$_POST['hostel_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Hostel Details Updated Successfully";

 header("location:hostel_details_view.php");
?>