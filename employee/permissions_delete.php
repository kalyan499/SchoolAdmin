<?php

include("dbconnect.php");
$db->connect();
$permission_id=$_REQUEST["permission_id"];
$sql="delete from permissions where permission_id='$permission_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("permissions Info Deleted");

document.location="permissions_view.php";

</script>