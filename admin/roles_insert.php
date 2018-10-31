<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
$data["name"]=$_POST["name"];
$data["is_org"]=0;
$db->query_insert("roles",$data);
if($a=="insert")
{
$db->query_insert("roles",$data);
$_SESSION["vsims_msg"]="User Roles Added Successfully";
}
else if($a=="update")
{
$db->query_update("roles",$data,"role_id='".$_POST['role_id']."'");
$_SESSION["vsims_msg"]="User Roles Updated Successfully";
}
 $db->close();
 
header("location:roles_form.php");
?>