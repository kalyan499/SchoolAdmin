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

              <h2 class="no-margin-bottom">Student Admission Form</h2>

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
                                    <p>Student Details</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Parent Details</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                    <p>Academic Fee</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                    <p>Transport Fee</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                    <p>Hostel Fee</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                                    <p>Final Summary</p>
                                 </div>
                              </div>
                           </div>
                           <form role="form">
                              <div class="row setup-content" id="step-1">
                                 <div class="col-md-6">
                                    <h4 class="ptb-20">Student Information - (Academic Year) 2018</h4>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="control-label" for="selBoard">Board</label>
                                       <select class="form-control" id="stuSection">
                                          <option>ICSE</option>
                                          <option>CBSE</option>
                                          <option selected>STATE</option>
                                       </select>
                                    </div>
                                 </div>
                                 <!-- #section:elements.form -->
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="first_name">First Name</label>
                                       <input maxlength="100" type="text" required="required" id="first_name" class="form-control" placeholder="Student Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="middle_name">Middle name</label>
                                       <input type="text" id="middle_name" required="required" class="form-control" placeholder="Last name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="last_name">Last name</label>
                                       <input type="text" id="last_name" required="required" class="form-control" placeholder="Last name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_name">Mother name</label>
                                       <input type="text" id="mother_name" required="required" class="form-control" placeholder="Mother name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="gender">Gender </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="rad1" type="radio" value="option1" name="a" class="radio-template">
                                          <label for="rad1">Male</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="rad2" type="radio" checked="" value="option2" name="a" class="radio-template tmpend">
                                          <label for="rad2">Female</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
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
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuPob">Place  of  birth</label>
                                       <input type="text" id="stuPob" required="required" class="form-control" placeholder="Last name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuNationality">Nationality</label>
                                       <input type="text" id="stuNationality" required="required" class="form-control" placeholder="Nationality">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuReligion">Religion </label>
                                       <input type="text" id="stuReligion" required="required" class="form-control" placeholder="Religion">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="caste">Caste</label>
                                       <input maxlength="100" type="text" required="required" id="caste" class="form-control" placeholder="Caste">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="category">Category</label>
                                       <select class="form-control" id="category">
                                          <option>Category 1</option>
                                          <option>Category 2</option>
                                          <option>Category 3</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">RTE</label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="rad1" type="radio" value="option1" name="a" class="radio-template">
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="rad2" type="radio" checked="" value="option2" name="a" class="radio-template tmpend">
                                          <label for="rad2">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMobileno">Student Mobile No</label>
                                       <input type="text" id="stuMobileno" required="required" class="form-control" placeholder="Student Mobile NO">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAddress">Student Address</label>
                                       <input type="text" id="stuAddress" required="required" class="form-control" placeholder="Student Address">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAdhaarno">Student Adhaar No</label>
                                       <input type="text" id="stuAdhaarno" required="required" class="form-control" placeholder="Student Adhaar No">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Student eMail id</label>
                                       <input type="text" id="stuEmail" required="required" class="form-control" placeholder="Student eMail id">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuClass">Grade</label>
                                       <select class="form-control" id="stuClass">
                                          <option>Select Grade</option>
                                          <option>PKG</option>
                                          <option>LKG</option>
                                          <option>UKG</option>
                                          <option>1</option>
                                          <option> 2</option>
                                          <option> 3</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSection">Section</label>
                                       <select class="form-control" id="stuSection">
                                          <option>Section A</option>
                                          <option>Section B</option>
                                          <option>Section C</option>
                                          <option selected>Not Allocated</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rollNo">Roll No</label>
                                       <input type="text" id="rollNo" required="required" class="form-control" placeholder="Roll No" readonly>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAdmno">Admission No</label>
                                       <input type="text" id="stuAdmno" required="required" class="form-control" placeholder="Admission No" readonly>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuPhoto">Upload Student Photo</label>
                                       <div class="card">
                                          <input id="stuPhoto" type="file" class="form-control-file">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSibling1">Sibling</label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="stuSibling1" type="radio" value="option1" name="y" class="radio-template">
                                          <label for="stuSibling1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="stuSibling2" type="radio" checked="" value="option2" name="y" class="radio-template tmpend">
                                          <label for="stuSibling2">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-12">
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-2">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label">Student Name</label> : Mahantesh
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuFname">Father Name</label>
                                       <input type="text" id="stuFname" required="required" class="form-control" placeholder="Father Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuFatherOccupation">Father Occupation</label>
                                       <input type="text" id="stuFatherOccupation" required="required" class="form-control" placeholder="Father Occupation">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMothername">Mother Name</label>
                                       <input type="text" id="stuMothername" required="required" class="form-control" placeholder="Mother Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMotherOccupation">Mother Occupation</label>
                                       <input type="text" id="stuMotherOccupation" required="required" class="form-control" placeholder="Mother Occupation">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuPaddress">Permanent Contact Address </label>
                                       <input type="text" id="stuPaddress" required="required" class="form-control" placeholder="Permanent Address">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuParentMobileno"> Mobile Number  </label>
                                       <input type="text" id="stuParentMobileno" required="required" class="form-control" placeholder="Mobile Number ">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmrcno">Emergency Contact Number  </label>
                                       <input type="text" id="stuEmrcno" required="required" class="form-control" placeholder="Emergency Contact Number ">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="selState">State  </label>
                                       <select id="selState" required="required" class="form-control">
                                          <option> Select State </option>
                                          <option selected> Karnataka </option>
                                          <option> Tamilnadu </option>
                                          <option> Kerala </option>
                                          <option> Maharashtra </option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="parentsEmailid">Parents eMail id  </label>
                                       <input type="text" id="parentsEmailid" required="required" class="form-control" placeholder="Parents eMail id">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3"></div>
                                 <div class="col-md-3"></div>
                                 <div class="col-md-12">
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-3">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label">Student Name</label> : Mahantesh, <label class="control-label">Grade</label> : 3
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="rafee">Registration and Admission Fee</label>                     
                                       <input type="text" required="required" id="rafee" class="form-control" placeholder="Registration and Admission Fee" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label" for="t1">Term 1</label>                     
                                       <input type="text" required="required" id="t1" class="form-control" placeholder="Term 1" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Term 2</label>                     
                                       <input type="text" required="required"  class="form-control" placeholder="Term 2" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Term 3</label>                     
                                       <input type="text" required="required"  class="form-control" placeholder="Term 3" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label" for="aplpros">Application form & Prospectus</label>                     
                                       <input type="text" required="required" id="aplpros"  class="form-control" placeholder="Application form Prospectus" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">School Essentials</label>                     
                                       <input type="text" required="required"  class="form-control" placeholder="School Essentials" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Others</label>
                                       <input type="text" required="required"  class="form-control" placeholder="School Essentials" />
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">Discounts - One Time Term Payment</label>                  
                                       <input type="text"  class="form-control" value="0" placeholder="One Time Term Payment" />
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Discounts - Sibling waiver</label>                  
                                       <input type="text"  class="form-control" value="0" placeholder=" Sibling waiver" />
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label">Total</label>                  
                                       <input type="text"  class="form-control" value="0" value="" readonly/>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <button class="btn btn-success btn-lg pull-right" type="button">Next</button>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-4">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label">Employee Name</label> : Mahantesh, Grade : 3
                                    </div>
                                 </div>
                                 <!--	<div class="col-md-3">
                                    <div class="form-group">
                                                                      <label class="control-label" for="stuTransportOpted">Transport </label>
                                                                      <div class="clearfix"></div>
                                                                      <div class="i-checks in-block">
                                                                          <input id="stuTransportOpted" type="radio" checked value="option1" name="d" class="radio-template">
                                                                          <label for="stuTransportOpted">Yes</label>
                                                                      </div>
                                                                      <div class="i-checks in-block">
                                                                          <input id="stuTransportOpted2" type="radio" value="option2" name="d" class="radio-template tmpend">
                                                                          <label for="stuTransportOpted2">No</label>
                                                                      </div>
                                                                  </div>
                                    </div> -->
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuTransNumber">Route Number/Name</label>
                                       <select class="form-control" id="stuTransNumber">
                                          <option selected>Select Route Name</option>
                                          <option>001 - Malleshwaram</option>
                                          <option>003 - Rajajinagar</option>
                                          <option>004 - Subramanya Nagar</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="trsFees">Route Fees  </label>
                                       <input type="text" id="trsFees" required="required" class="form-control" placeholder="Route Fees">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuTransNumber">Sibling Student Id</label>
                                       <select class="form-control" id="stuTransNumber">
                                          <option selected>Select ID</option>
                                          <option>student id 1</option>
                                          <option>student id 1</option>
                                          <option>student id 1</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="sibStuname">Sibling Student Name  </label>
                                       <input type="text" id="sibStuname" required="required" class="form-control" readonly placeholder="Sibling Student Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="sibDiscount">Sibling Discount  </label>
                                       <input type="text" id="sibDiscount" required="required" class="form-control" placeholder="Sibling Discount">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <button class="btn btn-success btn-lg pull-right" type="button">Next</button>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-5">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label">Employee Name</label> : Mahantesh, Grade :3
                                    </div>
                                 </div>
                                 <div class="cleafix"></div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuHostelOpt">Hostel Details</label>
                                       <select class="form-control" id="stuHostelOpt">
                                          <option selected>Hostel not opted</option>
                                          <option>Accommodation Only</option>
                                          <option>Accommodation with Food</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="hostelFees">Hostel Fees  </label>
                                       <input type="text" id="hostelFees" required="required" value="0" class="form-control" placeholder="Hostel Fees">
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <button class="btn btn-success btn-lg pull-right" type="button">Next</button>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-6">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label">Employee Name</label> : Mahantesh, Grade : 3
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
                           <button type="button" class="btn btn-primary">Save</button>
                           <button type="button" class="btn btn-primary">Send for Approval</button>
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