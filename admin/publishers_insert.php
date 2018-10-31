<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
if($a=="insert")
{
$data["name"]=$_POST["name"];
$db->query_insert("publishers",$data);

$_SESSION["vsims_msg"]="Publisher Added Successfully";
}
else if($a=="update")
{
$data["name"]=$_POST["name"];
$db->query_update("publishers",$data,"publisher_id='".$_POST['publisher_id']."'");


$_SESSION["vsims_msg"]="Publisher Updated Successfully";
}
 $db->close();
header("location:publishers_view.php");

?>