<?php

include("dbconnect.php");
$db->connect();
$data["leave_type"]=$_POST["leave_type"];
$data["monthly_leaves"]=$_POST["monthly_leaves"];
$data["yearly_leaves"]=$_POST["yearly_leaves"];
$db->query_insert("leave_types",$data);

 $db->close();

?>

<script type="text/javascript">

alert("leave_types Info Added");

document.location="leave_types_view.php";

</script>