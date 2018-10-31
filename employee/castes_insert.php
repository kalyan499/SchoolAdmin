<?php

include("dbconnect.php");
$db->connect();
$data["caste_name"]=$_POST["caste_name"];
$db->query_insert("castes",$data);

 $db->close();

?>

<script type="text/javascript">

alert("castes Info Added");

document.location="castes_view.php";

</script>