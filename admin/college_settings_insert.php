<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["academic_year"]=$_POST["academic_year"];
$data["passing_marks"]=$_POST["passing_marks"];
$data["college_name"]=$_POST["college_name"];
$db->query_insert("college_settings",$data);

 $db->close();

 $_SESSION["vsims_msg"]="College Settings Added Successfully";
 header("location:college_settings_view.php");
?>