<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$student_book_issue_id=$_REQUEST["student_book_issue_id"];
$sql="delete from student_book_issues where student_book_issue_id='$student_book_issue_id'";
$db->query($sql);

 $db->close();

  $_SESSION["vsims_msg"]="Student Book Issues Deleted Successfully";

 header("location:student_book_issues_view.php");
?>