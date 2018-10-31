<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$job_type_id=$_REQUEST["job_type_id"];
$sql="delete from job_types where job_type_id='$job_type_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Job Types Deleted Successfully";

 header("location:job_types_view.php");
?>