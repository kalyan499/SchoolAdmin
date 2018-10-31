<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];

$data["course_name"]=$_POST["course_name"];
$data["course_duration"]=$_POST["course_duration"];
$data["course_type"]=$_POST["course_type"];
if($a=="insert")
{
$db->query_insert("courses",$data);
$_SESSION["vsims_msg"]="Course Added Successfully";
}
else if($a=="update")
{
$db->query_update("courses",$data,"course_id='".$_POST['course_id']."'");
$_SESSION["vsims_msg"]="Course Updated Successfully";
}
$db->close();

header("location:courses_view.php");
?>