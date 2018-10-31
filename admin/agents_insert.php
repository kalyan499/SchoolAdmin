<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["agent_name"]=$_POST["agent_name"];
$data["agent_address"]=$_POST["agent_address"];
$data["agent_mobile"]=$_POST["agent_mobile"];
$data["agent_email"]=$_POST["agent_email"];
$data["agent_place"]=$_POST["agent_place"];
$db->query_insert("agents",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Agents Added Successfully";
 header("location:agents_view.php");
?>