<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
$data["fee_type"]=$_POST["fee_type"];

if($a=="insert")
{
$db->query_insert("fee_types",$data);
$_SESSION["vsims_msg"]="Fee Type Added Successfully";
}
else if($a=="update")
{
$db->query_update("fee_types",$data,"fee_type_id='".$_POST['fee_type_id']."'");
$_SESSION["vsims_msg"]="Fee Type Updated Successfully";
}
$db->close();

header("location:fee_types_view.php");
?>