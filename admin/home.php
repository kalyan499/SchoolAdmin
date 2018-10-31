<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VINS Admin Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
   <?php include("metatags.php"); ?>
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
     <?php include("header.php"); ?>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
<?php include("sidebar.php"); ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">School Admin Dashboard</h2>
            </div>
          </header>
		  <?php include("dbconnect.php"); 
$db->connect();
$sqlr="select count(*) as cnt from students where academic_year='".$_SESSION["academic_year"]."' and approval_status=1";
$resr=$db->query($sqlr);
$rowr=$db->fetch_array($resr);
$nstudents=$nparents=$rowr["cnt"];
$sqlr="select count(*) as cnt from employees";
$resr=$db->query($sqlr);
$rowr=$db->fetch_array($resr);
$nemployees=$rowr["cnt"];


 ?>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="row">
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center has-shadow">
                    <div class="icon bg-primary"><i class="os-icon picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i></div>
                    <div class="title"><span>Total Students</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $nstudents; ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center has-shadow">
                    <div class="icon bg-red"><i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i></div>
                    <div class="title"><span>Total Staffs</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $nemployees; ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center has-shadow">
                    <div class="icon bg-green"><i class="os-icon picons-thin-icon-thin-0703_users_profile_group_two"></i></div>
                    <div class="title"><span>Total Parents</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $nparents; ?></strong></div>
                  </div>
                </div>
                <!-- Item 
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Total<br>Earnings</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>40,000</strong></div>
                  </div>
                </div> -->
              </div>
          </section>
		  <!--Dashbaord Fees Collection -->
<?php
$sql="select count(*) as cnt from students s,courses c where s.course_id=c.course_id and academic_year='".$_SESSION["academic_year"]."' and approval_status=0";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$nsa=$row["cnt"];

$sql="select count(*) as cnt from expenses t1,expense_types t2 where t1.expense_type_id=t2.expense_type_id and approval_status=0";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$nea=$row["cnt"];

$sql="select count(*) as cnt from employee_leave_requests t1,employees t2,leave_types t3 where t1.employee_id=t2.employee_id and t1.leave_type_id=t3.leave_type_id";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$nela=$row["cnt"];

$sql="select count(*) as cnt from cash_handover_details where approval_status=0";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$nca=$row["cnt"];

