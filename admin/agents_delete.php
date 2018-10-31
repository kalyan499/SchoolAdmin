<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$agent_id=$_REQUEST["agent_id"];
$sql="delete from agents where agent_id='$agent_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Agents Deleted Successfully";

 header("location:agents_view.php");
?>