<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
if($a=="insert")
{
$data["sortname"]=$_POST["sortname"];
$data["country_name"]=$_POST["country_name"];
$data["phonecode"]=$_POST["phonecode"];
$db->query_insert("countries",$data);
$_SESSION["vsims_msg"]="Country Added Successfully";
}
else if($a=="update")
{
$data["sortname"]=$_POST["sortname"];
$data["country_name"]=$_POST["country_name"];
$data["phonecode"]=$_POST["phonecode"];
$db->query_update("countries",$data,"country_id='".$_POST['country_id']."'");
$_SESSION["vsims_msg"]="Country Updated Successfully";
}
 $db->close();

header("location:countries_view.php");
?>
