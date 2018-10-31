<?php
include("../session_validate.php");
include("dbconnect.php");
error_reporting(0);
$db->connect();
$a="insert";
$course_id=$_REQUEST["course_id"];
$year=$_REQUEST["year"];

?>

<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
<thead>
<tr>

<th>Fees Type </th>

<?php

$sql="select * from categories";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<th><?php echo $row["category_name"]; ?></th>
<?php
}
?>
</tr>

</thead>
<tbody>
<?php
$sn=1;
$sql="select * from fee_types";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{

?>
<tr>
 
  <td><?php echo $row["fee_type"]; ?></td>

<?php
$sql1="select * from categories";
$res1=$db->query($sql1);
while($row1=$db->fetch_array($res1))
{
  $sql2="select * from course_fees where course_id='$course_id' and year='$year' and fee_type_id='".$row["fee_type_id"]."' and category_id='".$row1["category_id"]."'";
  $res2=$db->query($sql2);
  $row2=$db->fetch_array($res2);
?>
<td><?php echo $row2["fee"]; ?></td>
<?php
}
?>

</tr>
<?php
}
$db->close();
?>
</tbody>
</table>

