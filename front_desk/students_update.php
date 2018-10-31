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
$data["section_id"]=$_POST["section_id"];
$data["rte"]=$_POST["rte"];
$data["sibling"]=$_POST["sibling"];
if($_POST["sibling_id"]=="")
$data["sibling_id"]="null";
else
$data["sibling_id"]=$_POST["sibling_id"];
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
$data["approval_status"]=0;
$student_photo=$_FILES['student_photo']['name'];
$uploadOk = 1;
if (strpos($student_photo, '.php') !== false) {
      $uploadOk = 0;
}
else
{
$student_photo=$_POST["roll_number"]."_photo.jpg";
$tmp_location=$_FILES['student_photo']['tmp_name'];
$target="../simages/".$student_photo;
$target_dir = "slider/";
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
$target_dir = "slider/";
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
$db->query_update("students",$data,"student_id='".$_POST['student_id']."'");
$student_id=$_POST['student_id'];
$category_id=$_POST["category_id"];
$year=$_POST["year"];
$course_id=$_POST["course_id"];
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
$sqlh="select * from student_hostels where student_id='$student_id' and course_id='$course_id' and year='$year'";
$resh=$db->query($sqlh);
if($rowh=$db->fetch_array($resh))
  $db->query_update("student_hostels",$data,"student_hostel_id='".$rowh["student_hostel_id"]."'");
else
  $db->query_insert("student_hostels",$data);
}
else if($_POST["hostel_opted"]=="No")
{


$sqlh="select * from student_hostels where student_id='$student_id' and course_id='$course_id' and year='$year'";
$resh=$db->query($sqlh);
if($rowh=$db->fetch_array($resh))
  $db->query("delete from student_hostels where  student_id='$student_id' and course_id='$course_id' and year='$year'");

}

if($_POST["transport_opted"]=="Yes")
{
$data=array();
$data["student_id"]=$student_id;
  $data["course_id"]=$_POST["course_id"];
  $data["year"]=$year;
$data["transport_fees"]=$_POST["transport_fees"];
$data["bus_route_id"]=$_POST["bus_route_id"];
$sqlh="select * from student_bus_routes where student_id='$student_id' and course_id='$course_id' and year='$year'";
$resh=$db->query($sqlh);
if($rowh=$db->fetch_array($resh))
  $db->query_update("student_bus_routes",$data,"student_bus_route_id='".$rowh["student_bus_route_id"]."'");
else
  $db->query_insert("student_bus_routes",$data);
}
else if($_POST["transport_opted"]=="No")
{


$sqlh="select * from student_bus_routes where student_id='$student_id' and course_id='$course_id' and year='$year'";
$resh=$db->query($sqlh);
if($rowh=$db->fetch_array($resh))
  $db->query("delete from student_bus_routes where student_id='$student_id' and course_id='$course_id' and year='$year'");

}
 $db->close();
 $_SESSION["vsims_msg"]="Student Details Updated Successfully";
header("location:all_students.php");
?>
