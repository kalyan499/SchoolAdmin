<?php

include("dbconnect.php");
$db->connect();
$student_book_issue_id=$_REQUEST["student_book_issue_id"];
$sql="delete from student_book_issues where student_book_issue_id='$student_book_issue_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("student_book_issues Info Deleted");

document.location="student_book_issues_view.php";

</script>