<?php

include("dbconnect.php");
$db->connect();
$publisher_id=$_REQUEST["publisher_id"];
$sql="delete from publishers where publisher_id='$publisher_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("publishers Info Deleted");

document.location="publishers_view.php";

</script>