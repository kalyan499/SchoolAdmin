<?php

include("dbconnect.php");
$db->connect();
$data["name"]=$_POST["name"];
$data["is_org"]=$_POST["is_org"];
$db->query_update("roles","role_id='".$_POST['role_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("roles Info Updated");

document.location="roles_view.php";

</script>