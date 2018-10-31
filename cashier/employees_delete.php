<?php

include("dbconnect.php");
$db->connect();
$employee_id=$_REQUEST["employee_id"];
$sql="delete from employees where employee_id='$employee_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("employees Info Deleted");

document.location="employees_view.php";

</script>