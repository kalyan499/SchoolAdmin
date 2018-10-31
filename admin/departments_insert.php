<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
$data["department_name"]=$_POST["department_name"];
if($a=="insert")
{

$db->query_insert("departments",$data);
 $_SESSION["vsims_msg"]="Departments Added Successfully";
}
else
{
$db->query_update("departments",$data,"department_id='".$_POST['department_id']."'");
  $_SESSION["vsims_msg"]="Departments Updated Successfully";
}
 $db->close();


 header("location:departments_view.php");
?>