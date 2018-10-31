<?php 
error_reporting(0);
include("dbconnect.php");
$db->connect();
$course_id=$_REQUEST["course_id"];
$category_id=$_REQUEST["category_id"];
$year=$_REQUEST["year"];
$rte=$_REQUEST["rte"];
$atot=0;
$sql="select * from course_fees t1,courses t2,fee_types t3 where t1.course_id=t2.course_id and t1.fee_type_id=t3.fee_type_id and t1.category_id='$category_id' and year='$year' and t1.course_id='$course_id' and t1.rte='$rte'";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
   $atot+=$row["fee"];
?>
<div class="col-md-12">
<div class="form-group row">
   <label class="col-md-2 control-label" for="rafee"><?php echo $row["fee_type"]; ?></label>                     
  <input type="number" min="0" required="required" id="<?php echo $row["fee_type_id"]; ?>" name="<?php echo $row["fee_type_id"]; ?>" class="col-md-3 form-control afees" placeholder="<?php echo $row["fee_type"]; ?>" value="<?php echo $row["fee"]; ?>" onBlur="calcatot()"/>
</div>
</div>
<?php
}
?>
<div class="col-md-12">
<div class="form-group row">
   <label class="col-md-2 control-label" for="rafee">Total Fees</label>                     
  <input type="number" min="0" required="required" id="afeestot" name="afeestot" class="col-md-3 form-control"  value="<?php echo $atot; ?>" />
</div>
</div>
</div>
<?php
$db->close();
?>