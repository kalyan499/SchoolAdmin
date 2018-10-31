<?php

include("dbconnect.php");
$db->connect();
$data["sortname"]=$_POST["sortname"];
$data["country_name"]=$_POST["country_name"];
$data["phonecode"]=$_POST["phonecode"];
$db->query_insert("countries",$data);

 $db->close();

?>

<script type="text/javascript">

alert("countries Info Added");

document.location="countries_view.php";

</script>