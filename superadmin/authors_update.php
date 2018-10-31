<?php

include("dbconnect.php");
$db->connect();
$data["author_name"]=$_POST["author_name"];
$db->query_update("authors","author_id='".$_POST['author_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("authors Info Updated");

document.location="authors_view.php";

</script>