<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["designation"]=$_POST["designation"];
$a=$_POST["a"];
if($a=="insert")
{
$db->query_insert("designations",$data);

 $_SESSION["vsims_msg"]="Designations Added Successfully";
}
else
{
$db->query_update("designations",$data,"designation_id='".$_POST['designation_id']."'");
   $_SESSION["vsims_msg"]="Designations Updated Successfully";
}
 $db->close();

 header("location:designations_view.php");
?>