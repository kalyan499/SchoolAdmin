<?php

include("dbconnect.php");
$db->connect();
$data["employee_type"]=$_POST["employee_type"];
$db->query_update("employee_types","employee_type_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("employee_types Info Updated");

document.location="employee_types_view.php";

</script>