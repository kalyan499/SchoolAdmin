<?php

include("dbconnect.php");
$db->connect();
$role_id=$_REQUEST["role_id"];
$sql="delete from roles where role_id='$role_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("roles Info Deleted");

document.location="roles_view.php";

</script>