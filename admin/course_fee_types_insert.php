<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$course_id=$_POST["course_id"];
$ftids=$_POST["ftid"];
$ftids1=$_POST["ftid1"];

foreach($ftids as $ftid)
{
  $data=array();
  $data["course_id"]=$course_id;
  $data['fee_type_id']=$ftid;
  $db->query_insert("course_fee_types",$data);
  
}

foreach($ftids1 as $ftid)
{
  $sql="delete from course_fee_types where course_id='$course_id' and fee_type_id='$ftid'";
  $db->query($sql);
  
}
$_SESSION["vsims_msg"]="Course Fee Type Updated Successfully";

$db->close();

header("location:course_fee_types.php");
?>