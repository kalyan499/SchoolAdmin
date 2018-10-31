<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();

$data["first_name"]=$_POST["first_name"];
$data["middle_name"]=$_POST["middle_name"];
$data["last_name"]=$_POST["last_name"];
$data["mother_name"]=$_POST["mother_name"];
$data["gender"]=$_POST["gender"];
$data["date_of_birth"]=$_POST["date_of_birth"];
$data["address"]=$_POST["address"];
$data["mobile"]=$_POST["mobile"];
$data["email"]=$_POST["email"];
$data["aadhar_number"]=NULL;
if($_POST["aadhar_number"]!="")
$data["aadhar_number"]=$_POST["aadhar_number"];
$data["employee_code"]=$_POST["employee_code"];
$data["pan_number"]=$_POST["pan_number"];
$data["emergency_number"]=NULL;
if($_POST["emergency_number"]!="")
$data["emergency_number"]=$_POST["emergency_number"];
$data["joining_date"]=$_POST["joining_date"];
$data["job_type_id"]=$_POST["job_type_id"];
$data["payment_mode"]=$_POST["payment_mode"];
$data["bank_name"]=$_POST["bank_name"];
$data["bank_branch"]=$_POST["bank_branch"];
$data["bank_account_number"]=$_POST["bank_account_number"];
$data["ifsc_code"]=$_POST["ifsc_code"];
$data["confirmation_period"]=$_POST["confirmation_period"];
$data["department_id"]=$_POST["department_id"];
$data["location_id"]=$_POST["location_id"];
$data["designation_id"]=$_POST["designation_id"];
$data["qualification_id"]=$_POST["qualification_id"];
$data["is_pf_enabled"]=$_POST["is_pf_enabled"];
$data["pf_uan"]=NULL;
if($_POST["pf_uan"]!="")
$data["pf_uan"]=$_POST["pf_uan"];
$data["pf_number"]=NULL;
if($_POST["pf_number"]!="")
$data["pf_number"]=$_POST["pf_number"];
$data["pf_enrollment_date"]=NULL;
if($_POST["pf_enrollment_date"]!="")
$data["pf_enrollment_date"]=$_POST["pf_enrollment_date"];
$data["epf_number"]=NULL;
if($_POST["epf_number"]!="")
$data["epf_number"]=$_POST["epf_number"];
$data["relationship"]=NULL;
if($_POST["relationship"]!="")
$data["relationship"]=$_POST["relationship"];
$data["is_esi_enabled"]=$_POST["is_esi_enabled"];
$data["esi_number"]=NULL;
if($_POST["esi_number"]!="")
$data["esi_number"]=$_POST["esi_number"];
$data["basic_salary"]=$_POST["fsal"];
$data["approval_status"]='0';
$employee_photo=$_FILES['employee_photo']['name'];
$uploadOk = 1;

if (strpos($employee_photo, '.php') !== false) {
      $uploadOk = 0;
}
else
{
$employee_photo=$_POST["employee_code"]."_photo.jpg";
$tmp_location=$_FILES['employee_photo']['tmp_name'];
$target="../eimages/".$employee_photo;
$target_dir = "../eimages/";
$target_file = $target_dir . basename($_FILES["employee_photo"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$file_info = getimagesize($_FILES['employee_photo']['tmp_name']);

  
      if(empty($file_info)) // No Image?
      {
	  //echo "File is not an image.";
    $uploadOk = 0;
	  }
	  
// Check file size
if ($_FILES["employee_photo"]["size"] > 1048576) {
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
$employee_photo="male.jpg";
else
$employee_photo="female.jpg";
}
else
{
move_uploaded_file($tmp_location,$target);
$data["employee_photo"]=$employee_photo;
}


$db->query_update("employees",$data,"employee_id='".$_POST['employee_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Employees Updated Successfully";

 header("location:all_employees.php");
?>