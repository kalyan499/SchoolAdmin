<?php

include("dbconnect.php");
$db->connect();
$employee_salary_id=$_REQUEST["employee_salary_id"];
$sql="delete from employee_salaries where employee_salary_id='$employee_salary_id'";
$db->query($sql);

 $db->close();

?>

<script type="text/javascript">

alert("employee_salaries Info Deleted");

document.location="employee_salaries_view.php";

</script>