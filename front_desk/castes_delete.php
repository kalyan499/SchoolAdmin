<?php

include("dbconnect.php");
$db->connect();
$caste_id=$_REQUEST["caste_id"];
$sql="delete from castes where caste_id='$caste_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("castes Info Deleted");

document.location="castes_view.php";

</script>