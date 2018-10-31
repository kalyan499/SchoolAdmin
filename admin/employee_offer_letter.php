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
   <!-- Page Navigation Tabs Header-->   
				<div class="os-tabs-w menu-shad">
				<div class="os-tabs-controls">
				<ul class="nav nav-tabs upper">
				<li class="nav-item">
				<a class="nav-link" href="all_employees.php"><i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i><span>Employees</span></a>
				</li>
				
				<li class="nav-item">
				<a class="nav-link active" href="#"><i class="os-icon picons-thin-icon-thin-0714_identity_card_photo_user_profile"></i><span>Employee Offer Letter</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Employee Salary Slip</span></a>
				</li>
				
				</ul>
				</div>
				</div>
          <!-- Page Header-->

         

          <!-- Dashboard Counts Section-->
<?php
include("dbconnect.php"); 
$db->connect(); 
$sql="select * from employees e,designations d,qualifications q where e.designation_id=d.designation_id and e.qualification_id=q.qualification_id and employee_id='".$_REQUEST["eid"]."'";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$fsal=$row["basic_salary"];
?>						
          <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
					    <h2 class="no-margin-bottom">Employee Offer Letter</h2>
                    </div>
                </header>
                <!-- Dashboard Counts Section-->
		  
		  
		  <section class="dashboard-counts">
            <div class="container-fluid">
           
                   <div class="card">
                
                    <div class="body">
<div class="panel panel-info" style="border-color: #bce8f1; ">
           
            <div class="panel-body">
<div class="row">

<div class="col-md-12 text-right xs-p-20">
<h4 class="no-margin-bottom">Usman Khan Memorial Educational Trust <sup>&reg;</sup></h4>
<h4 class="no-margin-bottom">RUMAN SCHOOL OF NURSING</h4>
<p class="no-margin-bottom">#63, Chokkanahalli, Hegde Nagar Main Road, 
Yelahanka Hobli, Bangalore - 560 064</p>
</div>
<div class="col-md-12 text-left xs-p-20">
<h4>To,</h4>
<br>
<h4> <?php echo $row["first_name"]." ".$row["last_name"]; ?><h/4>
<h4> <?php echo $row["address"]; ?></h4>
<h4>Contact :  <?php echo $row["mobile"]; ?><h/4>
<h4> <?php echo $row["email"]; ?></h4>
</div>
</div>

<div class="row">
<div class="col-md-12">
<p>Dear <?php echo $row["first_name"]." ".$row["last_name"]; ?>,</p>
<p>We are pleased to offer you the position of <b><u><?php echo $row["designation"]; ?></u></b> at Ruman School of Nursing. Attached are the 
specific terms and conditions of our offer, please read these important details carefully, including your 
compensation and benefits.</p>
<br>
<h3><b>Joining Acceptance and Commencement</b></h3>
<br>
<p>Your appointment will be effective on your joining date, i.e. <?php echo date('d-m-Y'); ?>. If you cannot confirm your acceptance or 
start from joining date, please send us a revised date with confirmed discussion with the HM / Management.</p>
<p>Report to the above school address on the joining date at <b>08:00 A.M.</b> Please note that it is important to be on time 
to complete the joining formalities.</p>
<p>Upon receiving this letter, please submit the following within one week:</p>
<ul>
<li>Copy of educational certificates (10<sup>th</sup>, 12<sup>th</sup>, Graduation, PG (if any)).</li>
<li>Copy of Last 3 months’ salary slip/ salary certificate.</li>
<li>Copy of conduct certificate / reference letters if any.</li>
<li>Original of any one educational certificate.</li>
<li>Copy of all the experience letters mentioned in your resumes.</li>
<li>Copy of any other professional certifications.</li>
<li>Copy of Aadhar card.</li>
<li>Copy of Address, Identification proof (DL / Pan Card / ration Card/ Passport).</li>
<li>Copy of Father / Husband ID</li>
<li>6 passport size photographs.</li>
<li>Duly filled and signed form of bank account details. (Previously sent via email)</li>
<li>Duly signed undertaking for NO corporal punishment. (previously sent via email)</li>
<li>Duly filled personal information form. (previously sent via email)</li>
</ul>
<br>
<p><b>* Please note that all of the above documents are mandatory and you will not be allowed to join without them.</b></p>

<p>Please contact us hr@sofiapublicschool.edu.in for any queries regarding your employment offer.</p>
<p>We believe no employee should be alone in the effort to succeed - for the school, for a student, or for oneself.</p>

