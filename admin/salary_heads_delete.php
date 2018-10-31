<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$salary_head_id=$_REQUEST["salary_head_id"];
$sql="delete from salary_heads where salary_head_id='$salary_head_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Salary Heads Deleted Successfully";

 header("location:salary_heads_view.php");
?>