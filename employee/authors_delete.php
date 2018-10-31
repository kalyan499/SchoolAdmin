<?php

include("dbconnect.php");
$db->connect();
$author_id=$_REQUEST["author_id"];
$sql="delete from authors where author_id='$author_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("authors Info Deleted");

document.location="authors_view.php";

</script>