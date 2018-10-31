<?php
include("dbconnect.php");
error_reporting(0);
$db->connect();
$course_id=$_REQUEST["course_id"];
$sql="select * from courses where course_id='$course_id'";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$years=$row["course_duration"];
 $db->close();
?>
 <select id="year" name="year" class="form-control" required onChange="selyear()">
	 <option value="">Select Year</option>
	 <?php
	 $year=1;
	 while($year<=$years)
	 {
	 ?>
	 <option><?php echo $year++; ?></option>
	 <?php
	 }
	 ?>
	 </select>
