<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["designation"]=$_POST["designation"];
$db->query_update("designations",$data,"designation_id='".$_POST['designation_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Designations Updated Successfully";

 header("location:designations_view.php");
?>