<?php

include("dbconnect.php");
$db->connect();
$data["leave_type"]=$_POST["leave_type"];
$data["monthly_leaves"]=$_POST["monthly_leaves"];
$data["yearly_leaves"]=$_POST["yearly_leaves"];
$db->query_update("leave_types","leave_type_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("leave_types Info Updated");

document.location="leave_types_view.php";

</script>