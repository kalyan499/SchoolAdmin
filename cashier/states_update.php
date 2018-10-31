<?php

include("dbconnect.php");
$db->connect();
$data["country_id"]=$_POST["country_id"];
$data["state_name"]=$_POST["state_name"];
$db->query_update("states","state_id='".$_POST['state_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("states Info Updated");

document.location="states_view.php";

</script>