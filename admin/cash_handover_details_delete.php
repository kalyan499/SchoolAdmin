<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$cash_handover_id=$_REQUEST["cid"];
$sql="delete from cash_handover_details where cash_handover_id='$cash_handover_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Cash Handover Details Deleted Successfully";

 header("location:cash_handover_details_view.php");
?>