<p>The other terms and conditions of the offer are as follows:</p>
<ol>
<li>Your appointment is contingent upon satisfactory reference & background checks including verification of your
application materials, education and employment history. Your employment is also contingent upon your ability to 
work for the school without restriction (i.e. you do not have any non-compete obligations or other restrictive 
clauses with any previous employer).</li>
<li>Your designation may be changed at the discretion of the school depending on the work assigned to you.</li>
<li>You may be required to travel on school work and you will be reimbursed those expenses.</li>
<li>You shall not borrow or lend any money or items from any of your colleagues or school accounts section.</li>
<li>You will be on probation until your successful completion of the probationary period. The normal probation 
period is 6 months. At any time during your probationary period, if found unsatisfactory the school may terminate 
your service by giving one week notice or basic salary in lieu thereof. Upon completion of probationary period, as
regular permanent employee, the school may terminate your service at any time by giving 30 days notice or basic 
salary in lieu thereof.</li>
<li>As a regular permanent employee you are entitled to 10 casual leaves annually, you cannot combine more than 
3 leaves together for a long leave, taking a casual leave on the last or first working day of any holiday break is 
prohibited and is considered as absence. Half day casual leaves are prohibited. For the first 6 months you will be 
on probation and will not be entitled to any casual leaves until having successfully completed probation. If you do 
not wish to take any casual leaves they will be credited to you at the end of the academic year, subject to 
conditions and is left to the discretion of the management.</li>
<li>It is mandatory to work for a minimum of one academic year from your date of joining i.e., from May-March. 
Should you desire to leave the organization after the current academic year you are working for, you must give 
notice in writing to the management by November 31<sup>st</sup> of the current academic year and only at the end of that 
particular academic year after completion of your duties & handing over of your responsibilities to the 
management, you will be relieved of your duties.</li>
<li>You agree to stay honest and true to yourself by following all the duties of the above designation and always 
thinking of the student’s and school’s progress during your time at school. You will attend any professional 
development training or course the management requires you to with utmost participation and commitment for 
your own and school’s professional growth.</li> 
<li>If you decide to leave in between any given academic year, you have to pay the school 90 day’s basic salary in 
lieu. If you leave in between you will neither receive experience certificate, relieving letter nor conduct certificate, 
it is provided only if you complete the academic year successfully.</li>
<li>If you are absent for a continuous period of 8 days without leave or obtaining your HM’s approval, you will be 
deemed to have voluntarily terminated your service without notice and will owe 90 days basic salary in lieu.</li>
<li>You are expected to come to school on time and leave on time that is from 8:15 AM to 4:00 PM Monday to Friday and 1<sup>st</sup>
, 3<sup>rd</sup>& 4<sup>th</sup> Saturday of every month from 8:15 AM to 3:00 PM. If you are late, it will reflect bad for 
your term, for your appraisal next year & could lead to termination.</li>
<li>You will retire from the services of the school on attaining 60 years. Retirement action will be performed one 
day prior to the last working day of the retiring month. Upon your resignation or retirement from the school or 
termination of your services, you are required to return all assets and property of the school such as documents, 
machines, data, files and books etc.</li>
<li> You agree to take up any or all responsibilities apart from teaching given to you during your term and always 
willing to contribute towards school’s betterment without hesitation.</li> 
<li>Any and all of the terms and conditions of service may be modified or changed at the School’s discretion.</li>
<li>Your individual remuneration is strictly between yourself and the School. It has been determined based on 
numerous factors such as your job, skills-specific background, and professional merit. This information and any 
changes made therein should be treated as personal and confidential.</li>
<li>It is your responsibility to notify the school of any changes in your personal information within 3 working days. 
All notices shall be considered duly and properly delivered to the address on file with the school.</li>
<li>During your service in the school, you are expected to devote your whole time and attention to the school's 
affairs and refrain from directly or indirectly engaging in any other business/work.</li>
<li>Information pertaining to Sofia Public School and intellectual property is confidential and you must be willing 
to sign a non-disclosure agreement. If you are bound by a confidentiality agreement with a previous school, you 
must notify the school.</li>
<li>All employees are required to read and comply with SPS Code of Conduct Guidelines and sign a statement to 
this effect. Any breach of the Guidelines or the terms and conditions of employment may result in termination of 
your services without notice or compensation.</li>
<li>At Sofia, we are strictly against corporal punishment; hence, you are required to sign an undertaking stating 
you will not engage in any kind of punishments towards your students at any given time. If found guilty, you will be 
solely responsible for it and be willing to face the circumstances.</li>
<li>If any information furnished by you in your application for employment or during the selection process is found 
at any time during your employment to be incorrect or false, and/or if you have suppressed material information 
regarding your qualifications and experience, the school may terminate your services without notice or 
compensation.</li>
<li>You will abide by all the rules and regulations of the School which are in force from time to time and the School 
shall have the right to vary or modify any or all of the above terms and conditions which shall be binding on you.</li>
<li>By default, you will be enrolled in the EPFO- Employees Provident Fund Organization, India (log in 
to epfindia.com for more details) and ESIC – Employees State Insurance Corporation, India (log in to esic.nic.in for 
more details).</li>
</ol>
<h3>SALARY DETAILS:</h3>
<table class="table table-bordered">
<tr>
<td colspan="2"><b>DATE:</b> <?php echo date('M d,Y'); ?></td>
</tr>
<tr>
<td colspan="2"><b>NAME:</b> <?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
</tr>
<tr>
<td><b>DESIGNATION:</b> <?php echo $row["designation"]; ?></td>
<td><b>WORK LOCATION:</b> Ruman School of Nursing, <?php echo $row["location"]; ?></td>
</tr>
</table>
<br>
<br>
<table class="table table-bordered">
<tr>
<th>Compensation Components</th>
<th></th>
</tr>
<?php
$sn=1;
 $tot_allowances=0;
 $gsal=0;

						  $tot_allowances=0;
						  $tot_deductions=0;
						  $netsal=0;
						  $bsal=0;
