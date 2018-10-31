<?php
include("dbconnect.php");
error_reporting(0);
$db->connect();
$religion_id=$_REQUEST["religion_id"];
$category_id=$_REQUEST["category_id"];
$obc_sub_caste_id=$_REQUEST["obc_sub_caste_id"];
?>
<option value="">Select Caste</option>
<?php
$sqlr="select * from castes where religion_id='$religion_id' and category_id='$category_id' and obc_sub_caste_id='$obc_sub_caste_id'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["caste_id"]; ?>"><?php echo $rowr["caste_name"]; ?></option>
<?php
}
$db->close();
?>
