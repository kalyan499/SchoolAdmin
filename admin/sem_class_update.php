<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["class_sem_name"]=$_POST["class_sem_name"];
$db->query_update("sem_class",$data,"sem='".$_POST['sem']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Sem Class Updated Successfully";

 header("location:sem_class_view.php");
?>