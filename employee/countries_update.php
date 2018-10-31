<?php

include("dbconnect.php");
$db->connect();
$data["sortname"]=$_POST["sortname"];
$data["country_name"]=$_POST["country_name"];
$data["phonecode"]=$_POST["phonecode"];
$db->query_update("countries","country_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("countries Info Updated");

document.location="countries_view.php";

</script>