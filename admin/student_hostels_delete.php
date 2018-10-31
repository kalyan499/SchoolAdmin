<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$student_hostel_id=$_REQUEST["student_hostel_id"];
$sql="delete from student_hostels where student_hostel_id='$student_hostel_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Student Hostels Deleted Successfully";

 header("location:student_hostels_view.php");
?>