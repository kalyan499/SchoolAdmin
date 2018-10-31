<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["student_id"]=$_POST["student_id"];
$data["hostel_id"]=$_POST["hostel_id"];
$data["course_id"]=$_POST["course_id"];
$data["year"]=$_POST["year"];
$data["opted_for"]=$_POST["opted_for"];
$data["hostel_fees"]=$_POST["hostel_fees"];
$db->query_insert("student_hostels",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Student Hostels Added Successfully";
 header("location:student_hostels_view.php");
?>