<?php

include("dbconnect.php");
$db->connect();
$data["employee_id"]=$_POST["employee_id"];
$data["salary_head_id"]=$_POST["salary_head_id"];
$data["head_amount"]=$_POST["head_amount"];
$db->query_update("employee_salaries","employee_salary_id='".$_POST['employee_salary_id']."'");

 $db->close();

?>

<script type="text/javascript">

alert("employee_salaries Info Updated");

document.location="employee_salaries_view.php";

</script>