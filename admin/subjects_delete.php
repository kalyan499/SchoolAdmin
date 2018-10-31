<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$subject_id=$_REQUEST["subject_id"];
$sql="delete from subjects where subject_id='$subject_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Subjects Deleted Successfully";

 header("location:subjects_view.php");
?>