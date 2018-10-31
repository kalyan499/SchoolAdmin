<?php

include("dbconnect.php");
$db->connect();
$employee_payout_id=$_REQUEST["employee_payout_id"];
$sql="delete from employee_payouts where employee_payout_id='$employee_payout_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("employee_payouts Info Deleted");

document.location="employee_payouts_view.php";

</script>