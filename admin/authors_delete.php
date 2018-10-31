<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$author_id=$_REQUEST["author_id"];
$sql="delete from authors where author_id='$author_id'";
$db->query($sql);

 $db->close();
$_SESSION["vsims_msg"]="Author Deleted Successfully";
header("location:authors_view.php");
?>