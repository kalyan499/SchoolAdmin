<?php
include("dbconnect.php");
error_reporting(0);
$db->connect();
$district_id=$_REQUEST["district_id"];
?>
  <option value="">Select Taluk</option>
<option value="0">Not In List</option>
<?php
$sqlr="select * from taluks where district_id='$district_id'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["taluk_id"]; ?>"><?php echo $rowr["taluk_name"]; ?></option>
<?php
}
$db->close();
?>
