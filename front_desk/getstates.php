<?php
include("dbconnect.php");
error_reporting(0);
$db->connect();
$country_id=$_REQUEST["country_id"];
?>
<option value="">Select State</option>
<option value="0">Not In List</option>
<?php
$sqlr="select * from states where country_id='$country_id'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["state_id"]; ?>"><?php echo $rowr["state_name"]; ?></option>
<?php
}
$db->close();
?>
