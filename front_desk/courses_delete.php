<?php

include("dbconnect.php");
$db->connect();
$course_id=$_REQUEST["course_id"];
$sql="delete from courses where course_id='$course_id'";
$db->query($sql);

 $db->close();
 $_SESSION["vsims_msg"]="Course Deleted Successfully";
header("location:courses_view.php");
?>
