<?php

include("dbconnect.php");
$db->connect();
$data["religion_name"]=$_POST["religion_name"];
$db->query_insert("religions",$data);

 $db->close();

?>

<script type="text/javascript">

alert("religions Info Added");

document.location="religions_view.php";

</script>