$sql="select count(*) as cnt from student_payments t1,students t2,courses t3 where t1.student_id=t2.student_id and t1.course_id=t3.course_id and t1.approval_status=0";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$nspa=$row["cnt"];
?>		 
		   <!-- Approvals -->
               <br>
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card has-shadow">
							<div class="card-title"> <h5 class="page-section-title"><div class="icon bg-primary"><i class="os-icon picons-thin-icon-thin-0006_book_writing_reading_read_manual"></i></div> Approvals</h5></div>
                           <div class="card-body">
                              <div class="tab-content custom-tab-content">
                                 <div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs custom-tab" role="tablist">
                                        <li role="presentation"><a href="#studentAdmission" aria-controls="studentAdmission" role="tab" data-toggle="tab" class="active show"><i class="glyphicon glyphicon-home icon"></i><span class="link-lable"> Admission(<?php echo $nsa; ?>)</span></a></li>
									   <li role="presentation"><a href="#studentFees" aria-controls="studentFees" role="tab" data-toggle="tab" ><i class="glyphicon glyphicon-home icon"></i><span class="link-lable"> Fees(<?php echo $nspa; ?>)</span></a></li>
                                       <li role="presentation"><a href="#officeExpense" aria-controls="officeExpense" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-envelope"></i><span class="link-lable"> Expenses(<?php echo $nea; ?>)</span></a></li>
                                       <li role="presentation"><a href="#leaveApproval" aria-controls="leaveApproval" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-cog"></i><span class="link-lable"> Leave Approval(<?php echo $nela; ?>)</span></a></li>
                                       <li role="presentation"><a href="#staffSalary" aria-controls="staffSalary" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i><span class="link-lable"> Salary(0)</span></a></li>
                                       <li role="presentation"><a href="#officeCHD" aria-controls="officeCHD" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i><span class="link-lable"> Cash Handover Details(<?php echo $nca; ?>)</span></a></li>
                                       <li role="presentation"><a href="#Others" aria-controls="Others" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i><span class="link-lable"> Others(0)</span></a></li>
                                    </ul>
                                    <div class="tab-content">
                                       <div role="tabpanel" class="tab-pane active fade in show" id="studentAdmission">
                                          <div class="table-responsive">
                                             <table class="table ">
                                                <thead class="thin-border-bottom">
                                                   <tr>
                                                      <th>RNo
                                                      </th>
                                                      <th>Student Name
                                                      </th>
                                                      <th class="hidden-480">Grade Section
                                                      </th>
                                                      <th>Grade
                                                      </th> <th>
                                                         Entered By
                                                      </th>
                                                      <th>Action
                                                      </th>
                                                   </tr>
                                                </thead>
                                                <tbody>
												<?php
												$sql="select * from students s,courses c where s.course_id=c.course_id and academic_year='".$_SESSION["academic_year"]."' and approval_status=0";
                                                 $res=$db->query($sql);
                                                  while($row=$db->fetch_array($res))
												  {
												?>
                                                   <tr>
                                                      <td><?php echo $row["roll_number"]; ?> </td>
                                                      <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
                                                     <td><?php echo $row["course_name"]; ?></td>
                                                        <td><?php echo $row["current_year"]; ?></td>
                                                      <td>Front Desk </td>
                                                      <td>
                                                         <div class="hidden-sm hidden-xs btn-group">
                                                            <a class="btn btn-sm btn-primary" href="admission_edit.php?student_id=<?php echo $row["student_id"];?>">
                                                            VIEW & APPROVE
                                                            </a>
                                                            <a class="btn btn-sm btn-danger" href="#" onClick="calert('Are you sure you want to delete this?','students_delete.php?sid=<?php echo $row["student_id"];?>')">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </a>
                                                         </div>
                                                      </td>
                                                   </tr>
												   <?php
												   }
												   ?>
                                                   
                                                </tbody>
                                             </table>
												
                                          </div>
                                       </div>
                                
										<div role="tabpanel" class="tab-pane fade" id="studentFees">
                                          <div class="table-responsive">
                                             <table class="table ">
                                                <thead class="thin-border-bottom">
                                                   <tr>
                                                      <th>S.No</th>
<th scope="col">Roll No</th>
<th scope="col">Student Name</th>
<th scope="col">Grade Section</th>
<th scope="col">Grade</th>


<th scope="col">Paid Date</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
												<?php
												$sn=1;
$sql="select * from student_payments t1,students t2,courses t3 where t1.student_id=t2.student_id and t1.course_id=t3.course_id and t1.approval_status=0";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
												?>
                                                   <tr>
                                                  
                                                     <td><?php echo $sn++; ?></td>
<td><?php echo $row["roll_number"]; ?></td>
<td>
                                                            <a href="student_details.php?sid=<?php echo $row["student_id"]; ?>"><?php echo $row["first_name"]." ".$row["last_name"]; ?></a>
                                                        </td>
<td><?php echo $row["course_name"]; ?></td>
<td><?php echo $row["year"]; ?></td>
<td><?php echo $row["paid_date"]; ?></td>

                                                      <td>
                                                         <div class="hidden-sm hidden-xs btn-group">
                                                                <a class="btn btn-sm btn-info" href="student_payments_edit.php?student_payment_id=<?php echo $row["student_payment_id"];?>">
                                                            VIEW & APPROVE
                                                            </a>
                                                            <a class="btn btn-sm btn-danger" href="#" onClick="calert('Are you sure you want to delete this?','student_payments_delete.php?student_payment_id=<?php echo $row["student_payment_id"];?>')">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </a>
                                                         </div>
                                                      </td>
                                                   </tr>
                                                  <?php
												  }
												  ?>
                                                </tbody>
                                             </table>
											 
														 
											 
                                          </div>
                                       </div>
                                       <div role="tabpanel" class="tab-pane fade" id="officeExpense">
                                          <div class="table-responsive">
                                             <table class="table ">
                                                <thead class="thin-border-bottom">
                                                   <tr>
                                                      <th>S.No</th>
                                                <th scope="col">Expense Type</th>
