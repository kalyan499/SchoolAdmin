<?php

include("dbconnect.php");
$db->connect();
$data["department_name"]=$_POST["department_name"];
$db->query_insert("departments",$data);

 $db->close();

?>

<script type="text/javascript">

alert("departments Info Added");

document.location="departments_view.php";

</script>