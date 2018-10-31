<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$designation_id=$_REQUEST["designation_id"];
$sql="delete from designations where designation_id='$designation_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Designations Deleted Successfully";

 header("location:designations_view.php");
?>