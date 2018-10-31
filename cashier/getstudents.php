<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$course_id=$_REQUEST["course_id"];

$year=$_REQUEST["year"];
?>
	   <select id="student_id" name="student_id" class="form-control" required onChange="selstudent()">

	   <option value="">Select Student:</option>
<?php
$sqlr="select * from students where course_id='$course_id' and current_year='$year' and academic_year='".$_SESSION["academic_year"]."'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["student_id"]; ?>"><?php echo $rowr["roll_number"]." - ".$rowr["first_name"]." ".$rowr["last_name"]; ?></option>
<?php
}
?>
</select>
