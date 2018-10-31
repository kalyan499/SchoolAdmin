<?php

include("dbconnect.php");
$db->connect();
$employee_type_id=$_REQUEST["employee_type_id"];
$sql="delete from employee_types where employee_type_id='$employee_type_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("employee_types Info Deleted");

document.location="employee_types_view.php";

</script>