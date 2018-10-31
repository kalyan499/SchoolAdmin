<?php

include("dbconnect.php");
$db->connect();
$data["role_id"]=$_POST["role_id"];
$data["username"]=$_POST["username"];
$data["password"]=$_POST["password"];
$data["active"]=$_POST["active"];
$db->query_update("users","user_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("users Info Updated");

document.location="users_view.php";

</script>