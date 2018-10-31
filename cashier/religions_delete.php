<?php

include("dbconnect.php");
$db->connect();
$religion_id=$_REQUEST["religion_id"];
$sql="delete from religions where religion_id='$religion_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("religions Info Deleted");

document.location="religions_view.php";

</script>