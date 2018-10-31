<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["section_name"]=$_POST["section_name"];
$db->query_insert("sections",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Sections Added Successfully";
 header("location:sections_view.php");
?>