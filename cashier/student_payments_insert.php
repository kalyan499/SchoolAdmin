<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$student_id=$_REQUEST["student_id"];
$course_id=$_REQUEST["course_id"];
$year=$_REQUEST["year"];
$data=array();
$data["student_id"]=$_POST["student_id"];
$data["course_id"]=$_POST["course_id"];
$data["year"]=$_POST["year"];
$data["paid_date"]=$_POST["paid_date"];
if($_POST["paid_date"]=="" || $_POST["paid_date"]=="0000-00-00")
$data["paid_date"]=date('Y-m-d');
$data["payment_mode"]=$_POST["payment_mode"];
$data["dd_number"]=$_POST["dd_number"];
$data["fees_received_by"]=$_POST["fees_received_by"];
$data["comments"]=$_POST["comments"];
$data["approval_status"]=0;
$student_payment_id=$db->query_insert("student_payments",$data);

$sqlr="select * from student_fees sf,fee_types ft where sf.fee_type_id=ft.fee_type_id and sf.year='$year' and student_id='$student_id' and course_id='$course_id'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
$fees_paid=$_POST["paid_amount".$rowr["fee_type_id"]];
if($fees_paid!="" && $fees_paid>0)
{
$data=array();
$data["student_payment_id"]=$student_payment_id;
$data["fee_type_id"]=$rowr["fee_type_id"];
$data["fees_paid"]=$fees_paid;
$db->query_insert("student_payment_fees",$data);
}
}
if(isset($_POST["hpaid_amount"]) && $_POST["hpaid_amount"]!=0)
{
    $data=array();
$data["student_payment_id"]=$student_payment_id;
$data["fees_paid"]=$_POST["hpaid_amount"];
$db->query_insert("student_payment_hostel_fees",$data);
}
if(isset($_POST["tpaid_amount"]) && $_POST["tpaid_amount"]!=0)
{
    $data=array();
$data["student_payment_id"]=$student_payment_id;
$data["fees_paid"]=$_POST["tpaid_amount"];
$db->query_insert("student_payment_transport_fees",$data);
}
 $db->close();
 $_SESSION["vsims_msg"]="Student Payment Updated Successfully";
  header("location:student_invoice.php?spid=$student_payment_id");
?>
