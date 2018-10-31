<?php
include("../session_validate.php");
include("dbconnect.php");
error_reporting(0);
$db->connect();
$data["first_name"]=$_POST["first_name"];
$data["middle_name"]=$_POST["middle_name"];
$data["last_name"]=$_POST["last_name"];
$data["father_name"]=$_POST["stuFname"];
$data["father_occupation"]=$_POST["father_occupation"];
$data["mother_name"]=$_POST["stuMname"];
$data["mother_occupation"]=$_POST["mother_occupation"];
$data["permenant_address"]=$_POST["permenant_address"];
$data["country_id"]=$_POST["country_id"];
$data["state_id"]=$_POST["state_id"];
$data["parent_country_id"]=$_POST["parent_country_id"];
$data["parent_state_id"]=$_POST["parent_state_id"];
$data["section_id"]=$_POST["section_id"];
$data["current_year"]=$_POST["year"];
$data["gender"]=$_POST["gender"];
$data["date_of_birth"]=$_POST["date_of_birth"];
$data["sudent_photo"]="";
$data["address"]=$_POST["address"];
$data["mobile"]=$_POST["mobile"];
$data["email"]=$_POST["email"];
$data["aadhar_number"]=$_POST["aadhar_number"];
$data["admission_number"]=$_POST["admission_number"];
$data["roll_number"]=$_POST["roll_number"];
$data["religion_id"]=$_POST["religion_id"];
$data["caste_id"]=$_POST["caste_id"];
$data["category_id"]=$_POST["category_id"];
$data["emergency_contact_number"]=$_POST["emergency_contact_number"];
$data["hostel_opted"]=$_POST["hostel_opted"];
$data["transport_opted"]=$_POST["transport_opted"];

if($_POST["agent_id"]=="")
$data["agent_id"]="null";
else
$data["agent_id"]=$_POST["agent_id"];

$data["parent_mobile"]=$_POST["parent_mobile"];
$data["parent_email"]=$_POST["parent_email"];
$data["course_id"]=$_POST["course_id"];
$data["current_sem"]=$_POST["current_sem"];
$data["approval_status"]=1;

$db->query_update("students",$data,"student_id='".$_POST['student_id']."'");

 $db->close();
 $_SESSION["vsims_msg"]="Student Details Updated Successfully";
header("location:all_students.php");
?>
