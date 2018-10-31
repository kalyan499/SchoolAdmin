<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$category_id=$_REQUEST["category_id"];
$sql="delete from categories where category_id='$category_id'";
$db->query($sql);

 $db->close();
$_SESSION["vsims_msg"]="Category Deleted Successfully";
header("location:categories_view.php");
?>