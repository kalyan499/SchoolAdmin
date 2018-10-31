<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$hostel_id=$_REQUEST["hostel_id"];
$sql="delete from hostel_details where hostel_id='$hostel_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Hostel Details Deleted Successfully";

 header("location:hostel_details.php");
?>