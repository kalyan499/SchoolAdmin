<?php

include("dbconnect.php");
$db->connect();
$data["employee_id"]=$_POST["employee_id"];
$data["paid_date"]=$_POST["paid_date"];
$data["payout_month"]=$_POST["payout_month"];
$data["payout_year"]=$_POST["payout_year"];
$data["basic_salary"]=$_POST["basic_salary"];
$data["approval_status"]=$_POST["approval_status"];
$db->query_update("employee_payouts","employee_payout_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("employee_payouts Info Updated");

document.location="employee_payouts_view.php";

</script>