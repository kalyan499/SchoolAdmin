<?php

include("dbconnect.php");
$db->connect();
$data["location"]=$_POST["location"];
$db->query_insert("locations",$data);

 $db->close();

?>

<script type="text/javascript">

alert("locations Info Added");

document.location="locations_view.php";

</script>