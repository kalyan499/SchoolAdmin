<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
$data["leave_type"]=$_POST["leave_type"];
$data["monthly_leaves"]=$_POST["monthly_leaves"];
$data["yearly_leaves"]=$_POST["yearly_leaves"];
if($a=="insert")
{
$db->query_insert("leave_types",$data);
 $_SESSION["vsims_msg"]="Leave Types Added Successfully";
 }
else
{
$db->query_update("leave_types",$data,"leave_type_id='".$_POST['leave_type_id']."'");
   $_SESSION["vsims_msg"]="Leave Types Updated Successfully";
}
 
 $db->close();


 header("location:leave_types_view.php");
?>