$sql1="select * from salary_heads where head_type='Allowance'";
$res1=$db->query($sql1);
while($row1=$db->fetch_array($res1))
{
   $sql2="select * from employee_salaries where employee_id='".$_REQUEST["eid"]."' and salary_head_id='".$row1['salary_head_id']."'";
   $res2=$db->query($sql2);
   $row2=$db->fetch_array($res2);
   $per=$row1["head_percentage"];
							   $perof=(int)$row1["percentage_of"];
							   $amt=0;
							   if($perof=="Fixed Salary")
							   {
							        $amt=round($fsal*$per/100);
							   }
							   else if($perof=="Basic Salary")
							   {
							   $amt=round($bsal*$per/100);
							   }
							   if($row1["salary_head"]=="Basic Salary")
							     $bsal=$amt;
							  $tot_allowances+=$amt;
?>
<tr>
<td><?php echo $sn++; ?>.&nbsp;&nbsp;<?php echo $row1["salary_head"]; ?></td>
<td style="text-align:right;"><?php echo $amt; ?></td>
</tr>
<?php
}
 $gsal=$tot_allowances;
?>
<tr>
<td>Monthly Gross Salary:</td>
<td style="text-align:right;"><?php echo $gsal; ?></td>
</tr>
</table>

<br>
<br>
<table class="table table-bordered">
<tr>
<th>Retrials</th>
<th></th>
</tr>
<?php
$sn=1;

						 		 
						 
$sql1="select * from salary_heads where head_type='Deduction'";
$res1=$db->query($sql1);
while($row1=$db->fetch_array($res1))
{
   $sql2="select * from employee_salaries where employee_id='".$_REQUEST["eid"]."' and salary_head_id='".$row1['salary_head_id']."'";
   $res2=$db->query($sql2);
   $row2=$db->fetch_array($res2);
   $per=$row1["head_percentage"];
							   $perof=(int)$row1["percentage_of"];
							   $amt=0;
							   if($perof=="Fixed Salary")
							   {
							        $amt=round($fsal*$per/100);
							   }
							   else if($perof=="Basic Salary")
							   {
							   $amt=round($bsal*$per/100);
							   }
							   else if($perof=="Gross Salary")
							   {
							   $amt=round($gsal*$per/100);
							   }
							   
							  $tot_deductions+=$amt;
?>
<tr>
<td><?php echo $sn++; ?>.&nbsp;&nbsp;<?php echo $row1["salary_head"]; ?></td>
<td style="text-align:right;"><?php echo $amt; ?></td>
</tr>
<?php
}
if($fsal>=15000)
                           {
                           $amt=200;
                           $tot_deductions+=$amt;
                           ?>
                           <tr>
                              <td><?php echo $sn++; ?>.&nbsp;&nbsp;Professional Tax(PT)</td>
							
                              <td style="text-align:right;"><?php echo $amt; ?></td>
                            </tr>
                           <?php
                           }
 $netsal=$gsal-$tot_deductions;
?>
<tr>
<td>Monthly Net Salary:</td>
<td style="text-align:right;"><?php echo $netsal; ?></td>
</tr>
</table>
<br>
<p>The impact of today's education and pace of change is tremendous. We hope you're as excited as we are to play a 
part in that revolution. At Sofia, we're changing the world every day and we will be delighted to have you as part of 
our team. To confirm your acceptance of this offer letter on the terms and conditions specified herein, please sign 
in the space specified below and return the signed copy to the school office along with all requested documents 
and collect back signed copy from the management next day.</p>
<p>Sincerely,</p>
<br>
<br>
<h4>MIRZA MUJEEBULLA,</h4>
<h4>Secretary,</h4>
<h4>SOFIA PUBLIC SCHOOL</h4>
<br>
<h3><b>ACCEPTANCE OF APPOINTMENT TERMS AND CONDITIONS:</b></h3>
<h3><b>I agree that I have read, understand, and accept employment with Ruman School of Nursing under the terms and conditions stated 
above.</b></h3>
<br>
<h5>Printed Name:</h5>
<h5>SIGNATURE:</h5>
<h5>DATE:</h5>

              <div class="student_details">
			   <button class="btn btn-primary pull-right" onclick="myFunction()">Print</button>
			  </div>
                </div>
				
              </div>
            </div>
                 
            
          </div>
                       
                    </div>
                </div>
              
           
      
				</div>
				 
				
		  
 <?php 
						   $db->close();
						   ?>
          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>

  <?php include("scripts.php"); ?>
  <script>
		function myFunction() {
				
				$(".student_details").css("display", "none"); 
				window.print();
				
		}
		
	</script>
  </body>

</html>