<?php
include("../session_validate.php");
include("dbconnect.php");
error_reporting(0);
$db->connect();

$course_id=$_REQUEST["course_id"];


?>
<h2>Select To Add</h2>
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col"><div class="i-checks">
<input id="selAll" type="checkbox" value="" class="checkbox-template" onClick="sall(this)">
<label for="selAll">&nbsp;</label>
</div></th>
<th scope="col">Fee Type</th>

</tr>
</thead>
<tbody>
<?php
$sn=1;
$sql="select * from fee_types where fee_type_id not in(select fee_type_id from course_fee_types where course_id='$course_id')";
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

</tr>
<?php
}
?>
</tbody>
</table>
<h2>Select To Remove</h2>
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col"><div class="i-checks">
<input id="selAll1" type="checkbox" value="" class="checkbox-template" onClick="sall1(this)">
<label for="selAll1">&nbsp;</label>
</div></th>
<th scope="col">Fee Type</th>

</tr>
</thead>
<tbody>
<?php
$sn=1;
$sql="select * from fee_types where fee_type_id in(select fee_type_id from course_fee_types where course_id='$course_id')";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><div class="i-checks">
	<input id="ftid1[]" name="ftid1[]" type="checkbox" value="<?php echo $row["fee_type_id"]; ?>" class="checkbox-template ftcheck1">
<label for="trp1">&nbsp;</label>
</div></td>
<td><?php echo $row["fee_type"]; ?></td>

</tr>
<?php
}
?>
</tbody>
</table>