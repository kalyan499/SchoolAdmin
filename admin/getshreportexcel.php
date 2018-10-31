<?php
include("../session_validate.php");
error_reporting(0);
$file_name="Student Hostel Report".date("_Ymd").".xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=".$file_name);
header("Pragma: no-cache");
header("Expires: 0");
include("dbconnect.php");
$db->connect();
$course_id=$_REQUEST["course_id"];
$year=$_REQUEST["year"];
$sqlc=" and s.course_id='$course_id'";
$sqly=" and current_year='$year'";
if($course_id=="all")
$sqlc="";
if($year=="all")
$sqly="";
$sql1=$sqlc.$sqly;
$academic_year=$_REQUEST["academic_year"];

$sql="select * from students s,courses c,religions t2,castes t3,categories t4,countries t5,states t6 where s.course_id=c.course_id and s.religion_id=t2.religion_id and s.caste_id=t3.caste_id and s.category_id=t4.category_id and s.state_id =t6.state_id and s.country_id=t5.country_id and academic_year='$academic_year' and hostel_opted='Yes'".$sql1;
?>
 <div class="row export-section">

                                                    
                                                    <div class="col-md-12 text-right">
                                                        <a href="#" class="btn btn-sm btn-default text-success" onClick ="$('#sreport').tableExport({type:'excel',escape:'false'});"><i class="fa fa-file-excel-o"></i></a>
                                                        <a href="#" class="btn btn-sm btn-default text-danger" onClick ="$('#sreport').tableExport({type:'pdf',escape:'false'});"><i class="fa fa-file-pdf-o"></i></a>
                                                      <button class="btn btn-sm btn-default" onClick="divp('sreport')"><i class="fa fa-print"></i></button>
                                                    </div>
                                                </div>
												
					<div class="table-responsive">							
    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" border="1">
                                                <thead>
                                                    <tr>

                                                        <th>Roll No</th>
														 <th>Admission Date</th>
                                                        <th>Name</th>
                                                        <th>Gender</th>
                                                         <th>Date of birth</th>
                                                        <th>Father Name</th>
                                                        <th>Father Occupation</th>
                                                         <th>Mother Name</th>
                                                        <th>Mother Occupation</th>
                                                        <th>Grade Section</th>
                                                        <th>Grade</th>
														
                                                        <th>Address</th>
                                                       
                                                        <th>Mobile No</th>
                                                        <th>E-mail id</th>
                                                        <th>State</th>
                                                        <th>Country</th>
                                                        <th scope="col">Aadhar Number</th>
                                                    <th scope="col">Religion</th>
<th scope="col">Caste</th>
<th scope="col">Category</th>
<th scope="col">Parent Address</th>
<th scope="col">Parent Mobile</th>
<th scope="col">Parent Email</th>
<th>Parent State</th>
                                                        <th>Parent Country</th>
  <th scope="col">Emergency Contact Number</th>
<th>Agent</th>  
<th>Hostel</th>  
<th>Hostel Option</th>  
<th>Hostel Fees</th>  
<th>Paid Till Now</th>  
<th>Balance</th>  
                                                    </tr>
                                                </thead>

                                                <tbody>
												<?php
												$sn=1;

												$res=$db->query($sql);
                                                while($row=$db->fetch_array($res))
                                                {
                                                $student_id=$row["student_id"];
                                                $course_id=$row["course_id"];
                                                $year=$row["current_year"];                                                                                                
                                                $agent_name="NA";
                                                if($row["agent_id"]!=0 && $row["agent_id"]!=NULL)
                                                 {
                                                     $sqla="select * from agents where agent_id='".$row["agent_id"]."'";
                                                     $resa=$db->query($sqla);
                                                     $rowa=$db->fetch_array($resa);
                                                     $agent_name=$rowa["agent_name"];
                                                 }
                                                 
                                                 $sqls="select * from states where state_id='".$row["parent_state_id"]."'";
                                                 $ress=$db->query($sqls);
                                                     $rows=$db->fetch_array($ress);
                                                 $parent_state_name=$rows["state_name"];
							 $sqls="select * from countries where country_id='".$row["parent_country_id"]."'";
                                                 $ress=$db->query($sqls);
                                                     $rows=$db->fetch_array($ress);
                                                 $parent_country_name=$rows["country_name"];					?>
                                                    <tr>
                                                        <td><?php echo $row["roll_number"]; ?></td>
														<td><?php echo formatADate($row["registration_date"]); ?></td>
                                                        <td>
                                                            <a href="student_details.php?sid=<?php echo $row["student_id"]; ?>"><?php echo $row["first_name"]." ".$row["last_name"]; ?></a>
                                                        </td>
                                                        <td><?php echo $row["gender"]; ?></td>
                                                         <td><?php echo $row["date_of_birth"]; ?></td>
                                                        <td><?php echo $row["father_name"]; ?></td>
                                                         <td><?php echo $row["father_occupation"]; ?></td>
                                                         <td><?php echo $row["mother_name"]; ?></td>
                                                         <td><?php echo $row["mother_occupation"]; ?></td>
                                                        <td><?php echo $row["course_name"]; ?></td>
                                                        <td><?php echo $row["current_year"]; ?></td>
														  
                                                        <td><?php echo $row["address"]; ?></td>
                                                       
                                                        <td><?php echo $row["mobile"]; ?></td>
                                                        <td><?php echo $row["email"]; ?></td>
                                                         <td><?php echo $row["country_name"]; ?></td>
                                                        <td><?php echo $row["state_name"]; ?></td>
                                                   <td><?php echo $row["aadhar_number"]; ?></td>
<td><?php echo $row["religion_name"]; ?></td>
<td><?php echo $row["caste_name"]; ?></td>
<td><?php echo $row["category_name"]; ?></td>
<td><?php echo $row["permenant_address"]; ?></td>
<td><?php echo $row["parent_mobile"]; ?></td>
<td><?php echo $row["parent_email"]; ?></td>
<td><?php echo $parent_state_name; ?></td>
 <td><?php echo $parent_country_name; ?></td>
                                                        
     <td><?php echo $row["emergency_contact_number"]; ?></td>
          <td><?php echo $agent_name; ?></td>
          

<?php
$sqlh="select * from student_hostels sh,hostel_details hd where sh.hostel_id=hd.hostel_id and student_id='$student_id' and course_id='$course_id' and year='$year'";
  $resh=$db->query($sqlh);
  $rowh=$db->fetch_array($resh);
  $paid_till_date=0;
 $sqlhf="select sum(fees_paid) as amt from student_payment_hostel_fees shf,student_payments sp where sp.student_payment_id=shf.student_payment_id and student_id='$student_id' and course_id='$course_id' and year='$year'";
  $reshf=$db->query($sqlhf);
  if($rowhf=$db->fetch_array($reshf))
  {
    $paid_till_date=$rowhf["amt"];
  }
    $balance=$rowh["hostel_fees"]-$paid_till_date;
?>
<td><?php echo $rowh["hostel_name"]; ?></td>
<td><?php echo $rowh["opted_for"]; ?></td>   
<td><?php echo $rowh["hostel_fees"]; ?></td>      
<td><?php echo $paid_till_date; ?></td>  
<td><?php echo $balance; ?></td>  
    
          
          
              </tr>
                                                     <?php
													 }
													 $db->close();
													 ?>
                                                    

                                                </tbody>
                                            </table>
						</div>					
											
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
