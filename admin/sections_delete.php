<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$section_id=$_REQUEST["section_id"];
$sql="delete from sections where section_id='$section_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Sections Deleted Successfully";

 header("location:sections_view.php");
?>