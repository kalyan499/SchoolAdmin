<?php
error_reporting(0);
include("dbconnect.php");
$db->connect();
?>

<div class="col-md-12">
 <div class="form-group">
<label class="control-label" for="stuTransNumber">Route Number/Name</label>
   <select id="bus_route_id" name="bus_route_id" class="col-xs-10 col-sm-12 form-control" required onChange="getrfees()">

	   <option value="">Select Bus Route</option>
<?php
$sqlr="select * from bus_routes";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["bus_route_id"]; ?>"><?php echo $rowr["route_name"]; ?></option>
<?php
}
?>
</select>
</div>
</div>
 <div class="col-md-12">
 <div class="form-group">
<label class="control-label" for="trsFees">Route Fees  </label>
 <input type="text" id="transport_fees" name="transport_fees" required="required" class="col-xs-10 col-sm-12 form-control" placeholder="Route Fees">
 </div>
</div>                                   