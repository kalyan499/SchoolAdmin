<?php

include("dbconnect.php");
$db->connect();
$data["employee_payout_id"]=$_POST["employee_payout_id"];
$data["salary_head_id"]=$_POST["salary_head_id"];
$data["head_amount"]=$_POST["head_amount"];
$db->query_update("employee_payout_heads","employee_payout_head_id='".$_POST['employee_payout_head_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("employee_payout_heads Info Updated");

document.location="employee_payout_heads_view.php";

</script>