<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["book_name"]=$_POST["book_name"];
$data["isbn"]=$_POST["isbn"];
$data["author_id"]=$_POST["author_id"];
$data["publisher_id"]=$_POST["publisher_id"];
$data["purchase_date"]=$_POST["purchase_date"];
$data["purchase_amount"]=$_POST["purchase_amount"];
$data["availability"]=$_POST["availability"];
$db->query_insert("books",$data);

 $db->close();

 $_SESSION["vsims_msg"]="Books Added Successfully";
 header("location:books_view.php");
?>