<?php
include("../session_validate.php");
include("dbconnect.php");
error_reporting(0);
$db->connect();
$a="insert";
$course_id=$_REQUEST["course_id"];
$year=$_REQUEST["year"];
$rte=$_REQUEST["rte"];
?>
<form method="post" action="course_fees_insert.php" id="formID" class="form-horizontal">

<input type="hidden" id="course_id" name="course_id" value="<?php echo $course_id; ?>">
<input name="year" type="hidden" value="<?php echo $year; ?>">
<input name="rte" type="hidden" value="<?php echo $rte; ?>">
<div class="col-md-12">
<div class="table-responsive">
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
$sql="select * from fee_types where fee_type_id in(select fee_type_id from course_fee_types where course_id='$course_id')";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
   $sql3="select count(*) as cnt from course_fees where course_id='$course_id' and year='$year' and fee_type_id='".$row["fee_type_id"]."' and rte='$rte'";
   $res3=$db->query($sql3);
   $row3=$db->fetch_array($res3);
?>
<tr>
  <td><div class="i-checks">
	<input id="ftid[]" name="ftid[]" type="checkbox" value="<?php echo $row["fee_type_id"]; ?>" class="checkbox-template ftcheck" <?php if($row3["cnt"]>0){ echo "checked"; } ?>>
<label for="trp1">&nbsp;</label>
</div></td>
  <td><?php echo $row["fee_type"]; ?></td>
<td><input type="number" min="0" id="feestype<?php echo $row["fee_type_id"]; ?>" name="<?php echo $row["fee_type_id"]; ?>" class="form-control" placeholder="Global Fees" onBlur="call('feestype<?php echo $row["fee_type_id"]; ?>')"></td>  
<?php
$sql1="select * from categories";
$res1=$db->query($sql1);
while($row1=$db->fetch_array($res1))
{
  $sql2="select * from course_fees where course_id='$course_id' and year='$year' and fee_type_id='".$row["fee_type_id"]."' and category_id='".$row1["category_id"]."' and rte='$rte'";
  $res2=$db->query($sql2);
  $row2=$db->fetch_array($res2);
?>
<td><input type="number" min="0" id="<?php echo $row1["category_id"]; ?>" name="fees<?php echo $row["fee_type_id"]; ?><?php echo $row1["category_id"]; ?>" class="form-control feestype<?php echo $row["fee_type_id"]; ?> cfees<?php echo $row1["category_id"]; ?>" placeholder="Fees" value="<?php echo $row2["fee"]; ?>"  style="text-align:right;" onBlur="calctot(<?php echo $row1["category_id"]; ?>)"></td>
<?php
}
?>

</tr>
<?php
}
?>
</tbody>
<tfoot>
<tr>
<th colspan="3"><div style="text-align:right;"><b>Total Fees</div></th>
<?php
$sql1="select * from categories";
$res1=$db->query($sql1);
while($row1=$db->fetch_array($res1))
{
  $sql2="select sum(fee) as tfee from course_fees where course_id='$course_id' and year='$year' and category_id='".$row1["category_id"]."' and rte='$rte'";
  $res2=$db->query($sql2);
  $row2=$db->fetch_array($res2);
?>
<td><input type="number" min="0" id="tfees<?php echo $row1["category_id"]; ?>" class="form-control" style="text-align:right;" value="<?php echo $row2["tfee"]; ?>" readonly/></td>
<?php
}
?>
</tr>
</tfoot>
<?php
$db->close();
?>

</table>
</div>
</div>
<hr />
<div class="form-actions row"> <div class="col-sm-3 offset-sm-9 text-right">

  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>

   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>

  </div>

</form>
