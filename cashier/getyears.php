<?php
include("dbconnect.php");
error_reporting(0);
$db->connect();
$course_id=$_REQUEST["course_id"];
$sql="select * from courses where course_id='$course_id'";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$cid=$row["course_id"];

?>
 <select id="year" name="year" class="form-control" required onChange="selyear()">
	 <option value="">Select Grade</option>
	 <?php
	$sql="select * from grades where course_id='$course_id'";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
	 {
	 ?>
	  <option><?php echo $row["grade_name"]; ?></option>

	 <?php
	 }
	  $db->close();
	 ?>
	 
	 </select>
