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
<?php
include("dbconnect.php"); 
$db->connect(); 

?>						
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
              <a class="nav-link active" href="#">Add New Employee</a>
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
   
                           <form role="form" method="post" action="employees_insert.php" enctype="multipart/form-data" id="sform">
                             <div class="row setup-content" id="step-1" style="">
       <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="first_name">First Name <span class="mdfield">*</span></label>
                                       <input maxlength="100" type="text" required="required" id="first_name" name="first_name" class="form-control" placeholder="Employee Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="middle_name">Middle Name  </label>
                                       <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="last_name">Last Name <span class="mdfield">*</span></label>
                                       <input type="text" id="last_name" name="last_name" required="required" class="form-control" placeholder="Last name">
                                    </div>
                                 </div>
								   <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMothername">Mother Name <span class="mdfield">*</span></label>
                                       <input type="text" id="mother_name" name="mother_name" required="required" class="form-control" placeholder="Mother Name">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="gender">Gender <span class="mdfield">*</span></label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="gender" type="radio" value="Male" name="gender" class="radio-template" required="required">
                                          <label for="rad1">Male</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="gender" type="radio"  value="Female" name="gender" class="radio-template tmpend" required="required">
                                          <label for="rad2">Female</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Date of Birth <span class="mdfield">*</span></label>
                                       <div class="input-group date">
                                          <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control" required="required">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAddress">Employee Address <span class="mdfield">*</span></label>
                                       <input type="text" id="address" name="address" required="required" class="form-control" placeholder="Employee Address">
                                    </div>
                                 </div>
								
								
                                 
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Employee Mobile <span class="mdfield">*</span></label>
                                       <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Employee mobile" ng-model="mobile" required>
                                    </div>
                                 </div>
                                 <!-- <div class="col-md-3">
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
                                         <option value="<?php echo $rowr["department_id"]; ?>"><?php echo $rowr["department_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
						
					</select>
                </div>
								 </div> -->
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Emergency Number</label>
                                         <input maxlength="100" type="text" id="emergency_number" name="emergency_number" class="form-control" placeholder="Emergency Number">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Employee eMail id</label>
                                       <input type="text" id="email" name="email" class="form-control" placeholder="Student eMail id" ng-model="email">
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
                                         <option value="<?php echo $rowr["department_id"]; ?>"><?php echo $rowr["department_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
						
					</select>
                </div>
								 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Employee ID Number <span class="mdfield">*</span></label>
                                         <input maxlength="100" type="text" required="required"  id="employee_code" name="employee_code" class="form-control" placeholder="Employee Code" required>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Tax Status <span class="mdfield">*</span></label>
                                          <select class="form-control" id="taxt_status" name="taxt_status">
						<option>Resident</option>
						<option>Non Resident</option> 
					</select>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAdhaarno">Employee Adhaar No</label>
                                       <input type="text" id="aadhar_number" name="aadhar_number" class="form-control" placeholder="Employee Adhaar No">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">PAN</label>
                                       <input type="text" class="form-control" placeholder="PAN" id="pan_number" name="pan_number">
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
                                         <option value="<?php echo $rowr["qualification_id"]; ?>"><?php echo $rowr["qualification"]; ?></option>
                                        <?php
                                            }
                                       ?>
											
					</select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="employee_photo">Upload Employee Photo</label>
                                      
                                          <input id="employee_photo" name="employee_photo" type="file" class="form-control-file" accept="image/*" onchange="preview_image(event)"> </div>
                                    <div class="client-avatar" style="text-align:left"><img id="output_image" src="../img/avatar-2.jpg" alt="...">
                        <div class="status bg-green"></div>
                      </div>

                                   
                                 </div>
			 
			<div class="col-md-12">
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
					<input type="text" class="form-control" placeholder="Bank Name" name="bank_name" id="bank_name">
                </div>
								 </div>
			<div class="col-md-3">
								  <div class="form-group">
                    <label class="control-label">Bank Branch</label>                     
					<input type="text" class="form-control" placeholder="Bank Branch" name="bank_branch" id="bank_branch">
                </div>
								 </div>
			<div class="col-md-3">
								  <div class="form-group">
                    <label class="control-label">Bank A/c Number</label>                     
					<input type="text" class="form-control" placeholder="Bank A/c Number" name="bank_account_number" id="bank_account_number">
                </div>
								 </div>
								 <div class="col-md-3">
								  <div class="form-group">
                    <label class="control-label">IFSC Code</label>                     
					<input type="text" class="form-control" placeholder="IFSC Code" name="ifsc_code" id="ifsc_code">
                </div>
								 </div>
			        <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Joining Date <span class="mdfield">*</span></label>
                                       <div class="input-group date">
                                          <input  id="joining_date" name="joining_date" type="text"  placeholder="dd-mm-yyyy" class="form-control" required="required">
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
						<option>Cash</option>
						<option>Cheque</option>
						<option>DD</option>
						<option>Online Transefer</option>
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
                                         <option value="<?php echo $rowr["job_type_id"]; ?>"><?php echo $rowr["job_type_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
					</select>
					 
                </div>
								 </div>
				
								  
								 
								  <div class="col-md-3">
								  <div class="form-group">
                    <label class="control-label">Confirmation Period</label>   
                    <div  id="cp">                  
					<select required="required" class="form-control" placeholder="Confirmation Period" name="confirmation_period" id="confirmation_period" required>
					<option value="">Select Confirmation Period</option>
					<option>Not Applicable</option>
					<option>3 Months</option>
					<option>6 Months</option>

					</select>
					</div>
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
                                         <option value="<?php echo $rowr["location_id"]; ?>"><?php echo $rowr["location"]; ?></option>
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
                                         <option value="<?php echo $rowr["designation_id"]; ?>"><?php echo $rowr["designation"]; ?></option>
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
                              <input type="checkbox" class="checkbox-template"   name="is_pf_enabled" id="is_pf_enabled" onClick="togglePF()">
                              <label for="hasPf">Employee has PF</label>
                   </div>
                </div>
				<div id="pf">
				
				</div>
				
				
				
			</div>
			<div class="col-md-4">
			<div class="form-group">
                    <label class="control-label">ESI Eligibility </label>                  
					<div class="i-checks">
                              <input   name="is_esi_enabled" id="is_esi_enabled" type="checkbox" value="" class="checkbox-template"  onClick="toggleESI()">
                              <label for="hasEsi">Employee has ESI</label>
                   </div>
                </div>
				<div class="form-group" id="esi">
                    
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
					<input type="text" class="form-control" placeholder="Fixed Salary" name="fsal" id="fsal" required>
					  
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
                              <input id="ctc1" type="checkbox" value="" class="checkbox-template">
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
                          $str="";
                          $i=0;
                            $sql_heads="select * from salary_heads where head_type='Allowance'";
                            $res_heads=$db->query($sql_heads);
                            while($row_heads=$db->fetch_array($res_heads))
                            {
                               if($i!=0)
                                 $str.=" + ";
                               $i++;
                               $str.=$row_heads["salary_head"];
                          ?>
                            <tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc2" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc2">&nbsp;</label>
							  </div>
							  </th>
                              <td><?php echo $row_heads["salary_head"]; ?></td>
							  <td><?php echo $row_heads["percentage_of"]." * ".$row_heads["head_percentage"]."%"; ?> </td>
                              <td><input type="text" class="form-control" required readonly></td>
                              <td><input type="text" class="form-control" required readonly></td>
                            </tr>
                           <?php
                           }
                           ?>
                           <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Gross Salary</td>
							  <td><?php echo $str; ?> </td>
                              <td><input type="text" class="form-control" name="a<?php echo $row_heads['salary_head_id']; ?>" id="a<?php echo $row_heads['salary_head_id']; ?>"  required readonly></td>
                              <td><input type="text" class="form-control"  name="m<?php echo $row_heads['salary_head_id']; ?>" id="m<?php echo $row_heads['salary_head_id']; ?>" required readonly></td>
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
                          ?>
                            <tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc2" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc2">&nbsp;</label>
							  </div>
							  </th>
                              <td><?php echo $row_heads["salary_head"]; ?></td>
							  <td><?php echo $row_heads["percentage_of"]." * ".$row_heads["head_percentage"]."%"; ?> </td>
                              <td><input type="text" class="form-control" required readonly></td>
                              <td><input type="text" class="form-control" required readonly></td>
                            </tr>
                           <?php
                           }
                           ?>
                            <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Total Deductions</td>
							  <td><?php echo $str; ?> </td>
                              <td><input type="text" class="form-control" required  readonly></td>
                              <td><input type="text" class="form-control" required  readonly></td>
                            </tr>
                            <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Net Salary</td>
							  <td>Gross Salary - Total Deductions</td>
                              <td><input type="text" class="form-control" required  readonly></td>
                              <td><input type="text" class="form-control" required  readonly></td>
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
     if(jtid==2)
     {
     document.getElementById("cp").innerHTML="<select required=\"required\" class=\"form-control\" placeholder=\"Confirmation Period\" name=\"confirmation_period\" id=\"confirmation_period\" required><option>3 Months</option></select>";
     }
     
     else if(jtid==3)
     {
     document.getElementById("cp").innerHTML="<select required=\"required\" class=\"form-control\" placeholder=\"Confirmation Period\" name=\"confirmation_period\" id=\"confirmation_period\" required><option value=\"\">Select Confirmation Period</option><option>3 Months</option><option>6 Months</option><option>1 Year</option><option>2 Year</option></select>";
     }
     
     
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