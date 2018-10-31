<?php

include("dbconnect.php");
$db->connect();
$agent_id=$_REQUEST["agent_id"];
$sql="delete from agents where agent_id='$agent_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("agents Info Deleted");

document.location="agents_view.php";

</script>