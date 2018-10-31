<?php

include("dbconnect.php");
$db->connect();
$data["job_type_name"]=$_POST["job_type_name"];
$db->query_insert("job_types",$data);

 $db->close();

?>

<script type="text/javascript">

alert("job_types Info Added");

document.location="job_types_view.php";

</script>