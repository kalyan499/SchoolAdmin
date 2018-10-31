<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["class_sem_name"]=$_POST["class_sem_name"];
$db->query_insert("sem_class",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Sem Class Added Successfully";
 header("location:sem_class_view.php");
?>