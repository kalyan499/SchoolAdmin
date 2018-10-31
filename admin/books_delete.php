<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$book_id=$_REQUEST["book_id"];
$sql="delete from books where book_id='$book_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Books Deleted Successfully";

 header("location:books_view.php");
?>