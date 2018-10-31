<?php
include("../session_validate.php");
include("dbconnect.php");
error_reporting(0);
$db->connect();

$data['instruction_medium']=$_POST['instruction_medium'];
$data['mother_tounge_id']=$_POST['mother_tounge_id'];
$data['lang_group']=$_POST['lang_group'];
$data['from_other_school']=$_POST['de'];
$data['previous_school_affiliation']=$_POST['previous_school_affiliation'];
$data['transfer_certificate_number']=$_POST['transfer_certificate_number'];
$data['transfer_certificate_date']=$_POST['transfer_certificate_date'];
$data['previous_school_name']=$_POST['previous_school_name'];
$data['previous_school_type']=$_POST['previous_school_type'];
$data['previous_school_address']=$_POST['previous_school_address'];
$data['previous_school_district_id']=$_POST['previous_school_district_id'];
$data['previous_school_taluk_id']=$_POST['previous_school_taluk_id'];
$data['previous_school_city_id']=$_POST['previous_school_city_id'];
$data['previous_school_pincode']=$_POST['previous_school_pincode'];
$data['first_name']=$_POST['first_name'];
$data['middle_name']=$_POST['middle_name'];
$data['last_name']=$_POST['last_name'];
$data['father_first_name']=$_POST['father_first_name'];
$data['father_middle_name']=$_POST['father_middle_name'];
$data['father_last_name']=$_POST['father_last_name'];
$data['father_education']=$_POST['father_education'];
$data['father_occupation']=$_POST['father_occupation'];
$data['father_annual_income']=$_POST['father_annual_income'];
$data['father_caste_id']=$_POST['father_caste_id'];
if($_POST["father_caste_certificate_number"]=="")
$data["father_caste_certificate_number"]="null";
else
$data['father_caste_certificate_number']=$_POST['father_caste_certificate_number'];
$data['father_mobile']=$_POST['father_mobile'];
if($_POST["father_email"]=="")
$data["father_email"]="null";
else
$data['father_email']=$_POST['father_email'];
if($_POST["father_aadhar_number"]=="")
$data["father_aadhar_number"]="null";
else
$data['father_aadhar_number']=$_POST['father_aadhar_number'];
$data['mother_first_name']=$_POST['mother_first_name'];
$data['mother_middle_name']=$_POST['mother_middle_name'];
$data['mother_last_name']=$_POST['mother_last_name'];
$data['mother_education']=$_POST['mother_education'];
$data['mother_occupation']=$_POST['mother_occupation'];
if($_POST["father_aadhar_number"]=="")
$data["father_aadhar_number"]="null";
else
$data['mother_annual_income']=$_POST['mother_annual_income'];
$data['mother_caste_id']=$_POST['mother_caste_id'];
if($_POST["mother_caste_certificate_number"]=="")
$data["mother_caste_certificate_number"]="null";
else
$data['mother_caste_certificate_number']=$_POST['mother_caste_certificate_number'];
$data['mother_mobile']=$_POST['mother_mobile'];
$data['mother_email']=$_POST['mother_email'];
$data['mother_aadhar_number']=$_POST['mother_aadhar_number'];
$data['permenant_address']=$_POST['permenant_address'];
$data['state_id']=$_POST['state_id'];
$data['country_id']=$_POST['country_id'];
$data['district_id']=$_POST['district_id'];
$data['taluk_id']=$_POST['taluk_id'];
$data['city_id']=$_POST['city_id'];
$data['locality']=$_POST['locality'];
$data['pincode']=$_POST['pincode'];
$data['gender']=$_POST['gender'];
$data['date_of_birth']=$_POST['date_of_birth'];
$data['place_of_birth']=$_POST['place_of_birth'];
if($_POST["age_reason"]=="")
$data["age_reason"]="null";
else
$data['age_reason']=$_POST['age_reason'];
if($_POST["blood_group"]=="")
$data["blood_group"]="null";
else
$data['blood_group']=$_POST['blood_group'];
$data['board']=$_POST['board'];
$data['rte']=$_POST['rte'];
$data['sibling']=$_POST['sibling'];
if($_POST["sibling_id"]=="")
$data["sibling_id"]="null";
else
$data['sibling_id']=$_POST['sibling_id'];
if($_POST["email"]=="")
$data["email"]="null";
else
$data['email']=$_POST['email'];
if($_POST["aadhar_number"]=="")
$data["aadhar_number"]="null";
else
$data['aadhar_number']=$_POST['aadhar_number'];
$data['admission_number']=$_POST['admission_number'];
$data['roll_number']=$_POST['roll_number'];
$data['religion_id']=$_POST['religion_id'];
$data['caste_id']=$_POST['caste_id'];
if($_POST["student_caste_certificate_number"]=="")
$data["student_caste_certificate_number"]="null";
else
$data['student_caste_certificate_number']=$_POST['student_caste_certificate_number'];
$data['category_id']=$_POST['category_id'];
if($_POST["emergency_contact_number"]=="")
$data["emergency_contact_number"]="null";
else
$data['emergency_contact_number']=$_POST['emergency_contact_number'];
$data['bpl']=$_POST['bpl'];
if($_POST["bpl_card_number"]=="")
$data["bpl_card_number"]="null";
else
$data['bpl_card_number']=$_POST['bpl_card_number'];
$data['bhagyalakshmi_bond_number']=$_POST['bhagyalakshmi_bond_number'];
$data['child_special_need']=$_POST['child_special_need'];
if($_POST["special_need"]=="")
$data["special_need"]="null";
else
$data['special_need']=$_POST['special_need'];
if($_POST["special_category"]=="")
$data["special_category"]="null";
else
$data['special_category']=$_POST['special_category'];
$data['bmtcbus']=$_POST['bmtcbus'];
$data['single_parent']=$_POST['single_parent'];
$data['sponsored']=$_POST['sponsored'];
if($_POST["sponsoring_agency"]=="")
$data["sponsoring_agency"]="null";
else
$data['sponsoring_agency']=$_POST['sponsoring_agency'];
$data['guardian']=$_POST['guardian'];
if($_POST["guardian_name"]=="")
$data["guardian_name"]="null";
else
$data['guardian_name']=$_POST['guardian_name'];
if($_POST["guardian_address"]=="")
$data["guardian_address"]="null";
else
$data['guardian_address']=$_POST['guardian_address'];
if($_POST["guardian_contact_number"]=="")
$data["guardian_contact_number"]="null";
else
$data['guardian_contact_number']=$_POST['guardian_contact_number'];
if($_POST["guardian_occupation"]=="")
$data["guardian_occupation"]="null";
else
$data['guardian_occupation']=$_POST['guardian_occupation'];
if($_POST["guardian_realationship"]=="")
$data["guardian_realationship"]="null";
else
$data['guardian_realationship']=$_POST['guardian_realationship'];
$data['admission_date']=$_POST['admission_date'];
$data['academic_year']=$_POST['academic_year'];
$data['current_year']=$_POST['year'];
$data['course_id']=$_POST['course_id'];
$data['section_id']=$_POST['section_id'];
if($_POST["bank_name"]=="")
$data["bank_name"]="null";
else
$data['bank_name']=$_POST['bank_name'];
if($_POST["bank_account_number"]=="")
$data["bank_account_number"]="null";
else
$data['bank_account_number']=$_POST['bank_account_number'];
if($_POST["bank_ifsc_code"]=="")
$data["bank_ifsc_code"]="null";
else
$data['bank_ifsc_code']=$_POST['bank_ifsc_code'];
if($_POST["obc_sub_caste_id"]=="")
$data["obc_sub_caste_id"]="null";
else
$data['obc_sub_caste_id']=$_POST['obc_sub_caste_id'];


