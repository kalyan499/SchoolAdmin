<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$a=$_POST["a"];
if($a=="insert")
{
$data["author_name"]=$_POST["author_name"];
$db->query_insert("authors",$data);

$_SESSION["vsims_msg"]="Author Added Successfully";
}
else if($a=="update")
{
$data["author_name"]=$_POST["author_name"];
$db->query_update("authors",$data,"author_id='".$_POST['author_id']."'");

$_SESSION["vsims_msg"]="Author Updated Successfully";
}
 $db->close();
header("location:authors_view.php");
?>