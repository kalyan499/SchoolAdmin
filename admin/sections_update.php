<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["section_name"]=$_POST["section_name"];
$db->query_update("sections",$data,"section_id='".$_POST['section_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Sections Updated Successfully";

 header("location:sections_view.php");
?>