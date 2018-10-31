<?php
include("../session_validate.php");
include("dbconnect.php");
error_reporting(0);
$db->connect();
$a="insert";
$course_id=$_REQUEST["course_id"];
$year=$_REQUEST["year"];

?>
<form method="post" action="course_fees_insert.php" id="formID" class="form-horizontal">

<input type="hidden" id="course_id" name="course_id" value="<?php echo $course_id; ?>">
<input name="year" type="hidden" value="<?php echo $year; ?>">
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
<thead>
<tr>
<th><div class="i-checks">
<input id="selAll" type="checkbox" value="" class="checkbox-template" onClick="sall(this)">
<label for="selAll">&nbsp;</label>
</div></th>
<th>Fees Type </th>
<th>Fees</th>
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
  <td><div class="i-checks">
	<input id="ftid[]" name="ftid[]" type="checkbox" value="<?php echo $row["fee_type_id"]; ?>" class="checkbox-template ftcheck">
<label for="trp1">&nbsp;</label>
</div></td>
  <td><?php echo $row["fee_type"]; ?></td>
<td><input type="text" id="feestype<?php echo $row["fee_type_id"]; ?>" name="<?php echo $row["fee_type_id"]; ?>" class="col-xs-10 col-sm-20 form-control" placeholder="Global Fees" onBlur="call('feestype<?php echo $row["fee_type_id"]; ?>')"></td>  
<?php
$sql1="select * from categories";
$res1=$db->query($sql1);
while($row1=$db->fetch_array($res1))
{
  $sql2="select * from course_fees where course_id='$course_id' and year='$year' and fee_type_id='".$row["fee_type_id"]."' and category_id='".$row1["category_id"]."'";
  $res2=$db->query($sql2);
  $row2=$db->fetch_array($res2);
?>
<td><input type="text" id="<?php echo $row1["category_id"]; ?>" name="fees<?php echo $row["fee_type_id"]; ?><?php echo $row1["category_id"]; ?>" class="col-xs-10 col-sm-20 form-control feestype<?php echo $row["fee_type_id"]; ?>" placeholder="Fees" value="<?php echo $row2["fee"]; ?>"></td>
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
<div class="form-actions"> <div class="col-sm-9 offset-sm-3">

  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>

   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>

  </div>

</form>