<th scope="col">Expense Date</th>
<th scope="col">Payment Mode</th>
<th scope="col">Paid Amount</th>
<th scope="col">Paid By</th>
<th scope="col">Remarks</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
												<?php
												$sn=1;
$sql="select * from expenses t1,expense_types t2 where t1.expense_type_id=t2.expense_type_id and approval_status=0";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
												?>
                                                   <tr>
                                                  
                                                     <td><?php echo $sn++; ?></td>
<td><?php echo $row["expense_type"]; ?></td>
<td><?php echo $row["expense_date"]; ?></td>
<td><?php echo $row["payment_mode"]; ?></td>
<td><?php echo $row["expense_amount"]; ?></td>
<td><?php echo $row["paid_by"]; ?></td>
<td><?php echo $row["remarks"]; ?></td>

                                                      <td>
                                                         <div class="hidden-sm hidden-xs btn-group">
                                                                <a class="btn btn-sm btn-info" href="approveexpense.php?eid=<?php echo $row["expense_id"];?>">
                                                            APPROVE
                                                            </a>
                                                            <a class="btn btn-sm btn-danger" href="#" onClick="calert('Are you sure you want to delete this?','expenses_delete.php?expense_id=<?php echo $row["expense_id"];?>')">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </a>
                                                         </div>
                                                      </td>
                                                   </tr>
                                                  <?php
												  }
												  ?>
                                                </tbody>
                                             </table>
											 
														 
											 
                                          </div>
                                       </div>
                                       <div role="tabpanel" class="tab-pane fade" id="leaveApproval">
                                          <div class="table-responsive">
                                             <table class="table ">
                                                <thead class="thin-border-bottom">
                                                   <tr>
                                                 <th scope="col">S.No</th>
<th scope="col">Employee</th>
<th scope="col">Leave Type</th>
<th scope="col">From Date</th>
<th scope="col">To Date</th>
<th scope="col">Num Days</th>
<th scope="col">Remarks</th>
                                                      <th>
                                                         <i class="ace-icon fa fa-caret-right blue"></i>Action
                                                      </th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                  <?php 
$sql="select * from employee_leave_requests t1,employees t2,leave_types t3 where t1.employee_id=t2.employee_id and t1.leave_type_id=t3.leave_type_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
                                                     <tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["leave_type"]; ?></td>
<td><?php echo $row["from_date"]; ?></td>
<td><?php echo $row["to_date"]; ?></td>
<td><?php echo $row["num_days"]; ?></td>
<td><?php echo $row["remarks"]; ?></td>

                                                      <td>
                                                         <div class="hidden-sm hidden-xs btn-group">
                                                            <a class="btn btn-sm btn-info" href="approveleave.php?lid=<?php echo $row["employee_request_id"];?>">
                                                            APPROVE
                                                            </a>
                                                            <a class="btn btn-sm btn-danger" href="rejectleave.php?lid=<?php echo $row["employee_request_id"];?>" onClick="return confirm('Are you sure you want to reject leave?')">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </a>
                                                         </div>
                                                      </td>
                                                   </tr>
												   <?php
}
?>
                                                  
                                       
                                                </tbody>
                                             </table>
											 
											
														
														
                                          </div>
                                       </div>
                                       <div role="tabpanel" class="tab-pane fade" id="staffSalary">
                                          SALARY
                                       </div>
                                       <div role="tabpanel" class="tab-pane fade" id="officeCHD">
                                          <h2>Cash Handover Details</h2>
                                          <table class="table">
                                             <tr>
                                                <th scope="col">S.No</th>
