<?php

include("dbconnect.php");
$db->connect();
$employee_book_issue_id=$_REQUEST["employee_book_issue_id"];
$sql="delete from employee_book_issues where employee_book_issue_id='$employee_book_issue_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("employee_book_issues Info Deleted");

document.location="employee_book_issues_view.php";

</script>