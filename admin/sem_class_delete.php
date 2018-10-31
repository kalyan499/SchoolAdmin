<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$sem=$_REQUEST["sem"];
$sql="delete from sem_class where sem='$sem'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Sem Class Deleted Successfully";

 header("location:sem_class_view.php");
?>