<?php

include("dbconnect.php");
$db->connect();
$data["name"]=$_POST["name"];
$data["is_org"]=$_POST["is_org"];
$db->query_update("roles","role_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("roles Info Updated");

document.location="roles_view.php";

</script>