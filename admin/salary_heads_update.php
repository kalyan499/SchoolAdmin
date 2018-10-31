<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["salary_head"]=$_POST["salary_head"];
$data["head_type"]=$_POST["head_type"];
$data["head_percentage"]=$_POST["head_percentage"];
$db->query_update("salary_heads",$data,"salary_head_id='".$_POST['salary_head_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Salary Heads Updated Successfully";

 header("location:salary_heads_view.php");
?>