<?php

include("dbconnect.php");
$db->connect();
$data["caste_name"]=$_POST["caste_name"];
$db->query_update("castes","caste_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("castes Info Updated");

document.location="castes_view.php";

</script>