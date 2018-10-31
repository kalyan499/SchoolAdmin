<?php

include("dbconnect.php");
$db->connect();
$data["name"]=$_POST["name"];
$db->query_insert("publishers",$data);

 $db->close();

?>

<script type="text/javascript">

alert("publishers Info Added");

document.location="publishers_view.php";

</script>