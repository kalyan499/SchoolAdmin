<?php

include("dbconnect.php");
$db->connect();
$salary_head_id=$_REQUEST["salary_head_id"];
$sql="delete from salary_heads where salary_head_id='$salary_head_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("salary_heads Info Deleted");

document.location="salary_heads_view.php";

</script>