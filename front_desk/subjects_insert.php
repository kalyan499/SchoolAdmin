<?php

include("dbconnect.php");
$db->connect();
$data["subject_name"]=$_POST["subject_name"];
$db->query_insert("subjects",$data);

 $db->close();

?>

<script type="text/javascript">

alert("subjects Info Added");

document.location="subjects_view.php";

</script>