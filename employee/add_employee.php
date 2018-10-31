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

              <h2 class="no-margin-bottom">New Employee Form</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->
<section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
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
            <p>Leave Details</p>
        </div>
		<div class="stepwizard-step">
            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
            <p>Other Info</p>
        </div>
		<div class="stepwizard-step">
            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
            <p>Salary Details</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
       
            <div class="col-md-4">
               
                <div class="form-group">
                    <label class="control-label">Code</label>
                    <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Code"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Employee Name</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Employee Name" />
                </div>
				 <div class="form-group">
                    <label class="control-label">Date of Birth</label>
                    <div class="input-group">
						<input class="form-control date-picker" id="dob" type="text" data-date-format="dd-mm-yyyy">
						<span class="input-group-addon">
							<i class="fa fa-calendar bigger-110"></i>
						</span>
					</div>
                </div>
				<div class="form-group">
                    <label class="control-label">Address</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Address" />
                </div>
				<div class="form-group">
                    <label class="control-label">City</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="City" />
                </div>
				<div class="form-group">
                    <label class="control-label">State</label>
                    <select class="form-control">
						<option>Karnataka</option>
						<option>Tamil Nadu</option>
						<option>Kerala</option>
					</select>
                </div>
				<div class="form-group">
                    <label class="control-label">Tax Status</label>
                     <select class="form-control">
						<option>Resident</option>
						<option>Non Resident</option> 
					</select>
                </div>
              
            </div>
			
			 <div class="col-md-4">
              
                <div class="form-group">
                    <label class="control-label">Gender</label>
                     <select class="form-control">
						<option>Male</option>
						<option>Female</option> 
					</select>
                </div>
                 <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input type="text" required="required" class="form-control" placeholder="Email Address" />
                </div>
				 <div class="form-group">
                    <label class="control-label">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone" />
                </div>
				 <div class="form-group">
                    <label class="control-label">Mobile</label>
                    <input type="text" required="required" class="form-control" placeholder="Mobile" />
                </div>
				<div class="form-group">
                    <label class="control-label">Emergency No</label>
                    <input type="text" required="required" class="form-control" placeholder="Emergency No" />
                </div>
				<div class="form-group">
                    <label class="control-label">PAN</label>
                    <input type="text" class="form-control" placeholder="PAN" />
                </div>
				<div class="form-group">
                    <label class="control-label">Adhaar No</label>
                    <input type="text" required="required" class="form-control" placeholder="Adhaar No" />
                </div>
            </div>
			
			 <div class="col-md-4">
                
            <div class="card-body text-center">
                      <div class="client-avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle">
                        <div class="status bg-green"></div>
                      </div>
                      <div class="client-title">
                        <h3>Mahantesh</h3><span>Super Admin</span>
                      </div> 
                     <a href="#">EDIT</a>
                    </div>
                             
            </div>
			<div class="col-md-12">
			 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
			 </div>
       
    </div>
    <div class="row setup-content" id="step-2">
       <div class="col-md-12">
				<div class="form-group">
                    <label class="control-label">Employee Name</label> : Mahantesh
                </div>
			</div>
			 
            <div class="col-md-4">
                 
               
                <div class="form-group">
                    <label class="control-label">Joining Date</label>
                    <div class="input-group">
						<input class="form-control date-picker" id="dob" type="text" data-date-format="dd-mm-yyyy">
						<span class="input-group-addon">
							<i class="fa fa-calendar bigger-110"></i>
						</span>
					</div>
                </div>
				<div class="form-group">
                    <label class="control-label">Job Type</label>
                    <select class="form-control">
						<option>Probation</option>
						<option>Permanent</option>
						<option>Contract</option>
					</select>
					 
                </div>
				<div class="form-group">
                    <label class="control-label">Payment Mode</label>
                     <select class="form-control">
						<option>Cash</option>
						<option>Check</option>
						<option>DD</option>
						<option>Online Transefer</option>
					</select>
					 
                </div>
				<div class="form-group">
                    <label class="control-label">Bank A/c Number</label>                     
					<input type="text" required="required"  class="form-control" placeholder="Bank A/c Number" />
                </div>
				<div class="form-group">
                    <label class="control-label">&nbsp;</label>
                  
					<div class="i-checks">
                              <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                              <label for="checkboxCustom1">Enable ECS</label>
                            </div>
                </div>
                
            </div>
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label">Confirmation Perioud</label>                     
					<input type="text" required="required"  class="form-control" placeholder="Confirmation Perioud" />
                </div>
				<div class="form-group">
                    <label class="control-label">Location</label>                     
					<select class="form-control">
						<option>Bangalore</option>
						<option>Hubli</option>
						<option>Hoskote</option>
						<option>Banaswadi</option>
					</select>
                </div>
				<div class="form-group">
                    <label class="control-label">Department</label>                     
					<select class="form-control">
						<option>Front Admin</option>
						<option>Teacher</option>
						
					</select>
                </div>
				<div class="form-group">
                    <label class="control-label">Designation</label>                     
					<select class="form-control">
						<option>Admin</option>
						<option>Sr. Teacher</option>
						<option>Teacher</option>
					</select>
                </div>
			</div>
			<div class="col-md-12">
			<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
			</div>
    </div>
    <div class="row setup-content" id="step-3">
			<div class="col-md-12">
				<div class="form-group">
                    <label class="control-label">Employee Name</label> : Mahantesh
                </div>
			</div>
            <div class="col-md-4">
                
				<div class="form-group">
                    <label class="control-label">PF Eligibility </label>                  
					<div class="i-checks">
                              <input id="hasPf" type="checkbox" value="" class="checkbox-template">
                              <label for="hasPf">Employee has PF</label>
                   </div>
                </div>
				<div class="form-group">
                    <label class="control-label">PF - UAN</label>                     
					<input type="text" required="required"  class="form-control" placeholder="PF - UAN" />
                </div>
				<div class="form-group">
                    <label class="control-label">PF - No</label>                     
					<input type="text" required="required"  class="form-control" placeholder="PF - No" />
                </div>
				<div class="form-group">
                    <label class="control-label">PF - Enrollment Date</label>                     
					<div class="input-group">
						<input class="form-control date-picker" id="enrDate" type="text" data-date-format="dd-mm-yyyy">
						<span class="input-group-addon">
							<i class="fa fa-calendar bigger-110"></i>
						</span>
					</div>
                </div>
				<div class="form-group">
                    <label class="control-label">EPF - No</label>                     
					<input type="text" required="required"  class="form-control" placeholder="PF - No" />
                </div>
				<div class="form-group">
                    <label class="control-label">&nbsp;</label>
                  
					<div class="i-checks">
                              <input id="eps" type="checkbox" value="" class="checkbox-template">
                              <label for="eps">Entitled to EPS</label>
                            </div>
                </div>
				
				
			</div>
			<div class="col-md-4">
			<div class="form-group">
                    <label class="control-label">ESI Eligibility </label>                  
					<div class="i-checks">
                              <input id="hasEsi" type="checkbox" value="" class="checkbox-template">
                              <label for="hasEsi">Employee has ESI</label>
                   </div>
                </div>
				<div class="form-group">
                    <label class="control-label">ESI - No</label>                     
					<input type="text" required="required"  class="form-control" placeholder="ESI - No" />
                </div>
			</div>
			
			
				 <div class="col-md-12">
                <button class="btn btn-success btn-lg pull-right" type="button">Next</button>
            </div>
        
    </div>
	<div class="row setup-content" id="step-4">
         <div class="col-md-12">
				<div class="form-group">
                    <label class="control-label">Employee Name</label> : Mahantesh
                </div>
			</div>
            <div class="col-md-12">
				 <div class="table-responsive">                       
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>
							  <div class="i-checks">
                              <input id="selAll" type="checkbox" value="" class="checkbox-template">
                              <label for="selAll">&nbsp;</label>
							  </div>							
							</th>
                              <th>Leave Type </th>
                              <th>Opening Balance </th>
                              <th>Accured Leave</th>
                            </tr>
                          </thead>
                          <tbody>
                          
                            <tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="levDet2" type="checkbox" value="" class="checkbox-template">
                              <label for="levDet2">&nbsp;</label>
							  </div>
							  </th>
                              <td>Earned Leave</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
                          
                          </tbody>
                        </table>
                      </div>
			</div>
			
			
				 <div class="col-md-12">
                <button class="btn btn-success btn-lg pull-right" type="button">Next</button>
            </div>
    </div>
	<div class="row setup-content" id="step-5">
          <div class="col-md-12">
				<div class="form-group">
                    <label class="control-label">Employee Name</label> : Mahantesh
                </div>
			</div>
			<div class="cleafix"></div>
			<div class="col-md-4">
				<div class="form-group">
					  <label class="form-control-label">CTC (Annual) *</label>
					  
						<input type="text" class="form-control" placeholder="CTC" value="300000">
					  
				 </div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					  <label class="form-control-label">FBP *</label>
					<input type="text" class="form-control" placeholder="FBP" value="2000">
					  
				 </div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					  <label class="form-control-label">Variable Pay</label>
					  <input type="text" class="form-control" placeholder="Variable Pay" value="1000">
				 </div>
			</div>
			<div class="col-md-2">
				<label class="form-control-label">&nbsp;</label><br />
				<button class="btn btn-default">Calculate</button>
			</div>
			
			<div class="cleafix"></div>
             <div class="col-md-6">
				 <div class="i-checks">
                              <input id="hasEsi" type="checkbox" value="" class="checkbox-template">
                              <label for="hasEsi">Display CTC based on components</label>
                   </div>
			</div>
			<br><br>
				 <div class="col-md-12">
				 <div class="table-responsive">                       
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
                            <tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc2" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc2">&nbsp;</label>
							  </div>
							  </th>
                              <td>Basic</td>
							  <td></td>
                              <td><input type="text" class="form-control" value="1"></td>
                              <td><input type="text" class="form-control" value="0"></td>
                            </tr>
                            <tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc3" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc3">&nbsp;</label>
							  </div>
							  </th>
                              <td>House Rent Allowance</td>
							  <td>Basic * 50%</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc4" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc4">&nbsp;</label>
							  </div>
							  </th>
                              <td>Conveyance Allowance</td>
							  <td>1600</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc5" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc5">&nbsp;</label>
							  </div>
							  </th>
                              <td>Medical Allowance</td>
							  <td>1250</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc6" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc6">&nbsp;</label>
							  </div>
							  </th>
                              <td>Special Allowance</td>
							  <td>0</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc7" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc7">&nbsp;</label>
							  </div>
							  </th>
                              <td>Providend Fund</td>
							  <td>Basic * 12%</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc8" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc8">&nbsp;</label>
							  </div>
							  </th>
                              <td>Professional Tax</td>
							  <td>Earning</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc9" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc9">&nbsp;</label>
							  </div>
							  </th>
                              <td>Employee State Insurance</td>
							  <td>Earnings</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc10" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc10">&nbsp;</label>
							  </div>
							  </th>
                              <td>PF Employeer</td>
							  <td>Basic * 12%</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc11" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc11">&nbsp;</label>
							  </div>
							  </th>
                              <td>ESI Employeer</td>
							  <td>Earnings</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc12" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc12">&nbsp;</label>
							  </div>
							  </th>
                              <td>Local Conveyance</td>
							  <td>0</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc13" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc13">&nbsp;</label>
							  </div>
							  </th>
                              <td>Staff Welfare</td>
							  <td>0</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
							<tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc13" type="checkbox" value="" class="checkbox-template">
                              <label for="ctc13">&nbsp;</label>
							  </div>
							  </th>
                              <td>Travel Expenses</td>
							  <td>0</td>
                              <td><input type="text" class="form-control" value="0"></td>
                              <td><input type="text" class="form-control" value="1"></td>
                            </tr>
                          
                          </tbody>
                        </table>
                      </div>
			</div>
			 
			<div class="col-md-12">
               <div class="form-group row">
					<label class="form-control-label col-md-3">Difference Amount </label>
					<input type="text" class="form-control col-md-4" placeholder="FBP" value="2000">					  
				 </div>
            </div>
			
				 <div class="col-md-12">
                <button class="btn btn-success btn-lg pull-right" type="button">Next</button>
            </div>
        
    </div>
	<div class="row setup-content" id="step-6">
          <div class="col-md-12">
				<div class="form-group">
                    <label class="control-label">Employee Name</label> : Mahantesh
                </div>
			</div>
			<div class="col-md-12 text-center">
                <button class="btn btn-success btn-lg pull-right" data-toggle="modal" data-target="#myModal" type="button">Please Re-Check</button>
            </div>
			 <!-- Modal-->
                      <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Staff Details</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                               
                              <form>
                               
							   <div class="row">
							   <div class="col-md-4">
               
                <div class="form-group">
                    <label class="control-label">Code</label>
                    <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Code"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Employee Name</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Employee Name" />
                </div>
				 <div class="form-group">
                    <label class="control-label">Date of Birth</label>
                    <div class="input-group">
						<input class="form-control date-picker" id="dob" type="text" data-date-format="dd-mm-yyyy">
						<span class="input-group-addon">
							<i class="fa fa-calendar bigger-110"></i>
						</span>
					</div>
                </div>
			 
              
            </div>
			
			 <div class="col-md-4">
              <div class="form-group">
                    <label class="control-label">Father Name</label>
                    <input type="text" required="required" class="form-control" placeholder="Father Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Gender</label>
                     <select class="form-control">
						<option>Male</option>
						<option>Female</option> 
					</select>
                </div>
                 <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input type="text" required="required" class="form-control" placeholder="Email Address" />
                </div> 
				   <div class="i-checks">
                              <input id="payroll" type="checkbox" value="" class="checkbox-template">
                              <label for="payroll">Exclude from payroll</label>
							  </div>
			 
            </div>
			
			 <div class="col-md-4">
                
            <div class="card-body text-center">
                      <div class="client-avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle">
                        <div class="status bg-green"></div>
                      </div>
                      <div class="client-title">
                        <h3>Mahantesh</h3><span>Super Admin</span>
                      </div> 
                     <a href="#">EDIT</a>
                    </div>
                             
            </div>
							   </div>
							   
							   <div class="row">
							   <div class="col-md-12">
							   <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#pDetails" aria-controls="pDetails" role="tab" data-toggle="tab"  class="active">Personal Details</a></li>
    <li role="presentation"><a href="#official" aria-controls="official" role="tab" data-toggle="tab">Official </a></li>
    <li role="presentation"><a href="#pfEsi" aria-controls="pfEsi" role="tab" data-toggle="tab">PF-ESI </a></li>
    <li role="presentation"><a href="#leave" aria-controls="leave" role="tab" data-toggle="tab">Leave</a></li>
	<li role="presentation"><a href="#salary" aria-controls="salary" role="tab" data-toggle="tab">Salary</a></li>
	<li role="presentation"><a href="#eDocs" aria-controls="eDocs" role="tab" data-toggle="tab">Employee Docs</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="pDetails">
	Per
	</div>
    <div role="tabpanel" class="tab-pane" id="official">
	Official
	</div>
    <div role="tabpanel" class="tab-pane" id="pfEsi">...</div>
    <div role="tabpanel" class="tab-pane" id="leave">...</div>
	<div role="tabpanel" class="tab-pane" id="salary">...</div>
    <div role="tabpanel" class="tab-pane" id="eDocs">...</div>
  </div>
							   </div>
							   </div>

							   
							   
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
			
			<div class="cleafix"></div>
	</div>
</form>
				
								
			   </div>
              </div>
            </div>
          </section>
        

          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>

  <?php include("scripts.php"); ?>
   <script>
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
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;
         
                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
         
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });
         
            $('div.setup-panel div a.btn-primary').trigger('click');
         
         	$('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true,
            toggleActive: true
         });
         
         });
      </script>

  </body>

</html>