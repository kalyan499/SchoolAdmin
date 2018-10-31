<?php
include("dbconnect.php");
error_reporting(0);
$db->connect();
$taluk_id=$_REQUEST["taluk_id"];
?>
  <option value="">Select City/Village/Town</option>
<option value="0">Not In List</option>
<?php
$sqlr="select * from cities where taluk_id='$taluk_id'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["city_id"]; ?>"><?php echo $rowr["city_name"]; ?></option>
<?php
}
$db->close();
?>
