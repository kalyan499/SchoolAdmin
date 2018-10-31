<?php

include("dbconnect.php");
$db->connect();
$country_id=$_REQUEST["country_id"];
$sql="delete from countries where country_id='$country_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("countries Info Deleted");

document.location="countries_view.php";

</script>