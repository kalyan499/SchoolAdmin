<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$employee_book_issue_id=$_REQUEST["employee_book_issue_id"];
$sql="delete from employee_book_issues where employee_book_issue_id='$employee_book_issue_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Employee Book Issues Deleted Successfully";

 header("location:employee_book_issues_view.php");
?>