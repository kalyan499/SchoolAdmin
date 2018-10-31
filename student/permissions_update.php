<?php

include("dbconnect.php");
$db->connect();
$data["role_id"]=$_POST["role_id"];
$data["controller"]=$_POST["controller"];
$data["action"]=$_POST["action"];
$data["permitted"]=$_POST["permitted"];
$db->query_update("permissions","permission_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("permissions Info Updated");

document.location="permissions_view.php";

</script>