/*
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
*/

$data["registration_date"]=date('Y-m-d H:i:s');
$data["approval_status"]=1;
$data["academic_year"]=$_SESSION["academic_year"];
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
$data["student_photo"]=$student_photo;
$father_photo=$_FILES['father_photo']['name'];
$uploadOk = 1;
if (strpos($parent_photo, '.php') !== false) {
      $uploadOk = 0;
}
else
{
$father_photo=$_POST["roll_number"]."_father_photo.jpg";
$tmp_location=$_FILES['father_photo']['tmp_name'];
$target="../simages/".$father_photo;
$target_dir = "slider/";
$target_file = $target_dir . basename($_FILES["father_photo"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$file_info = getimagesize($_FILES['father_photo']['tmp_name']);

      if(empty($file_info)) // No Image?
      {
	  //echo "File is not an image.";
    $uploadOk = 0;
	  }
	  
// Check file size
if ($_FILES["father_photo"]["size"] > 1048576) {
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

$father_photo="father_photo.jpg";
}
else
{
move_uploaded_file($tmp_location,$target);
}
$data["father_photo"]=$father_photo;

$mother_photo=$_FILES['mother_photo']['name'];
$uploadOk = 1;
if (strpos($parent_photo, '.php') !== false) {
      $uploadOk = 0;
}
else
{
$mother_photo=$_POST["roll_number"]."_mother_photo.jpg";
$tmp_location=$_FILES['mother_photo']['tmp_name'];
$target="../simages/".$mother_photo;
$target_dir = "slider/";
$target_file = $target_dir . basename($_FILES["mother_photo"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$file_info = getimagesize($_FILES['mother_photo']['tmp_name']);

      if(empty($file_info)) // No Image?
      {
	  //echo "File is not an image.";
    $uploadOk = 0;
	  }
	  
// Check file size
if ($_FILES["mother_photo"]["size"] > 1048576) {
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

$mother_photo="mother_photo.jpg";
}
else
{
move_uploaded_file($tmp_location,$target);
}
$data["mother_photo"]=$mother_photo;


$student_id=$db->query_insert("students",$data);
$category_id=$_POST["category_id"];
$year=$_POST["year"];
$course_id=$_POST["course_id"];
$rte=$_POST["rte"];


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
header("location:student_profile.php?sid=$student_id");
?>
