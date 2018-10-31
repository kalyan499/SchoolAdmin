<?php

include("dbconnect.php");
$db->connect();
$subject_id=$_REQUEST["subject_id"];
$sql="delete from subjects where subject_id='$subject_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("subjects Info Deleted");

document.location="subjects_view.php";

</script>