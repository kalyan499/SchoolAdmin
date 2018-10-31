<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["subject_name"]=$_POST["subject_name"];
$db->query_update("subjects",$data,"subject_id='".$_POST['subject_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Subjects Updated Successfully";

 header("location:subjects_view.php");
?>