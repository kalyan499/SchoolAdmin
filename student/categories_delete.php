<?php

include("dbconnect.php");
$db->connect();
$category_id=$_REQUEST["category_id"];
$sql="delete from categories where category_id='$category_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("categories Info Deleted");

document.location="categories_view.php";

</script>