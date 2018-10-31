<?php 
error_reporting(0);
include("dbconnect.php");
$db->connect();
$course_id=$_REQUEST["course_id"];
$category_id=$_REQUEST["category_id"];
$year=$_REQUEST["year"];
$sql="select * from course_fees t1,courses t2,fee_types t3 where t1.course_id=t2.course_id and t1.fee_type_id=t3.fee_type_id and t1.category_id='$category_id' and year='$year' and t1.course_id='$course_id'";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<div class="form-group">
   <label class="control-label" for="rafee"><?php echo $row["fee_type"]; ?></label>                     
  <input type="text" required="required" id="<?php echo $row["fee_type_id"]; ?>" name="<?php echo $row["fee_type_id"]; ?>" class="form-control" placeholder="<?php echo $row["fee_type"]; ?>" value="<?php echo $row["fee"]; ?>" />
</div>
<?php
}
$db->close();
?>