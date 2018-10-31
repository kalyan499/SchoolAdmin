<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["leave_type"]=$_POST["leave_type"];
$data["monthly_leaves"]=$_POST["monthly_leaves"];
$data["yearly_leaves"]=$_POST["yearly_leaves"];
$db->query_update("leave_types",$data,"leave_type_id='".$_POST['leave_type_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Leave Types Updated Successfully";

 header("location:leave_types_view.php");
?>