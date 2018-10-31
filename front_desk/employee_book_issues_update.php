<?php

include("dbconnect.php");
$db->connect();
$data["book_id"]=$_POST["book_id"];
$data["employee_id"]=$_POST["employee_id"];
$data["issue_date"]=$_POST["issue_date"];
$data["due_date"]=$_POST["due_date"];
$data["return_date"]=$_POST["return_date"];
$data["fine_amount"]=$_POST["fine_amount"];
$db->query_update("employee_book_issues","employee_book_issue_id='".$_POST['employee_book_issue_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("employee_book_issues Info Updated");

document.location="employee_book_issues_view.php";

</script>