<?php
include("../session_validate.php");
include("dbconnect.php"); 
$attendance_date=$_REQUEST["adate"];
$course_id=$_REQUEST["course_id"];
$year=$_REQUEST["year"];
$up=false;
$db->connect(); 
 $sql1="select count(*) as cnt from student_attendances where attendance_date='$attendance_date' and course_id='$course_id' and year='$year'";
    $res1=$db->query($sql1);
$row1=$db->fetch_array($res1);
if($row1["cnt"]>0)
   $up=true;
if($up)
{
?>                                 
                                 <form method="post" action="update_student_attendance.php">
<?php
}
else
{   
?>                                 
                                 <form method="post" action="save_student_attendance.php">
<?php
}
?>                                 
                                 <input type="hidden" name="course_id" value="<?php echo $course_id; ?>"/>
                                 <input type="hidden" name="year" value="<?php echo $year; ?>"/>
                                 <input type="hidden" name="attendance_date" value="<?php echo $attendance_date; ?>"/>
                                    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                       <thead>
                                          <tr>
                                          <th>S.No</th>
                                          <th>Roll Number</th>
                                             <th>Student Name</th>
                                             
                                             
                                              
                                             <th class="text-center">Status</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php
$sn=1;
$sql="select * from students where course_id='$course_id' and current_year='$year' and academic_year='".$_SESSION["academic_year"]."' order by roll_number asc";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
    $sql1="select * from student_attendances where student_id='".$row["student_id"]."' and attendance_date='$attendance_date' and course_id='$course_id' and year='$year'";
    $res1=$db->query($sql1);
$row1=$db->fetch_array($res1);
$attendance_status=$row1["attendance_status"];
?>
                                          <tr>
                                          <td><?php echo $sn++; ?></td>
                                          <td><?php echo $row["roll_number"]; ?></td>
                                             <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
                                             
                                            
                                             <td class="text-center">
                                                
                                       <div class="i-checks in-block">
                                          <input id="<?php echo $row["student_id"]; ?>" <?php if($attendance_status=="Present" || $up==false){ ?> checked <?php } ?> type="radio" value="Present" name="<?php echo $row["student_id"]; ?>" class="radio-template">
                                          <label for="rad1">Present</label>
                                       </div>
									   
                                       <div class="i-checks in-block">
                                          <input id="<?php echo $row["student_id"]; ?>" <?php if($attendance_status=="Absent"){ ?> checked <?php } ?>  type="radio"  value="Absent" name="<?php echo $row["student_id"]; ?>" class="radio-template">
                                          <label for="rad3">Absent</label>
                                       </div>
                                     
                                             </td>
                                             
                                          </tr>
                                         <?php
                                         }
                                         ?>
                                       </tbody>
                                    </table>
                                    <br>
						<div class="col-md-12 text-center">
							<button class="btn btn-primary" type="submit">Update</button>
						</div>
					 
                                    </form>