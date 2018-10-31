<?php

include("dbconnect.php");
$db->connect();
$department_id=$_REQUEST["department_id"];
$sql="delete from departments where department_id='$department_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("departments Info Deleted");

document.location="departments_view.php";

</script>