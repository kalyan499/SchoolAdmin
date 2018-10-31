<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
if($a=="insert")
{
$data["caste_name"]=$_POST["caste_name"];
$data["religion_id"]=$_POST["religion_id"];
$db->query_insert("castes",$data);

$_SESSION["vsims_msg"]="Caste Added Successfully";
}
else if($a=="update")
{
$data["caste_name"]=$_POST["caste_name"];
$data["religion_id"]=$_POST["religion_id"];
$db->query_update("castes",$data,"caste_id='".$_POST['caste_id']."'");

$_SESSION["vsims_msg"]="Caste Updated Successfully";
}
 $db->close();
header("location:castes_view.php");
?>
