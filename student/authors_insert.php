<?php

include("dbconnect.php");
$db->connect();
$data["author_name"]=$_POST["author_name"];
$db->query_insert("authors",$data);

 $db->close();

?>

<script type="text/javascript">

alert("authors Info Added");

document.location="authors_view.php";

</script>