<?php

include("dbconnect.php");
$db->connect();
$data["designation"]=$_POST["designation"];
$db->query_insert("designations",$data);

 $db->close();

?>

<script type="text/javascript">

alert("designations Info Added");

document.location="designations_view.php";

</script>