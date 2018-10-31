<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>VINS Admin Management</title>

    <meta name="description" content="">
					`																																																																					
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
				<a class="nav-link active" href="all_employees.php"><i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i><span>Employees</span></a>
				</li>
				
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0714_identity_card_photo_user_profile"></i><span>Employee Details</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Employee Salary Slip</span></a>
				</li>
				
				</ul>
				</div>
				</div>
          <!-- Page Header-->

         

          <!-- Dashboard Counts Section-->
						
                      <!-- End Page Navigation Tabs Header--> 
<div class="container-fluid no-padding body-content">
				<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
									 <div class="card-body">
                                     
									 <!-- Page Sub Navigation Menu and its content as Tabs -->
				<div class="container-fluid">
				<div class="tab-content">
      <div class="os-tabs-w">
         <div class="os-tabs-controls">
           <ul class="nav nav-tabs upper">
            <li class="nav-item">
              <a class="nav-link"  href="all_employees.php">Employee Lists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Edit Employee</a>
            </li> 
           </ul>
         </div>
        </div>
      <div class="tab-pane" id="stu_lists">
      
	  <div class="table-responsive">
                                 
                                        </div>
	  
	  
      </div>
      
      <div class="tab-pane active" id="addNewStudent">
      <div class="row bg-white">
                        <div class="col-lg-12" >
						
                            <div class="stepwizard">
                              <div class="stepwizard-row setup-panel">
                                 <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>Personal Details</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Official Details</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                    <p>PF and ESI</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                    <p>Salary Details</p>
                                 </div>
                                
                              </div>
                           </div>
   <?php

include("dbconnect.php");
$db->connect();
$employee_id=$_REQUEST["employee_id"];
$sql="select * from employees where employee_id='$employee_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);

?>
                           <form role="form" method="post" action="employees_update.php" enctype="multipart/form-data" id="sform">
                           <input type="hidden" name="employee_id" value="<?php echo $row["employee_id"]; ?>"/>
                             <div class="row setup-content" id="step-1" style="">
       <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="first_name">First Name <span class="mdfield">*</span></label>
                                       <input maxlength="100" type="text" required="required" id="first_name" name="first_name" class="form-control" placeholder="Employee Name" value="<?php echo $row["first_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="middle_name">Middle Name  </label>
                                       <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle name" value="<?php echo $row["middle_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="last_name">Last Name <span class="mdfield">*</span></label>
                                       <input type="text" id="last_name" name="last_name" required="required" class="form-control" placeholder="Last name" value="<?php echo $row["last_name"]; ?>">
                                    </div>
                                 </div>
								   <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMothername">Mother Name <span class="mdfield">*</span></label>
                                       <input type="text" id="mother_name" name="mother_name" required="required" class="form-control" placeholder="Mother Name" value="<?php echo $row["mother_name"]; ?>">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="gender">Gender <span class="mdfield">*</span></label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="gender" type="radio" value="Male" name="gender" class="radio-template" required="required" <?php if($row["gender"]=="Male"){ echo "checked"; } ?>>
                                          <label for="rad1">Male</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="gender" type="radio"  value="Female" name="gender" class="radio-template tmpend" required="required" <?php if($row["gender"]=="Female"){ echo "checked"; } ?>>
                                          <label for="rad2">Female</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Date of Birth <span class="mdfield">*</span></label>
                                       <div class="input-group date">
                                          <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control" required="required" value="<?php echo $row["date_of_birth"]; ?>">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAddress">Employee Address <span class="mdfield">*</span></label>
                                       <input type="text" id="address" name="address" required="required" class="form-control" placeholder="Employee Address" value="<?php echo $row["address"]; ?>">
                                    </div>
                                 </div>
								
								
                                 
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Employee Mobile <span class="mdfield">*</span></label>
                                       <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Employee mobile" ng-model="mobile" required value="<?php echo $row["mobile"]; ?>">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Emergency Number</label>
                                         <input maxlength="100" type="text" id="emergency_number" name="emergency_number" class="form-control" placeholder="Emergency Number" value="<?php echo $row["emergency_number"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Employee eMail id</label>
                                       <input type="text" id="email" name="email" class="form-control" placeholder="Employee eMail id" ng-model="email" value="<?php echo $row["email"]; ?>">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Employee Code <span class="mdfield">*</span></label>
                                         <input maxlength="100" type="text" required="required"  id="employee_code" name="employee_code" class="form-control" placeholder="Employee Code" required value="<?php echo $row["employee_code"]; ?>">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Tax Status <span class="mdfield">*</span></label>
                                          <select class="form-control" id="tax_status" name="tax_status">
						<option  <?php if($row["tax_status"]=="Resident"){ echo "selected"; } ?>>Resident</option>
						<option  <?php if($row["tax_status"]=="Non Resident"){ echo "selected"; } ?>>Non Resident</option> 
					</select>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAdhaarno">Employee Adhaar No</label>
                                       <input type="text" id="aadhar_number" name="aadhar_number" class="form-control" placeholder="Employee Adhaar No" value="<?php echo $row["aadhar_number"]; ?>">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">PAN</label>
                                       <input type="text" class="form-control" placeholder="PAN" id="pan_number" name="pan_number" value="<?php echo $row["pan_number"]; ?>">
                                    </div>
                                 </div>
    
			
			
			
			<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Qualification <span class="mdfield">*</span></label>
                                           <select class="form-control" id="qualification_id" name="qualification_id">
                                                <option value="">Select Qualification</option>
                                                <?php
                                           $sqlr="select * from qualifications";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["qualification_id"]; ?>"   <?php if($rowr["qualification_id"]==$row["qualification_id"]){ echo "selected"; } ?>><?php echo $rowr["qualification"]; ?></option>
                                        <?php
                                            }
                                       ?>
											
					</select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="employee_photo">Upload Employee Photo</label>
                                       <div class="card">
                                          <input id="employee_photo" name="employee_photo" type="file" class="form-control-file" accept="image/*" onchange="preview_image(event)">
                                       </div>
                                    </div>
                                 </div>
			 <div class="col-md-3">
								  <div class="card-body text-center">
                      <div class="client-avatar"><img id="output_image" src="../eimages/<?php echo $row["employee_photo"]; ?>" alt="..." width="130">
                        <div class="status bg-green"></div>
                      </div>
                      <div class="client-title">
                       
                      </div> 
                     
                    </div>
                                 </div>
			<div class="col-md-8">
			 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
			 </div>
       
    </div>
                              <div class="row setup-content" id="step-2" style="">
       <div class="col-md-12">
				<div class="form-group">
                    <label class="control-label">Employee Name</label> : <div id="step2_ename"></div>
                </div>
			</div>
			<div class="col-md-3">
								  <div class="form-group">
                    <label class="control-label">Bank Name</label>                     
					<input type="text" class="form-control" placeholder="Bank Name" name="bank_name" id="bank_name" value="<?php echo $row["bank_name"]; ?>">
                </div>
								 </div>
			<div class="col-md-3">
								  <div class="form-group">
                    <label class="control-label">Bank Branch</label>                     
					<input type="text" class="form-control" placeholder="Bank Branch" name="bank_branch" id="bank_branch" value="<?php echo $row["bank_branch"]; ?>">
                </div>
								 </div>
			<div class="col-md-3">
								  <div class="form-group">
                    <label class="control-label">Bank A/c Number</label>                     
					<input type="text" required="required" class="form-control" placeholder="Bank A/c Number" name="bank_account_number" id="bank_account_number" required value="<?php echo $row["bank_account_number"]; ?>">
                </div>
								 </div>
								 <div class="col-md-3">
								  <div class="form-group">
                    <label class="control-label">IFSC Code</label>                     
					<input type="text" class="form-control" placeholder="IFSC Code" name="ifsc_code" id="ifsc_code" value="<?php echo $row["ifsc_code"]; ?>">
                </div>
								 </div>
			        <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Joining Date <span class="mdfield">*</span></label>
                                       <div class="input-group date">
                                          <input  id="joining_date" name="joining_date" type="text"  placeholder="dd-mm-yyyy" class="form-control" required="required" value="<?php echo $row["joining_date"]; ?>">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
								  <div class="form-group">
                    <label class="control-label">Payment Mode</label>
                     <select class="form-control" name="payment_mode" id="payment_mode" required>
						<option  <?php if($row["payment_mode"]=="Cash"){ echo "selected"; } ?>>Cash</option>
						<option  <?php if($row["payment_mode"]=="Cheque"){ echo "selected"; } ?>>Cheque</option>
						<option  <?php if($row["payment_mode"]=="DD"){ echo "selected"; } ?>>DD</option>
						<option  <?php if($row["payment_mode"]=="Online Transefer"){ echo "selected"; } ?>>Online Transefer</option>
					</select>
					 
                </div>
								 </div>
								 <div class="col-md-3">
								 <div class="form-group">
                    <label class="control-label">Job Type</label>
                    <select class="form-control" name="job_type_id" id="job_type_id" required onChange="cp()">
						 <option value="">Select Job Type</option>
                                         <?php
                                           $sqlr="select * from job_types";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["job_type_id"]; ?>"   <?php if($rowr["job_type_id"]==$row["job_type_id"]){ echo "selected"; } ?>><?php echo $rowr["job_type_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
					</select>
					 
                </div>
								 </div>
								  
								  <div class="col-md-3">
								  <div class="form-group">
                    <label class="control-label">Confirmation Period</label>                     
					<select required="required" class="form-control" placeholder="Confirmation Period" name="confirmation_period" id="confirmation_period" required>
					<option value="">Select Confirmation Period</option>
				
					<option <?php if($row["confirmation_period"]=="Not Applicable"){ echo "selected"; }?>>Not Applicable</option>
					<option <?php if($row["confirmation_period"]=="3 Months"){ echo "selected"; }?>>3 Months</option>
					<option <?php if($row["confirmation_period"]=="6 Months"){ echo "selected"; }?>>6 Months</option>
					
					
					</select>
                </div>
								 </div>
								 
								 
								 <div class="col-md-3">
								 <div class="form-group">
                    <label class="control-label">Location</label>                     
					<select class="form-control" name="location_id" id="location_id">
						 <option value="">Select Job Type</option>
                                         <?php
                                           $sqlr="select * from locations";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["location_id"]; ?>"  <?php if($rowr["location_id"]==$row["location_id"]){ echo "selected"; } ?>><?php echo $rowr["location"]; ?></option>
                                        <?php
                                            }
                                       ?>
					</select>
                </div>
								 </div>
								 <div class="col-md-3">
								 <div class="form-group">
                    <label class="control-label">Department</label>                     
					<select class="form-control"  name="department_id" id="department_id" required>
						 <option value="">Select Job Type</option>
                                         <?php
                                           $sqlr="select * from departments";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["department_id"]; ?>"  <?php if($rowr["department_id"]==$row["department_id"]){ echo "selected"; } ?>><?php echo $rowr["department_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
						
					</select>
                </div>
								 </div>
								 <div class="col-md-3">
								 
				<div class="form-group">
                    <label class="control-label">Designation</label>                     
					<select class="form-control"  name="designation_id" id="designation_id" required>
						 <option value="">Select Job Type</option>
                                         <?php
                                           $sqlr="select * from designations";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["designation_id"]; ?>"  <?php if($rowr["designation_id"]==$row["designation_id"]){ echo "selected"; } ?>><?php echo $rowr["designation"]; ?></option>
                                        <?php
                                            }
                                       ?>
					</select>
                </div>
								 </div>
            
			
			<div class="col-md-12">
			<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
			</div>
    </div>
                              <div class="row setup-content" id="step-3" style="display: none;">
			<div class="col-md-12">
				<div class="form-group">
                    <label class="control-label">Employee Name</label> :  <div id="step3_ename"></div>
                </div>
			</div>
            <div class="col-md-4">
                
				<div class="form-group">
                    <label class="control-label">PF Eligibility </label>                  
					<div class="i-checks">
                              <input type="checkbox" class="checkbox-template"   name="is_pf_enabled" id="is_pf_enabled" onClick="togglePF()"  <?php if($row["is_pf_enabled"]==1){ echo "checked"; } ?>>
                              <label for="hasPf">Employee has PF</label>
                   </div>
                </div>
				<div id="pf">
				<?php 
				if($row["is_pf_enabled"]==1)
				{
				 ?>
				<div class="form-group">
				     <label class="control-label">PF - UAN</label>
				     <input type="text" required="required" class="form-control" placeholder="PF - UAN" name="pf_uan" id="pf_uan" value="<?php $row["pf_uan"]; ?>">
				</div>
                                <div class="form-group">
                                     <label class="control-label">PF - No</label>
                                     <input type="text" required="required" class="form-control" placeholder="PF - No" name="pf_number" id="pf_number" value="<?php $row["pf_number"]; ?>">
                                </div>
                                <div class="form-group">
                                     <label class="control-label">PF - Enrollment Date</label>
                                     <div class="input-group date">
                    <input class="form-control date-picker" name="pf_enrollment_date" id="pf_enrollment_date" type="text" data-date-format="dd-mm-yyyy" required="" value="<?php $row["pf_enrollment_date"]; ?>"> 
                                       <span class="input-group-addon"><i class="fa fa-calendar bigger-110"></i></span>
                                     </div>
                                </div>
                                <div class="form-group">
                                     <label class="control-label">EPF - No</label>
                                     <input type="text" required="required" class="form-control" placeholder="EPF - No" name="epf_number" id="epf_number" value="<?php $row["epf_number"]; ?>">
                                </div>
				<?php
				 } 
				 ?>
				</div>
				
				
				
			</div>
			<div class="col-md-4">
			<div class="form-group">
                    <label class="control-label">ESI Eligibility </label>                  
					<div class="i-checks">
                              <input   name="is_esi_enabled" id="is_esi_enabled" type="checkbox" value="" class="checkbox-template"  onClick="toggleESI()" <?php if($row["is_esi_enabled"]==1){ echo "checked"; } ?>>
                              <label for="hasEsi">Employee has ESI</label>
                   </div>
                </div>
				<div class="form-group" id="esi">
                    <?php 
				if($row["is_esi_enabled"]==1)
				{
				 ?>
				<label class="control-label">ESI - No</label>
				<input type="text" required="required" class="form-control" placeholder="ESI - No" name="esi_number" id="esi_number" value="<?php $row["esi_number"]; ?>">
				<?php
				 } 
				 ?>
                </div>
			</div>
			
			
				 <div class="col-md-12">
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
            </div>
        
    </div>
                              <div class="row setup-content" id="step-4" style="">
          <div class="col-md-12">
				<div class="form-group">
                    <label class="control-label">Employee Name</label> :  <div id="step4_ename"></div>
                </div>
			</div>
			<div class="cleafix"></div>
			
			<div class="col-md-3">
				<div class="form-group">
					  <label class="form-control-label">Fixed Salary *</label>
					<input type="text" class="form-control" placeholder="Fixed Salary" name="fsal" id="fsal" value="<?php echo $row["basic_salary"]; ?>">
					  
				 </div>
			</div>
			
			<div class="col-md-2">
				<label class="form-control-label">&nbsp;</label><br>
				<button class="btn btn-default" onClick="calcsalcomp()" type="button">Calculate</button>
			</div>
			
			<div class="cleafix"></div>
           
			<br><br>
				 <div class="col-md-12">
				 <div class="table-responsive" id="salcomp">                       
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>
							  <div class="i-checks">
                              <input id="ctcchkall" type="checkbox" value="" class="checkbox-template" onClick="scchkall()">
                              <label for="ctc1">&nbsp;</label>
							  </div>							
							</th>
                              <th>Pay Type </th>
                              <th>Formula </th>
                              <th>Monthly</th>
							  <th>Annual</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                          $fsal=$row["basic_salary"];
                          $str="";
                          $i=0;
						  $gsal=0;
						  $tot_allowances=0;
						  $tot_deductions=0;
						  $netsal=0;
						  $bsal=0;
                            $sql_heads="select * from salary_heads where head_type='Allowance'";
                            $res_heads=$db->query($sql_heads);
                            while($row_heads=$db->fetch_array($res_heads))
                            {
                               if($i!=0)
                                 $str.=" + ";
                               $i++;
                               $str.=$row_heads["salary_head"];
							   $per=$row_heads["head_percentage"];
							   $perof=(int)$row_heads["percentage_of"];
							   $amt=0;
							   if($perof=="Fixed Salary")
							   {
							        $amt=round($fsal*$per/100);
							   }
							   else if($perof=="Basic Salary")
							   {
							   $amt=round($bsal*$per/100);
							   }
							   if($row_heads["salary_head"]=="Basic Salary")
							     $bsal=$amt;
							  $tot_allowances+=$amt;
				$sqlh="select * from employee_salaries where employee_id='".$row['employee_id']."' and salary_head_id='".$row_heads['salary_head_id']."'";
				$resh=$db->query($sqlh);
                          ?>
                            <tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc2" type="checkbox" name="salary_head_id[]" value="<?php echo $row_heads["salary_head_id"]; ?>" class="checkbox-template scchk" <?php if($rowh=$db->fetch_array($resh)){?> checked <?php } ?>>
                              <label for="ctc2">&nbsp;</label>
							  </div>
							  </th>
                              <td><?php echo $row_heads["salary_head"]; ?></td>
							  <td><?php echo $row_heads["percentage_of"]." * ".$row_heads["head_percentage"]."%"; ?> </td>
                          <td><input type="text" class="form-control" required readonly value="<?php echo $amt; ?>"></td>
                              <td><input type="text" class="form-control" required readonly  value="<?php echo $amt*12; ?>"></td>
                            </tr>
                           <?php
                           }
						   $gsal=$tot_allowances;
                           ?>
                           <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Gross Salary</td>
							  <td><?php echo $str; ?> </td>
                              <td><input type="text" class="form-control"  required readonly value="<?php echo $gsal; ?>"></td>
                              <td><input type="text" class="form-control" required readonly  value="<?php echo $gsal*12; ?>"></td>
                            </tr>
                           <?php
                             $str="";
                          $i=0;
                            $sql_heads="select * from salary_heads where head_type='Deduction'";
                            $res_heads=$db->query($sql_heads);
                            while($row_heads=$db->fetch_array($res_heads))
                            {
							
                            if($i!=0)
                                 $str.=" - ";
                               $i++;
                               $str.=$row_heads["salary_head"];
							      $per=(int)$row_heads["head_percentage"];
							   $perof=$row_heads["percentage_of"];
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
							  $sqlh="select * from employee_salaries where employee_id='".$row['employee_id']."' and salary_head_id='".$row_heads['salary_head_id']."'";
				$resh=$db->query($sqlh);
                          ?>
                            <tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc2" type="checkbox" v name="salary_head_id[]" value="<?php echo $row_heads["salary_head_id"]; ?>" class="checkbox-template scchk"  <?php if($rowh=$db->fetch_array($resh)){?> checked <?php } ?>   <?php if(($row_heads["salary_head"]=="Employees State Insurance" || $row_heads["salary_head"]=="Provident Fund") && ($fsal>15000 && $fsal<=30000)){ echo "style='visibility:hidden;'"; } ?>>
                              <label for="ctc2">&nbsp;</label>
							  </div>
							  </th>
                              <td><?php echo $row_heads["salary_head"]; ?></td>
							  <td><?php echo $row_heads["percentage_of"]." * ".$row_heads["head_percentage"]."%"; ?> </td>
                              <td><input type="text" class="form-control" required readonly value="<?php echo $amt; ?>"></td>
                              <td><input type="text" class="form-control" required readonly  value="<?php echo $amt*12; ?>"></td>
                            </tr>
                           <?php
                           }
                           if($fsal>=15000)
                           {
                           $amt=200;
                           $tot_deductions+=$amt;
                           ?>
                           <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Professional Tax(PT)</td>
							  <td> </td>
                              <td><input type="text" class="form-control" name="ptax" required readonly value="<?php echo $amt; ?>" style="text-align:  right;"></td>
                              <td><input type="text" class="form-control" required readonly  value="<?php echo $amt*12; ?>" style="text-align:  right;"></td>
                            </tr>
                           <?php
                           }
						   $netsal=$gsal-$tot_deductions;
                           ?>
                            <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Total Deductions</td>
							  <td><?php echo $str; ?> </td>
                              <td><input type="text" class="form-control" required  readonly value="<?php echo $tot_deductions; ?>"></td>
                              <td><input type="text" class="form-control" required  readonly value="<?php echo $tot_deductions*12; ?>"></td>
                            </tr>
                            <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Net Salary</td>
							  <td>Gross Salary - Total Deductions</td>
                              <td><input type="text" class="form-control" required  readonly value="<?php echo $netsal; ?>"></td>
                              <td><input type="text" class="form-control" required  readonly value="<?php echo $netsal*12; ?>"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
			</div>
			 
			
			
				 <div class="col-md-12">
                <button class="btn btn-success btn-lg pull-right" type="submit">Save</button>
            </div>
        
    </div>
                             
                            
                           </form>
						 </div>
                     </div>
	  
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

  <?php include("scripts1.php"); ?>
   <script>
    function cp()
 {
     var jtid=document.getElementById("job_type_id").value;
     if(jtid==1)
     {
     document.getElementById("confirmation_period").value="3 Months";
     }
     else if(jtid==2)
     {
     document.getElementById("confirmation_period").value="Not Applicable";
     }
     else if(jtid==3)
     {
     document.getElementById("confirmation_period").value="6 Months";
     }
     
     
 }
   function calcfs()
   {
     var ctc=parseInt(document.getElementById("ctc").value);
	 var fs=Math.floor(ctc/12);
	 document.getElementById("fsal").value=fs;
   }
   function toggleESI()
{
   var a=document.getElementById("is_esi_enabled");
   if(a.checked)
   {
    var str="";
	str+="<label class=\"control-label\">ESI - No</label>";                   
str+="<input type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"ESI - No\"   name=\"esi_number\" id=\"esi_number\">";
    document.getElementById("esi").innerHTML=str;
   }
   else
   {
   document.getElementById("esi").innerHTML="";
   }
}
function togglePF()
{
   var a=document.getElementById("is_pf_enabled");
   if(a.checked)
   {
                     var str="<div class=\"form-group\">";
                    str+="<label class=\"control-label\">PF - UAN</label>";                     
					str+="<input type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"PF - UAN\"  name=\"pf_uan\" id=\"pf_uan\" required>";
                str+="</div>";
				str+="<div class=\"form-group\">";
                    str+="<label class=\"control-label\">PF - No</label>";                     
					str+="<input type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"PF - No\"  name=\"pf_number\" id=\"pf_number\" required>";
                str+="</div>";
				str+="<div class=\"form-group\">";
                    str+="<label class=\"control-label\">PF - Enrollment Date</label>";                     
					str+="<div class=\"input-group date\">";
						str+="<input class=\"form-control date-picker\"   name=\"pf_enrollment_date\" id=\"pf_enrollment_date\" type=\"text\" data-date-format=\"dd-mm-yyyy\"  required>";
						str+="<span class=\"input-group-addon\">";
							str+="<i class=\"fa fa-calendar bigger-110\"></i>";
						str+="</span>";
					str+="</div>";
                str+="</div>";
				str+="<div class=\"form-group\">";
                    str+="<label class=\"control-label\">EPF - No</label>";                     
					str+="<input type=\"text\" required=\"required\" class=\"form-control\" placeholder=\"EPF - No\"  name=\"epf_number\" id=\"epf_number\" required>";
                str+="</div>";
				document.getElementById("pf").innerHTML=str;
				$('.input-group.date').datepicker({
format:'d-m-yyyy',
autoclose:true
});
   }
   else
   {
   document.getElementById("pf").innerHTML="";
   }
}
   
         $(document).ready(function () {
         
            var navListItems = $('div.setup-panel div a'),
                    allWells = $('.setup-content'),
                    allNextBtn = $('.nextBtn');
         
            allWells.hide();
         
            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                        $item = $(this);
         
                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });
         
            allNextBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url'],select,input[type='radio'],input[type='date']"),
                    isValid = true;
         
                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
					  //alert(curInputs[i].name);
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
         
                if (isValid)
				{
				   if(curStepBtn=="step-1")
				   {
				       $("#step2_ename").html($("#first_name").val()+" "+$("#last_name").val());
					   
				   }
				   else  if(curStepBtn=="step-2")
				   {
				    $("#step3_ename").html($("#first_name").val()+" "+$("#last_name").val());
				 
				   }
				    else  if(curStepBtn=="step-3")
				   {
				    $("#step4_ename").html($("#first_name").val()+" "+$("#last_name").val());
				   
				   }
				    else  if(curStepBtn=="step-4")
				   {
				   
				   
				   }
				   
                    nextStepWizard.removeAttr('disabled').trigger('click');
				}
            });
         
            $('div.setup-panel div a.btn-primary').trigger('click');
         
         	$('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true,
            toggleActive: true
         });
         
         });
      </script>
<script>
function scchkall()
{
  var c=document.getElementById("ctcchkall");
   var  scs=document.getElementsByClassName("scchk");
  if(c.checked)
  {
   var i;
     for(i=0; i<scs.length; i++)
	 {
	     scs[i].checked=true;
	 }
  }
  else
  {
   var i;
     for(i=0; i<scs.length; i++)
	 {
	     scs[i].checked=false;
	 }
  }
}
function calcsalcomp() {
  var xhttp = new XMLHttpRequest();
  var fsal=document.getElementById("fsal").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("salcomp").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getsalcomp.php?fsal="+fsal, true);
  xhttp.send();
}
function selcountry() {
  var xhttp = new XMLHttpRequest();
  var country_id=document.getElementById("country_id").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("state_id").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getstates.php?country_id="+country_id, true);
  xhttp.send();
}


</script>
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
  </body>

</html>