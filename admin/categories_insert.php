<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
if($a=="insert")
{
$data["category_name"]=$_POST["category_name"];
$db->query_insert("categories",$data);

$_SESSION["vsims_msg"]="Category Added Successfully";
}
else if($a=="update")
{
$data["category_name"]=$_POST["category_name"];
$db->query_update("categories",$data,"category_id='".$_POST['category_id']."'");

$_SESSION["vsims_msg"]="Category Updated Successfully";
}
 $db->close();
header("location:categories_view.php");
?>
