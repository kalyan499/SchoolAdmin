<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
if($a=="insert")
{
$data["country_id"]=$_POST["country_id"];
$data["state_name"]=$_POST["state_name"];
$db->query_insert("states",$data);
$_SESSION["vsims_msg"]="State Added Successfully";
}
else if($a=="update")
{
$data["country_id"]=$_POST["country_id"];
$data["state_name"]=$_POST["state_name"];
$db->query_update("states",$data,"state_id='".$_POST['state_id']."'");
$_SESSION["vsims_msg"]="State Updated Successfully";
}
 $db->close();

header("location:states_view.php");
?>
