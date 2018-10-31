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

$data["current_year"]=$_POST["year"];
$data["gender"]=$_POST["gender"];
$data["date_of_birth"]=$_POST["date_of_birth"];
$data["address"]=$_POST["address"];
$data["board"]=$_POST["board"];
$data["email"]=$_POST["email"];
if($_POST["aadhar_number"]=="")
$data["aadhar_number"]="null";
else
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
$data["section_id"]=$_POST["section_id"];
$data["sibling"]=$_POST["sibling"];
if($_POST["sibling_id"]=="")
$data["sibling_id"]="null";
else
$data["sibling_id"]=$_POST["sibling_id"];
$data["rte"]=$_POST["rte"];
$data["registration_date"]=date('Y-m-d H:i:s');
$data["approval_status"]=0;
$data["academic_year"]=$_SESSION["academic_year"];
$student_photo=$_FILES['student_photo']['name'];
$uploadOk = 0;
if (strpos($student_photo, '.php') !== false) {
      $uploadOk = 0;
}
else
{
$student_photo=$_POST["roll_number"]."_photo.jpg";
$tmp_location=$_FILES['student_photo']['tmp_name'];
$target="../simages/".$student_photo;
$target_dir = "../simages/";
$target_file = $target_dir . basename($_FILES["student_photo"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$file_info = getimagesize($_FILES['student_photo']['tmp_name']);

      if(empty($file_info)) // No Image?
      {
	  //echo "File is not an image.";
    $uploadOk = 0;
	  }
	  
// Check file size
if ($_FILES["student_photo"]["size"] > 1048576) {
    //echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if(strtolower($imageFileType) != "jpg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpeg"
&& strtolower($imageFileType) != "gif" ) {
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
}
if ($uploadOk == 0) {
if($_POST["gender"]=="Male")
$student_photo="male.jpg";
else
$student_photo="female.jpg";
}
else
{
move_uploaded_file($tmp_location,$target);
}
$data["student_photo"]=$student_photo;
$parent_photo=$_FILES['parent_photo']['name'];
$uploadOk = 1;
if (strpos($parent_photo, '.php') !== false) {
      $uploadOk = 0;
}
else
{
$parent_photo=$_POST["roll_number"]."_parent_photo.jpg";
$tmp_location=$_FILES['parent_photo']['tmp_name'];
$target="../simages/".$parent_photo;
$target_dir = "../simages/";
$target_file = $target_dir . basename($_FILES["parent_photo"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$file_info = getimagesize($_FILES['parent_photo']['tmp_name']);

      if(empty($file_info)) // No Image?
      {
	  //echo "File is not an image.";
    $uploadOk = 0;
	  }
	  
// Check file size
if ($_FILES["parent_photo"]["size"] > 1048576) {
    //echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if(strtolower($imageFileType) != "jpg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpeg"
&& strtolower($imageFileType) != "gif" ) {
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
}
if ($uploadOk == 0) {

$parent_photo="parent_photo.jpg";
}
else
{
move_uploaded_file($tmp_location,$target);
}
$data["parent_photo"]=$parent_photo;
$student_id=$db->query_insert("students",$data);
$category_id=$_POST["category_id"];
$year=$_POST["year"];
$course_id=$_POST["course_id"];
$rte=$_POST["rte"];
if($_POST["hostel_opted"]=="Yes")
{
$data=array();
$data["student_id"]=$student_id;
  $data["course_id"]=$_POST["course_id"];
  $data["year"]=$year;
  if($_POST["hostel_option"]=="hfees")
     $data["opted_for"]="Accommodation Only";
  else if($_POST["hostel_option"]=="mfees")
  $data["opted_for"]="Accommodation with Food";
$data["hostel_fees"]=$_POST["hostel_fees"];
$data["hostel_id"]=$_POST["hostel_id"];
  $db->query_insert("student_hostels",$data);
}
if($_POST["transport_opted"]=="Yes")
{
$data=array();
$data["student_id"]=$student_id;
  $data["course_id"]=$_POST["course_id"];
  $data["year"]=$year;
$data["transport_fees"]=$_POST["transport_fees"];
$data["bus_route_id"]=$_POST["bus_route_id"];
  $db->query_insert("student_bus_routes",$data);
}
$sql="select * from course_fees t1,courses t2,fee_types t3 where t1.course_id=t2.course_id and t1.fee_type_id=t3.fee_type_id and t1.category_id='$category_id' and year='$year' and t1.course_id='$course_id' and t1.rte='$rte'";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
$data=array();
$data["student_id"]=$student_id;
  $ftid=$row["fee_type_id"];
  $data["fee_type_id"]=$ftid;
  $data["fees"]=$_POST[$ftid];
  $data["course_id"]=$_POST["course_id"];
  $data["year"]=$year;
  $data["paid_status"]="unpaid";
  $db->query_insert("student_fees",$data);

}

$sql="select t1.subject_id from course_subjects t1,courses t2,subjects t3 where t1.course_id=t2.course_id and t1.subject_id=t3.subject_id and year='$year' and t1.course_id='$course_id'";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
$data=array();
$data["student_id"]=$student_id;
  $data["subject_id"]=$row["subject_id"];
 $data["course_id"]=$_POST["course_id"];
  $data["year"]=$year;
  $db->query_insert("student_subjects",$data);
}
 $db->close();
  $_SESSION["vsims_msg"]="Student Details Added Successfully";
header("location:all_students.php");
?>
