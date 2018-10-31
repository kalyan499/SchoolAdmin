<?php

include("dbconnect.php");
$db->connect();
$data["country_id"]=$_POST["country_id"];
$data["state_name"]=$_POST["state_name"];
$db->query_insert("states",$data);

 $db->close();

?>

<script type="text/javascript">

alert("states Info Added");

document.location="states_view.php";

</script>