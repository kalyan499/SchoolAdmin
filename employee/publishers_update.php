<?php

include("dbconnect.php");
$db->connect();
$data["name"]=$_POST["name"];
$db->query_update("publishers","publisher_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("publishers Info Updated");

document.location="publishers_view.php";

</script>