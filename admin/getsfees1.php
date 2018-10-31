<?php
include("../session_validate.php");
error_reporting(0);
include("dbconnect.php");
$db->connect();
$student_id=$_REQUEST["student_id"];
$course_id=$_REQUEST["course_id"];
$year=$_REQUEST["year"];

?>
        <form class="form-horizontal student-entry" role="form" action="#" method="post">
		<input name="student_id" type="hidden" value="<?php echo $student_id; ?>">
		<input name="course_id" type="hidden" value="<?php echo $course_id; ?>">
		<input name="year" type="hidden" value="<?php echo $year; ?>">
<div class="row">
									<div class="col-md-12">
<table class="table ">
											
											<tr>
												<th>Fees Type</th>
												<th>Fees</th>
												<th>Paid till date</th>
												
												<th>Balance</th>
											</tr>
											<?php
											$tot_fees=$tot_paid=$tot_paying=$tot_balance=0;
 $sqlr="select * from student_fees sf,fee_types ft where sf.fee_type_id=ft.fee_type_id and sf.year='$year' and student_id='$student_id' and course_id='$course_id'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
  $fees=$rowr["fees"];
$paid_till_date=0;
   $sqlp="select sum(fees_paid) as amt from student_payment_fees spf,student_payments sp where spf.student_payment_id=sp.student_payment_id and fee_type_id='".$rowr["fee_type_id"]."' and year='$year' and student_id='$student_id' and course_id='$course_id'";
$resp=$db->query($sqlp);
 if($rowp=$db->fetch_array($resp))
 $paid_till_date=$rowp["amt"];
  $balance=$fees-$paid_till_date;
  $tot_fees+=$fees;
 $tot_paid+=$paid_till_date;
$tot_balance+=$balance;
?>
											<tr>
											<td><?php echo $rowr["fee_type"]; ?></td>
											<td><div id="fees<?php echo $rowr["fee_type_id"]; ?>"><?php echo $rowr["fees"]; ?></div></td>
											<td><div id="feespaid<?php echo $rowr["fee_type_id"]; ?>"><?php if($paid_till_date==""){echo "0"; } else{echo $paid_till_date;}?></div></td>
											
											<td><div id="bal<?php echo $rowr["fee_type_id"]; ?>" class="bal"><?php echo $balance; ?></div></td>
											</tr>
											
											<?php
											}
   											
			$sql2="select * from student_hostels where year='$year' and student_id='$student_id' and course_id='$course_id'";
			$res2=$db->query($sql2);
			if($row2=$db->fetch_array($res2))
			{
			   $hfees=$row2["hostel_fees"];
			       $sqlhp="select sum(fees_paid) as amt from student_payment_hostel_fees spf,student_payments sp where spf.student_payment_id=sp.student_payment_id and year='$year' and student_id='$student_id' and course_id='$course_id'";
$reshp=$db->query($sqlhp);
 if($rowhp=$db->fetch_array($reshp))
 $hpaid_till_date=$rowhp["amt"];
  $hbalance=$hfees-$hpaid_till_date;
   $tot_fees+=$hfees;
 $tot_paid+=$hpaid_till_date;
			?>
			<tr>
											<td>Hostel Fees</td>
											<td><div id="feesh"><?php echo $row2["hostel_fees"]; ?></div></td>
											<td><div id="feespaidh"><?php echo $hpaid_till_date; ?></div></td>
											
											<td><div id="balh" class="bal"><?php echo $hbalance; ?></div></td>
											</tr>
			<?php
			}
			$sql2="select * from student_bus_routes where year='$year' and student_id='$student_id' and course_id='$course_id'";
			$res2=$db->query($sql2);
			if($row2=$db->fetch_array($res2))
			{
			   $tfees=$row2["transport_fees"];
			       $sqltp="select sum(fees_paid) as amt from student_payment_transport_fees spf,student_payments sp where spf.student_payment_id=sp.student_payment_id and year='$year' and student_id='$student_id' and course_id='$course_id'";
$restp=$db->query($sqltp);
 if($rowtp=$db->fetch_array($restp))
 $tpaid_till_date=$rowtp["amt"];
  $tbalance=$tfees-$tpaid_till_date;
   $tot_fees+=$tfees;
 $tot_paid+=$tpaid_till_date;
			?>
			<tr>
											<td>Transport Fees</td>
											<td><div id="feest"><?php echo $row2["transport_fees"]; ?></div></td>
											<td><div id="feespaidt"><?php echo $tpaid_till_date; ?></div></td>
											
											<td><div id="balt" class="bal"><?php echo $tbalance; ?></div></td>
											</tr>
			<?php
			}
											$db->close();
											?>
											<tr>
												<th>Total</th>
												<th><div id="totfees"><?php echo $tot_fees; ?></div></th>
												<th><div id="totpt"><?php echo $tot_paid; ?></div></th>
					
												<th><div id="totb"><?php echo $tot_fees-$tot_paid-$tot_paying; ?></div></th>
											</tr>
										</table>
																			</div>
								</div>
								
								<hr/>
								
								
								
								<!-- -->							                                  
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group text-right">

                                            <button class="btn btn-primary" type="button" onClick="javascript:window.print()">
						<i class="ace-icon fa fa-print bigger-110"></i>
						Print
						</button> &nbsp; &nbsp; &nbsp;
                                           

                                        </div>
                                    </div>

                                </div>

                            </form>