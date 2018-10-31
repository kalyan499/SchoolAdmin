<?php

include("dbconnect.php");
$db->connect();
$data["department_name"]=$_POST["department_name"];
$db->query_update("departments","department_id='".$_POST['department_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("departments Info Updated");

document.location="departments_view.php";

</script>