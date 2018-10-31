<?php

include("dbconnect.php");
$db->connect();
$data["first_name"]=$_POST["first_name"];
$data["middle_name"]=$_POST["middle_name"];
$data["last_name"]=$_POST["last_name"];
$data["mother_name"]=$_POST["mother_name"];
$data["gender"]=$_POST["gender"];
$data["date_of_birth"]=$_POST["date_of_birth"];
$data["employee_photo"]=$_POST["employee_photo"];
$data["address"]=$_POST["address"];
$data["mobile"]=$_POST["mobile"];
$data["email"]=$_POST["email"];
$data["aadhar_number"]=$_POST["aadhar_number"];
$data["employee_type_id"]=$_POST["employee_type_id"];
$data["employee_code"]=$_POST["employee_code"];
$data["pan_number"]=$_POST["pan_number"];
$data["emergency_number"]=$_POST["emergency_number"];
$data["joining_date"]=$_POST["joining_date"];
$data["job_type_id"]=$_POST["job_type_id"];
$data["payment_mode"]=$_POST["payment_mode"];
$data["bank_account_number"]=$_POST["bank_account_number"];
$data["confirmation_period"]=$_POST["confirmation_period"];
$data["department_id"]=$_POST["department_id"];
$data["location_id"]=$_POST["location_id"];
$data["designation_id"]=$_POST["designation_id"];
$data["is_pf_enabled"]=$_POST["is_pf_enabled"];
$data["pf_uan"]=$_POST["pf_uan"];
$data["pf_number"]=$_POST["pf_number"];
$data["pf_enrollment_date"]=$_POST["pf_enrollment_date"];
$data["epf_number"]=$_POST["epf_number"];
$data["relationship"]=$_POST["relationship"];
$data["is_eps_enabled"]=$_POST["is_eps_enabled"];
$data["is_esi_enabled"]=$_POST["is_esi_enabled"];
$data["esi_number"]=$_POST["esi_number"];
$data["basic_salary"]=$_POST["basic_salary"];
$data["approval_status"]=$_POST["approval_status"];
$data["registration_date"]=$_POST["registration_date"];
$db->query_update("employees","employee_id='".$_POST['employee_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("employees Info Updated");

document.location="employees_view.php";

</script>