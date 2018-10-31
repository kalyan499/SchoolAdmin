<?php

include("dbconnect.php");
$db->connect();
$expense_type_id=$_REQUEST["expense_type_id"];
$sql="delete from expense_types where expense_type_id='$expense_type_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("expense_types Info Deleted");

document.location="expense_types_view.php";

</script>