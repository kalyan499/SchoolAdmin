<?php
include("../session_validate.php");
include("dbconnect.php");
error_reporting(0);
$db->connect();
$course_id=$_REQUEST["course_id"];
$year=$_REQUEST["year"];
$sql="select * from courses where course_id='$course_id'";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$course_name=strtoupper($row["course_name"]);
$course_name=substr($course_name,0,3);
$sql="select * from college_settings";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$roll_number="";
$cname=ucwords($row["college_name"]);
$words = explode(" ", $cname);
$acronym = "";

foreach ($words as $w) {
  $acronym .= $w[0];
}

$y=date('y');
$rno="01";
$sql="select count(*) as cnt from students where course_id='$course_id' and current_year='$year' and academic_year='".$_SESSION["academic_year"]."'";
$res=$db->query($sql);
if($row=$db->fetch_array($res))
{
    $rno=$row["cnt"]+1;
	if($rno<10)
	    $rno="0".$rno;
}
echo $roll_number=$acronym.$y.$course_name.$rno;
?>
