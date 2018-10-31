<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$data["book_id"]=$_POST["book_id"];
$data["employee_id"]=$_POST["employee_id"];
$data["issue_date"]=$_POST["issue_date"];
$data["due_date"]=$_POST["due_date"];
$data["return_date"]=$_POST["return_date"];
$data["fine_amount"]=$_POST["fine_amount"];
$db->query_update("employee_book_issues",$data,"employee_book_issue_id='".$_POST['employee_book_issue_id']."'");

 $db->close();

  $_SESSION["vsims_msg"]="Employee Book Issues Updated Successfully";

 header("location:employee_book_issues_view.php");
?>