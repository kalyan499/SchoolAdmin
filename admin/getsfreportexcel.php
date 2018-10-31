<?php
include("../session_validate.php");
error_reporting(0);
$file_name="Student Fees Report".date("_Ymd").".xls";
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

$sql="select * from students s,courses c,religions t2,castes t3,categories t4 where s.course_id=c.course_id and s.religion_id=t2.religion_id and s.caste_id=t3.caste_id and s.category_id=t4.category_id and academic_year='$academic_year'".$sql1;
?>
    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" border="1">
                                                <thead>
                                                    <tr>

                                                        <th rowspan="2">Roll No</th>
														 <th rowspan="2">Admission Date</th>
                                                        <th rowspan="2">Name</th>
                                                       <th rowspan="2">Father Name</th>
                                                      
                                                        <th rowspan="2">Grade Section</th>
                                                        <th rowspan="2">Grade</th>
														
                                                    
<th rowspan="2" scope="col">Category</th>

<th rowspan="2" scope="col">Parent Mobile</th>
<th rowspan="2" scope="col">Parent Email</th>
<?php
 $sql2="select distinct t1.fee_type_id,fee_type from course_fees t1,courses t2,fee_types t3 where t1.course_id=t2.course_id and t1.fee_type_id=t3.fee_type_id and t1.course_id='$course_id' and t1.year='$year'";
  $res2=$db->query($sql2);
  while($row2=$db->fetch_array($res2))
  {
?>
                                                    <th colspan="3" scope="col"><?php echo $row2["fee_type"]; ?> </th>
													<?php
													}?>
													<th colspan="3" scope="col">Hostel Fees</th>
													  <th colspan="3" scope="col">Transport Fees</th>
													 <th colspan="3" scope="col">Total</th>
                                                    </tr>
                                                    <tr>
													<?php
 $sql2="select  distinct t1.fee_type_id,fee_type from course_fees t1,courses t2,fee_types t3 where t1.course_id=t2.course_id and t1.fee_type_id=t3.fee_type_id and t1.course_id='$course_id' and t1.year='$year'";
  $res2=$db->query($sql2);
  while($row2=$db->fetch_array($res2))
  {
?>
                                                      <th scope="col">Fees</th>
                                                      <th scope="col">Paid</th>
                                                      <th scope="col">Balance</th>
													  <?php
													  }
													  ?>
													    <th scope="col">Fees</th>
                                                      <th scope="col">Paid</th>
                                                      <th scope="col">Balance</th>
                                                       <th scope="col">Fees</th>
                                                      <th scope="col">Paid</th>
                                                      <th scope="col">Balance</th>
													  <th scope="col">Total Fees</th>
                                                      <th scope="col">Total Paid</th>
                                                      <th scope="col">Total Balance</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
												<?php
												$sn=1;

												$res=$db->query($sql);
                                                while($row=$db->fetch_array($res))
                                                {
                                                
												$student_id=$row["student_id"];
                                                				?>
                                                    <tr>
                                                        <td><?php echo $row["roll_number"]; ?></td>
														<td><?php echo formatADate($row["registration_date"]); ?></td>
                                                        <td>
                                                            <?php echo $row["first_name"]." ".$row["last_name"]; ?>
                                                        </td>
                                                      
                                                        <td><?php echo $row["father_name"]; ?></td>
                                            
                                                       
                                                        <td><?php echo $row["course_name"]; ?></td>
                                                        <td><?php echo $row["current_year"]; ?></td>
														  
                                                       

<td><?php echo $row["category_name"]; ?></td>

<td><?php echo $row["parent_mobile"]; ?></td>
<td><?php echo $row["parent_email"]; ?></td>
<?php
$tot_fees=$tot_paid=$tot_paying=$tot_balance=0;
 $sql2="select distinct t1.fee_type_id,fee_type from course_fees t1,courses t2,fee_types t3 where t1.course_id=t2.course_id and t1.fee_type_id=t3.fee_type_id and t1.course_id='$course_id' and t1.year='$year'";
  $res2=$db->query($sql2);
  while($row2=$db->fetch_array($res2))
  {
     											
$sqlr="select * from student_fees sf,fee_types ft where sf.fee_type_id=ft.fee_type_id and sf.year='$year' and student_id='$student_id' and course_id='$course_id' and sf.fee_type_id='".$row2["fee_type_id"]."'";
$resr=$db->query($sqlr);
if($rowr=$db->fetch_array($resr))
{
  $fees=$rowr["fees"];
$paid_till_date=0;
    $sqlp="select sum(fees_paid) as amt from student_payment_fees spf,student_payments sp where spf.student_payment_id=sp.student_payment_id and fee_type_id='".$rowr["fee_type_id"]."' and year='$year' and student_id='$student_id' and course_id='$course_id'";
$resp=$db->query($sqlp);
 if($rowp=$db->fetch_array($resp))
 {
   if($rowp["amt"]!="")
 $paid_till_date=$rowp["amt"];
 }
  $balance=$fees-$paid_till_date;
  $tot_fees+=$fees;
 $tot_paid+=$paid_till_date;
 
 ?>
 <td><div align="right"><?php echo $fees; ?></div></td>
                                                  <td><div align="right"><?php echo $paid_till_date; ?></div></td>
                                                  <td><div align="right"><?php echo $balance; ?></div></td>
 <?php 
 }
 else
 {
 ?>
 <td><div align="center">-</div></td>
                                                  <td><div align="center">-</div></td>
                                                  <td><div align="center">-</div></td>
 <?php
 }

}
$sqlh="select * from student_hostels where year='$year' and student_id='$student_id' and course_id='$course_id'";
$resh=$db->query($sqlh);
if($rowh=$db->fetch_array($resh))
{
  $hfees=$rowh["hostel_fees"];
  $paid_till_date=0;
  $sqlp="select sum(fees_paid) as amt from student_payments sp,student_payment_hostel_fees phf where sp.student_payment_id=phf.student_payment_id and year='$year' and student_id='$student_id' and course_id='$course_id'";
  $resp=$db->query($sqlp);
 if($rowp=$db->fetch_array($resp))
 {
   if($rowp["amt"]!="")
 $paid_till_date=$rowp["amt"];
 }
 $balance=$hfees-$paid_till_date;
  $tot_fees+=$hfees;
 $tot_paid+=$paid_till_date;
?>
<td><div align="right"><?php echo $hfees; ?></div></td>
<td><div align="right"><?php echo $paid_till_date; ?></div></td>
<td><div align="right"><?php echo $balance; ?></div></td>	
<?php
}
else
{
?>
<td><div align="center">-</div></td>
<td><div align="center">-</div></td>
<td><div align="center">-</div></td>	
<?php
}

$sqlt="select * from student_bus_routes where year='$year' and student_id='$student_id' and course_id='$course_id'";
$rest=$db->query($sqlt);
if($rowt=$db->fetch_array($rest))
{
  $tfees=$rowt["hostel_fees"];
  $paid_till_date=0;
  $sqlp="select sum(fees_paid) as amt from student_payments sp,student_payment_transport_fees phf where sp.student_payment_id=phf.student_payment_id and year='$year' and student_id='$student_id' and course_id='$course_id'";
  $resp=$db->query($sqlp);
 if($rowp=$db->fetch_array($resp))
 {
   if($rowp["amt"]!="")
 $paid_till_date=$rowp["amt"];
 }
 $balance=$hfees-$paid_till_date;
  $tot_fees+=$tfees;
 $tot_paid+=$paid_till_date;
?>
<td><div align="right"><?php echo $tfees; ?></div></td>
<td><div align="right"><?php echo $paid_till_date; ?></div></td>
<td><div align="right"><?php echo $balance; ?></div></td>	
<?php
}
else
{
?>
<td><div align="center">-</div></td>
<td><div align="center">-</div></td>
<td><div align="center">-</div></td>	
<?php
}
?>
												 <td><div align="right"><?php echo $tot_fees; ?></div></td>
                                                  <td><div align="right"><?php echo $tot_paid; ?></div></td>
                                                  <td><div align="right"><?php echo $tot_fees-$tot_paid; ?></div></td>
                                                  </tr>
                                                     <?php
													 }
													 $db->close();
													 ?>
                                                    

                                                </tbody>
                                            </table>
<?php
header("location:student_fees_report.php");
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
