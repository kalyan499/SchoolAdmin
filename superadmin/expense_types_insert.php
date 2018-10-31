<?php

include("dbconnect.php");
$db->connect();
$data["expense_type"]=$_POST["expense_type"];
$db->query_insert("expense_types",$data);

 $db->close();

?>

<script type="text/javascript">

alert("expense_types Info Added");

document.location="expense_types_view.php";

</script>