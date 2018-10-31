<?php

include("dbconnect.php");
$db->connect();
$data["category_name"]=$_POST["category_name"];
$db->query_insert("categories",$data);

 $db->close();

?>

<script type="text/javascript">

alert("categories Info Added");

document.location="categories_view.php";

</script>