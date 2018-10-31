<?php

include("dbconnect.php");
$db->connect();
$data["salary_head"]=$_POST["salary_head"];
$data["head_type"]=$_POST["head_type"];
$data["head_percentage"]=$_POST["head_percentage"];
$db->query_insert("salary_heads",$data);

 $db->close();

?>

<script type="text/javascript">

alert("salary_heads Info Added");

document.location="salary_heads_view.php";

</script>