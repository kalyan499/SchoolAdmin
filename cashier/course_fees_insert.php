<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$ftids=$_POST["ftid"];
if($ftids=="")
{
  $_SESSION["vsims_msg"]="Select Any Fees Types with checkbox";
}
else
{
foreach($ftids as $ftid)
{ 
$sql1="select * from categories";
$res1=$db->query($sql1);
while($row1=$db->fetch_array($res1))
{
 $data=array();
   $data["course_id"]=$_POST["course_id"];
$data["year"]=$_POST["year"];
$data["fee_type_id"]=$ftid;
$data["category_id"]=$row1["category_id"];
$data["fee"]=$_POST["fees$ftid".$row1["category_id"]];
 $sql2="select * from course_fees where course_id='".$_POST["course_id"]."' and year='".$_POST["year"]."' and fee_type_id='".$ftid."' and category_id='".$row1["category_id"]."'";
  $res2=$db->query($sql2);
  if($row2=$db->fetch_array($res2))
  {
  $db->query_update("course_fees",$data,"course_fee_id='".$row2["course_fee_id"]."'");
  }
  else
  {
$db->query_insert("course_fees",$data);
   }
   
}

}
  $_SESSION["vsims_msg"]="Course Fees Updated Successfully";
}

 $db->close();

header("location:course_fees_form.php");
?>