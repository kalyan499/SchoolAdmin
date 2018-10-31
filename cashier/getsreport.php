<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$course_id=$_REQUEST["course_id"];
$section_id=$_REQUEST["section_id"];
$year=$_REQUEST["year"];
$academic_year=$_REQUEST["academic_year"];
$sdate=$_REQUEST["sdate"];
$edate=$_REQUEST["edate"];
$sdate=formatADate1($sdate);
$edate=formatADate1($edate);
$sql="select * from students s,courses c where s.course_id=c.course_id and s.course_id='$course_id' and current_year='$year' and section_id='$section_id' and academic_year='$academic_year' and (registration_date>='$sdate' and registration_date<='$edate')";
?>
 <div class="row export-section">
                                                    
                                                    <div class="col-md-2 text-right">
                                                        <a href="#" class="btn btn-sm btn-default text-success"><i class="fa fa-file-excel-o"></i></a>
                                                        <a href="#" class="btn btn-sm btn-default text-danger"><i class="fa fa-file-pdf-o"></i></a>
                                                      <button class="btn btn-sm btn-default" onClick="divp('sreport')"><i class="fa fa-print"></i></button>
                                                    </div>
                                                </div>
    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" border="1">
                                                <thead>
                                                    <tr>

                                                        <th>Roll No</th>
														 <th>Admission Date</th>
                                                        <th>Name</th>
                                                        <th>Gender</th>
                                                        <th>Parents Name</th>
                                                        <th>Grade</th>
                                                        <th>Year</th>
														
                                                        <th>Address</th>
                                                        <th>Date of birth</th>
                                                        <th>Mobile No</th>
                                                        <th>E-mail id</th>
                                                    
                                                    </tr>
                                                </thead>

                                                <tbody>
												<?php
												$sn=1;

												$res=$db->query($sql);
                                                while($row=$db->fetch_array($res))
                                                {
												?>
                                                    <tr>
                                                        <td><?php echo $row["roll_number"]; ?></td>
														<td><?php echo formatADate($row["registration_date"]); ?></td>
                                                        <td>
                                                            <a href="student_details.php?sid=<?php echo $row["student_id"]; ?>"><?php echo $row["first_name"]." ".$row["last_name"]; ?></a>
                                                        </td>
                                                        <td><?php echo $row["gender"]; ?></td>
                                                        <td><?php echo $row["father_name"]; ?></td>
                                                        <td><?php echo $row["course_name"]; ?></td>
                                                        <td><?php echo $row["current_year"]; ?></td>
														
                                                        <td><?php echo $row["address"]; ?></td>
                                                        <td><?php echo $row["date_of_birth"]; ?></td>
                                                        <td><?php echo $row["mobile"]; ?></td>
                                                        <td><?php echo $row["email"]; ?></td>
                                                   
                                                    </tr>
                                                     <?php
													 }
													 $db->close();
													 ?>
                                                    

                                                </tbody>
                                            </table>
<?php
function formatADate($adate)
{
    $adates=explode(" ",$adate);
	$adate=$adates[0];
	$ad=explode("-",$adate);
	return $ad[2]."-".$ad[1]."-".$ad[0];
}
function formatADate1($adate)
{
    $ad=explode("/",$adate);
	
	return $ad[2]."-".$ad[0]."-".$ad[1];
}
?>											
