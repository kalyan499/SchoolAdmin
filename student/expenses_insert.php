<?php

include("dbconnect.php");
$db->connect();
$data["expense_type_id"]=$_POST["expense_type_id"];
$data["expense_date"]=$_POST["expense_date"];
$data["payment_mode"]=$_POST["payment_mode"];
$data["paid_by"]=$_POST["paid_by"];
$data["remarks"]=$_POST["remarks"];
$db->query_insert("expenses",$data);

 $db->close();

?>

<script type="text/javascript">

alert("expenses Info Added");

document.location="expenses_view.php";

</script>