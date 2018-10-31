<?php

include("dbconnect.php");
$db->connect();
$data["cash_handover_id"]=$_POST["cash_handover_id"];
$data["from_date"]=$_POST["from_date"];
$data["to_date"]=$_POST["to_date"];
$data["amount"]=$_POST["amount"];
$data["hand_over_date"]=$_POST["hand_over_date"];
$data["hand_over_by"]=$_POST["hand_over_by"];
$data["two_thousand"]=$_POST["two_thousand"];
$data["thousand"]=$_POST["thousand"];
$data["five_hundred"]=$_POST["five_hundred"];
$data["two_hundred"]=$_POST["two_hundred"];
$data["hundred"]=$_POST["hundred"];
$data["fifty"]=$_POST["fifty"];
$data["twenty"]=$_POST["twenty"];
$data["ten"]=$_POST["ten"];
$data["total"]=$_POST["total"];
$db->query_update("cash_handover_details","cash_handover_id='".$_POST['cash_handover_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("cash_handover_details Info Updated");

document.location="cash_handover_details_view.php";

</script>