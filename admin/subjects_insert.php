<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["subject_name"]=$_POST["subject_name"];
$db->query_insert("subjects",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Subjects Added Successfully";
 header("location:subjects_view.php");
?>