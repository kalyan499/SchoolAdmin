<?php
error_reporting(0);
include("dbconnect.php");
$db->connect();
?>
<div class="col-md-12">
<div class="form-group">
<label class="control-label" for="stuHostelOpt">Hostel Details</label>
<select class="form-control" id="hostel_id" onChange="gethfees()">

 <option value="">Select Hostel</option>
 <?php
$sql="select * from hostel_details";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
  <option value="<?php echo $row["hostel_id"]; ?>"><?php echo $row["hostel_name"]; ?></option>
<?php
}
?>
</select>
  </div>
</div>
<div class="col-md-12">
<div class="form-group">
<label class="control-label" for="stuHostelOpt">Hostel Details</label>
<select class="form-control" id="hostel_option" onChange="gethfees()">
 <option value="">Select Hostel Option</option>
  <option value="hfees">Accommodation Only</option>
  <option value="mfees">Accommodation with Food</option>
</select>
  </div>
</div>
<div class="col-md-12">
   <div class="form-group">
     <label class="control-label" for="hostelFees">Hostel Fees  </label>
        <input type="text" id="hostel_fees" name="hostel_fees"  value="0" class="form-control" placeholder="Hostel Fees">
</div>
</div>