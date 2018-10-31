<?php
include("dbconnect.php"); 
$attendance_date=$_REQUEST["adate"];
$up=false;
$db->connect(); 
 $sql1="select count(*) as cnt from employee_attendances where attendance_date='$attendance_date'";
    $res1=$db->query($sql1);
$row1=$db->fetch_array($res1);
if($row1["cnt"]>0)
   $up=true;
if($up)
{
?>                                 
                                 <form method="post" action="update_employee_attendance.php">
<?php
}
else
{   
?>                                 
                                 <form method="post" action="save_employee_attendance.php">
<?php
}
?>                                 
                                 <input type="hidden" name="attendance_date" value="<?php echo $attendance_date; ?>"/>
                                    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                       <thead>
                                          <tr>
                                             <th>Employee Name</th>
                                             <th>Department</th>
                                             <th>Designation</th>
                                              
                                             <th class="text-center">Status</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php

$sql="select * from employees e,designations d,departments
q where e.designation_id=d.designation_id and e.department_id=q.department_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
    $sql1="select * from employee_attendances where employee_id='".$row["employee_id"]."' and attendance_date='$attendance_date'";
    $res1=$db->query($sql1);
$row1=$db->fetch_array($res1);
$attendance_status=$row1["attendance_status"];
?>
                                          <tr>
                                             <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
                                             <td><?php echo $row["department_name"]; ?></td>
                                             <td><?php echo $row["designation"]; ?></td>
                                             <td class="text-center">
                                                
                                       <div class="i-checks in-block">
                                          <input id="<?php echo $row["employee_id"]; ?>" <?php if($attendance_status=="Present" || $up==false){ ?> checked <?php } ?> type="radio" value="Present" name="<?php echo $row["employee_id"]; ?>" class="radio-template">
                                          <label for="rad1">Present</label>
                                       </div>
									   <div class="i-checks in-block">
                                          <input id="<?php echo $row["employee_id"]; ?>" <?php if($attendance_status=="Late"){ ?> checked <?php } ?>  type="radio" value="Late" name="<?php echo $row["employee_id"]; ?>" class="radio-template">
                                          <label for="rad2">Late</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="<?php echo $row["employee_id"]; ?>" <?php if($attendance_status=="Absent"){ ?> checked <?php } ?>  type="radio"  value="Absent" name="<?php echo $row["employee_id"]; ?>" class="radio-template">
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