<?php

include("dbconnect.php");
$db->connect();
$data["category_name"]=$_POST["category_name"];
$db->query_update("categories","category_id='".$_POST['category_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("categories Info Updated");

document.location="categories_view.php";

</script>