<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$student_id=$_REQUEST["student_id"];
$course_id=$_REQUEST["course_id"];
$year=$_REQUEST["year"];
$sqlr="select * from student_fees sf,fee_types ft where sf.fee_type_id=ft.fee_type_id and sf.year='$year' and student_id='$student_id' and course_id='$course_id'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
$fees_paid=$_POST["paid_amount".$rowr["fee_type_id"]];
if($fees_paid!="" && $fees_paid>0)
{
$data=array();
$data["student_id"]=$_POST["student_id"];
$data["course_id"]=$_POST["course_id"];
$data["year"]=$_POST["year"];
$data["fee_type_id"]=$rowr["fee_type_id"];
$data["fees_paid"]=$fees_paid;
$data["paid_date"]=$_POST["paid_date"];
$data["payment_mode"]=$_POST["payment_mode"];
$data["dd_number"]=$_POST["dd_number"];
$data["fees_received_by"]=$_POST["fees_received_by"];
$data["comments"]=$_POST["comments"];
$data["approval_status"]=0;
$db->query_insert("student_payments",$data);
}
}
 $db->close();
 $_SESSION["vsims_msg"]="Student Payment Updated Successfully";
  header("location:student_payments_form.php");
?>
