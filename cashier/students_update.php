<?php

include("dbconnect.php");
$db->connect();
$data["first_name"]=$_POST["first_name"];
$data["middle_name"]=$_POST["middle_name"];
$data["last_name"]=$_POST["last_name"];
$data["mother_name"]=$_POST["mother_name"];
$data["gender"]=$_POST["gender"];
$data["date_of_birth"]=$_POST["date_of_birth"];
$data["sudent_photo"]=$_POST["sudent_photo"];
$data["address"]=$_POST["address"];
$data["mobile"]=$_POST["mobile"];
$data["email"]=$_POST["email"];
$data["aadhar_number"]=$_POST["aadhar_number"];
$data["admission_number"]=$_POST["admission_number"];
$data["roll_number"]=$_POST["roll_number"];
$data["religion_id"]=$_POST["religion_id"];
$data["caste_id"]=$_POST["caste_id"];
$data["category_id"]=$_POST["category_id"];
$data["rte"]=$_POST["rte"];
$data["emergency_contact_number"]=$_POST["emergency_contact_number"];
$data["hostel_opted"]=$_POST["hostel_opted"];
$data["transport_opted"]=$_POST["transport_opted"];
$data["agent_id"]=$_POST["agent_id"];
$data["bus_route_id"]=$_POST["bus_route_id"];
$data["parent_mobile"]=$_POST["parent_mobile"];
$data["parent_email"]=$_POST["parent_email"];
$data["course_id"]=$_POST["course_id"];
$data["current_class_sem"]=$_POST["current_class_sem"];
$data["registration_date"]=$_POST["registration_date"];
$db->query_update("students","student_id='".$_POST['student_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("students Info Updated");

document.location="students_view.php";

</script>