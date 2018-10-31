<?php

include("dbconnect.php");
$db->connect();
$state_id=$_REQUEST["state_id"];
$sql="delete from states where state_id='$state_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("states Info Deleted");

document.location="states_view.php";

</script>