<?php

include("dbconnect.php");
$db->connect();
$data["salary_head"]=$_POST["salary_head"];
$data["head_type"]=$_POST["head_type"];
$data["head_percentage"]=$_POST["head_percentage"];
$db->query_update("salary_heads","salary_head_id='".$_POST['salary_head_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("salary_heads Info Updated");

document.location="salary_heads_view.php";

</script>