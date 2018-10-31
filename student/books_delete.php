<?php

include("dbconnect.php");
$db->connect();
$book_id=$_REQUEST["book_id"];
$sql="delete from books where book_id='$book_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("books Info Deleted");

document.location="books_view.php";

</script>