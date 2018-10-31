<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$leave_type_id=$_REQUEST["leave_type_id"];
$sql="delete from leave_types where leave_type_id='$leave_type_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Leave Types Deleted Successfully";

 header("location:leave_types_view.php");
?>