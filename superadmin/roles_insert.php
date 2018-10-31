<?php

include("dbconnect.php");
$db->connect();
$data["name"]=$_POST["name"];
$data["is_org"]=0;
$db->query_insert("roles",$data);

 $db->close();

?>

<script type="text/javascript">

alert("roles Info Added");

document.location="roles_view.php";

</script>