<?php

include("dbconnect.php");
$db->connect();
$job_type_id=$_REQUEST["job_type_id"];
$sql="delete from job_types where job_type_id='$job_type_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("job_types Info Deleted");

document.location="job_types_view.php";

</script>