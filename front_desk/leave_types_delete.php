<?php

include("dbconnect.php");
$db->connect();
$leave_type_id=$_REQUEST["leave_type_id"];
$sql="delete from leave_types where leave_type_id='$leave_type_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("leave_types Info Deleted");

document.location="leave_types_view.php";

</script>