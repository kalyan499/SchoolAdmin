<?php

include("dbconnect.php");
$db->connect();
$user_id=$_REQUEST["user_id"];
$sql="delete from users where user_id='$user_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("users Info Deleted");

document.location="users_view.php";

</script>