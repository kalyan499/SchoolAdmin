<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
if($a=="insert")
{
$data["religion_name"]=$_POST["religion_name"];
$db->query_insert("religions",$data);
$_SESSION["vsims_msg"]="Religion Added Successfully";
}
else if($a=="update")
{
$data["religion_name"]=$_POST["religion_name"];
$db->query_update("religions",$data,"religion_id='".$_POST['religion_id']."'");
$_SESSION["vsims_msg"]="Religion Updated Successfully";
}
 $db->close();
header("location:religions_view.php");
?>
