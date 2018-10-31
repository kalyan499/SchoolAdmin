<?php

include("dbconnect.php");
$db->connect();
$data["employee_type"]=$_POST["employee_type"];
$db->query_insert("employee_types",$data);

 $db->close();

?>

<script type="text/javascript">

alert("employee_types Info Added");

document.location="employee_types_view.php";

</script>