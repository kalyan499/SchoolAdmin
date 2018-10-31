<?php

include("dbconnect.php");
$db->connect();
$expense_id=$_REQUEST["expense_id"];
$sql="delete from expenses where expense_id='$expense_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("expenses Info Deleted");

document.location="expenses_view.php";

</script>