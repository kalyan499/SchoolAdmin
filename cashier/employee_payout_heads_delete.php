<?php

include("dbconnect.php");
$db->connect();
$employee_payout_head_id=$_REQUEST["employee_payout_head_id"];
$sql="delete from employee_payout_heads where employee_payout_head_id='$employee_payout_head_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("employee_payout_heads Info Deleted");

document.location="employee_payout_heads_view.php";

</script>