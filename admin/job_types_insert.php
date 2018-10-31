<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
$data["job_type_name"]=$_POST["job_type_name"];
if($a=="insert")
{
$db->query_insert("job_types",$data);

 $_SESSION["vsims_msg"]="Job Types Added Successfully";
}
else
{
$db->query_update("job_types",$data,"job_type_id='".$_POST['job_type_id']."'");
  $_SESSION["vsims_msg"]="Job Types Updated Successfully";
}
 $db->close();

 header("location:job_types_view.php");
?>