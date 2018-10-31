<?php

include("dbconnect.php");
$db->connect();
$data["expense_type"]=$_POST["expense_type"];
$db->query_update("expense_types","expense_type_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("expense_types Info Updated");

document.location="expense_types_view.php";

</script>