<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["job_type_name"]=$_POST["job_type_name"];
$db->query_update("job_types",$data,"job_type_id='".$_POST['job_type_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Job Types Updated Successfully";

 header("location:job_types_view.php");
?>