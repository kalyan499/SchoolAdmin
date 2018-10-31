<?php

include("dbconnect.php");
$db->connect();
$data["book_id"]=$_POST["book_id"];
$data["student_id"]=$_POST["student_id"];
$data["issue_date"]=$_POST["issue_date"];
$data["due_date"]=$_POST["due_date"];
$data["return_date"]=$_POST["return_date"];
$data["fine_amount"]=$_POST["fine_amount"];
$db->query_update("student_book_issues","student_book_issue_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("student_book_issues Info Updated");

document.location="student_book_issues_view.php";

</script>