<th scope="col">From Date</th>
<th scope="col">To Date</th>
<th scope="col">Amount</th>
<th scope="col">Hand Over Date</th>
<th scope="col">Hand Over By</th>
<th scope="col">2000/-</th>
<th scope="col">1000/-</th>
<th scope="col">500/-</th>
<th scope="col">200/-</th>
<th scope="col">100/-</th>
<th scope="col">50/-</th>
<th scope="col">20/-</th>
<th scope="col">10/-</th>
<th scope="col">Total</th>
                                                <th>Action</th>
                                             </tr>
											 <?php
$sn=1;
$sql="select * from cash_handover_details where approval_status=0";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
                                             <tr>
                                        <td><?php echo $sn++; ?></td>
<td><?php echo $row["from_date"]; ?></td>
<td><?php echo $row["to_date"]; ?></td>
<td><?php echo $row["amount"]; ?></td>
<td><?php echo $row["hand_over_date"]; ?></td>
<td><?php echo $row["hand_over_by"]; ?></td>
<td><?php echo $row["two_thousand"]; ?></td>
<td><?php echo $row["thousand"]; ?></td>
<td><?php echo $row["five_hundred"]; ?></td>
<td><?php echo $row["two_hundred"]; ?></td>
<td><?php echo $row["hundred"]; ?></td>
<td><?php echo $row["fifty"]; ?></td>
<td><?php echo $row["twenty"]; ?></td>
<td><?php echo $row["ten"]; ?></td>
<td><?php echo $row["total"]; ?></td>
                                                <td>
                                                   <div class="hidden-sm hidden-xs btn-group">
                                                      <a class="btn btn-sm btn-info" href="approvecash.php?cid=<?php echo $row["cash_handover_id"];?>">
                                                            APPROVE
                                                            </a>
                                                            <a class="btn btn-sm btn-danger" href="#" onClick="calert('Are you sure you want to delete this?','cash_handover_details_delete.php?cid=<?php echo $row["cash_handover_id"];?>')">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </a>
                                                   </div>
                                                </td>
                                             </tr>
											 <?php
}
?>
                                          </table>
										  
							
										  
                                       </div>
                                       <div role="tabpanel" class="tab-pane fade" id="Others">
                                          Other Details will come soon!..
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <!--Dashbaord Fees Collection -->
                <!-- <section class="tables">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="card">
                              <div class="card-close">
                                 <div class="dropdown">
                                    <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow" x-placement="bottom-end" style="display: none; position: absolute; transform: translate3d(15px, 26px, 0px); top: 0px; left: 0px; will-change: transform;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                 </div>
                              </div>
                             <!-- <div class="card-header d-flex align-items-center">
                                 <h3 class="h4">Fees Collections & Expenses</h3>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive">
                                    <table class="table ">
                                       <thead class="thin-border-bottom">
                                          <tr>
                                             <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>name
                                             </th>
                                             <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>price
                                             </th>
                                             <th class="hidden-480">
                                                <i class="ace-icon fa fa-caret-right blue"></i>status
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Collection </td>
                                             <td>
                                                <small>
                                                <s class="red">Rs 29.99</s>
                                                </small>
                                                <b class="green">Rs 19.99</b>
                                             </td>
                                             <td class="hidden-480">
                                                <span class="label label-info arrowed-right arrowed-in">on sale</span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Fees </td>
                                             <td>
                                                <b class="blue">Rs 16.45</b>
                                             </td>
                                             <td class="hidden-480">
                                                <span class="label label-success arrowed-in arrowed-in-right">approved</span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Expenses</td>
                                             <td>
                                                <b class="blue">Rs 15.00</b>
                                             </td>
                                             <td class="hidden-480">
                                                <span class="label label-danger arrowed">pending</span>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div> - ->
                           </div>
                        </div>
                     </div>
                  </div>
               </section>-->
		    
        <?php $db->close(); ?>
          <!-- Page Footer-->
         <?php include("footer.php"); ?>
        </div>
      </div>
    </div>
  <?php include("scripts.php"); ?>
  </body>
</html>