<?php

include("dbconnect.php");
$db->connect();
$data["job_type_name"]=$_POST["job_type_name"];
$db->query_update("job_types","job_type_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("job_types Info Updated");

document.location="job_types_view.php";

</script>