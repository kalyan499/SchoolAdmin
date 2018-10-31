<?php

include("dbconnect.php");
$db->connect();
$data["subject_name"]=$_POST["subject_name"];
$db->query_update("subjects","subject_id='$sf'");

 $db->close();

?>

<script type="text/javascript">

alert("subjects Info Updated");

document.location="subjects_view.php";

</script>