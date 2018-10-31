<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
$data["salary_head"]=$_POST["salary_head"];
$data["head_type"]=$_POST["head_type"];
$data["head_percentage"]=$_POST["head_percentage"];
if($a=="insert")
{
$db->query_insert("salary_heads",$data);
 $_SESSION["vsims_msg"]="Salary Heads Added Successfully";
}
else
{
$db->query_update("salary_heads",$data,"salary_head_id='".$_POST['salary_head_id']."'");
 $_SESSION["vsims_msg"]="Salary Heads Updated Successfully";
}

 $db->close();


 header("location:salary_heads_view.php");
?>