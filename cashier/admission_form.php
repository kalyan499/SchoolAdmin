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
				<a class="nav-link active" href="allStudents.html"><i class="os-icon picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i><span>Students</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0706_user_profile_add_new"></i><span>Student Promotion</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="studentDetails.html"><i class="os-icon picons-thin-icon-thin-0714_identity_card_photo_user_profile"></i><span>Student Details</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="studenInvoice.html"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Student Invoice</span></a>
				</li>
				
				</ul>
				</div>
				</div>
          <!-- Page Header-->

         

          <!-- Dashboard Counts Section-->
<?php
include("dbconnect.php"); 
$db->connect(); 
 $admission_no=1;
$sql="select count(*) as cnt from students where academic_year='".$_SESSION["academic_year"]."'";
$res=$db->query($sql);
if($row=$db->fetch_array($res))
{
    $admission_no=$row["cnt"]+1;
}
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
              <a class="nav-link active" data-toggle="tab" href="#stu_lists">Student Lists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#addNewStudent">Add New Student</a>
            </li> 
           </ul>
         </div>
        </div>
      <div class="tab-pane active" id="stu_lists">
      
	  <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                                <thead>
                                                    <tr>

                                                        <th>Roll No</th>
                                                        <th>Name</th>
                                                        <th>Gender</th>
                                                        <th>Parents Name</th>
                                                        <th>Course</th>
                                                        <th>Year</th>
														<th>Sem</th>
                                                        <th>Address</th>
                                                        <th>Date of birth</th>
                                                        <th>Mobile No</th>
                                                        <th>E-mail id</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
												<?php
												$sn=1;
												$sql="select * from students s,courses c where s.course_id=c.course_id and academic_year='".$_SESSION["academic_year"]."'";
												$res=$db->query($sql);
                                                while($row=$db->fetch_array($res))
                                                {
												?>
                                                    <tr>
                                                        <td><?php echo $row["roll_number"]; ?></td>
                                                        <td>
                                                            <a href="student_details.php?sid=<?php echo $row["student_id"]; ?>"><?php echo $row["first_name"]." ".$row["last_name"]; ?></a>
                                                        </td>
                                                        <td><?php echo $row["gender"]; ?></td>
                                                        <td><?php echo $row["father_name"]; ?></td>
                                                        <td><?php echo $row["course_name"]; ?></td>
                                                        <td><?php echo $row["current_year"]; ?></td>
														  <td><?php echo $row["current_sem"]; ?></td>
                                                        <td><?php echo $row["address"]; ?></td>
                                                        <td><?php echo $row["date_of_birth"]; ?></td>
                                                        <td><?php echo $row["mobile"]; ?></td>
                                                        <td><?php echo $row["email"]; ?></td>
                                                        <td>
                                                            <div class="hidden-sm hidden-xs btn-group">
                                                                <button class="btn btn-sm btn-success">
                                                                    <i class="ace-icon fa fa-eye bigger-120"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-info">
                                                                    <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                                </button>
                                                                <button class="btn btn-sm btn-danger">
                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                </button>
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
      
      <div class="tab-pane" id="addNewStudent">
      <div class="row bg-white">
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
   
                           <form role="form" method="post" action="students_insert.php" enctype="multipart/form-data">
                              <div class="row setup-content" id="step-1">
                                 <div class="col-md-6">
                                    <h4 class="ptb-20">Student Information - (Academic Year  <?php echo $_SESSION["academic_year"]; ?>)</h4>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                      
                                    </div>
                                 </div>
                                 <!-- #section:elements.form -->
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="first_name">First Name</label>
                                       <input maxlength="100" type="text" required="required" id="first_name" name="first_name" class="form-control" placeholder="Student Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="middle_name">Middle name</label>
                                       <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="last_name">Last name</label>
                                       <input type="text" id="last_name" name="last_name" required="required" class="form-control" placeholder="Last name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_name">Mother name</label>
                                       <input type="text" id="mother_name" name="mother_name" required="required" class="form-control" placeholder="Mother name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="gender">Gender </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="gender" type="radio" value="Male" name="gender" class="radio-template">
                                          <label for="rad1">Male</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="gender" type="radio"  value="Female" name="gender" class="radio-template tmpend">
                                          <label for="rad2">Female</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Date of Birth</label>
                                       <div class="input-group">
                                          <input class="form-control date-picker" id="date_of_birth" name="date_of_birth" type="date" data-date-format="dd-mm-yyyy">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuPob">Place  of  birth</label>
                                       <input type="text" id="place_of_birth" name="place_of_birth" required="required" class="form-control" placeholder="Place of Birth">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuNationality">Nationality</label>
                                       <input type="text" id="nationality" name="nationality" required="required" class="form-control" placeholder="Nationality">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuReligion">Religion </label>
                                        <select id="religion_id" name="religion_id" class="col-xs-10 col-sm-12 form-control" required>

	   <option value="">Select Religion</option>
<?php
$sqlr="select * from religions";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["religion_id"]; ?>"><?php echo $rowr["religion_name"]; ?></option>
<?php
}
?>
</select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="caste">Caste</label>
                                       <select id="caste_id" name="caste_id" class="col-xs-10 col-sm-12 form-control" required>

	   <option value="">Select Caste</option>
<?php
$sqlr="select * from castes";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["caste_id"]; ?>"><?php echo $rowr["caste_name"]; ?></option>
<?php
}
?>
</select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="category">Category</label>
                                       <select id="category_id" name="category_id" class="col-xs-10 col-sm-12 form-control" required>

	   <option value="">Select Category</option>
<?php
$sqlr="select * from categories";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["category_id"]; ?>"><?php echo $rowr["category_name"]; ?></option>
<?php
}
?>
</select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1"></label>
                                        <select class="form-control" id="agent_id" name="agent_id">
                                          <option value="">Select Agent</option>
                                         <?php
                                           $sqlr="select * from agent_details";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["agent_id"]; ?>"><?php echo $rowr["agent_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMobileno">Student Mobile No</label>
                                       <input type="text" id="mobile" name="mobile" required="required" class="form-control" placeholder="Student Mobile NO">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAddress">Student Address</label>
                                       <input type="text" id="address" name="address" required="required" class="form-control" placeholder="Student Address">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAdhaarno">Student Adhaar No</label>
                                       <input type="text" id="aadhar_number" name="aadhar_number" class="form-control" placeholder="Student Adhaar No">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Student eMail id</label>
                                       <input type="text" id="email" name="email" required="required" class="form-control" placeholder="Student eMail id" ng-model="email">
                                    </div>
                                 </div>
                                
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSection">Select Course</label>
                                       <select class="form-control" id="course_id" name="course_id"  onChange="selcourse()"  required="required">
                                          <option value="">Select Course</option>
										<?php
                                           $sqlr="select * from courses";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["course_id"]; ?>"><?php echo $rowr["course_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
                                       </select>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="section_id">Select Section</label>
                                       <select class="form-control" id="section_id" name="section_id">
                                          <option value="">Select Section</option>
                                         <?php
                                           $sqlr="select * from sections";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["section_id"]; ?>"><?php echo $rowr["section_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
                                       </select>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="year">Select Year</label>
									   <div id="syear">
                                       <select class="form-control" id="year" name="year" onChange="selyear()"  required="required">
                                          <option value="">Select Sem</option>
                                          <?php
										     $year=1;
											 while($year<=4)
											 {
										  ?>
										  <option><?php echo $year++; ?></option>
										  <?php
										     }
										  ?>
                                       </select>
									   </div>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="current_sem">Select Sem</label>
                                       <div id="csem">
									   <select class="form-control" id="current_sem" name="current_sem">
                                          <option value="">Select Sem</option>
                                          <?php
										     $sem=1;
											 while($sem<=8)
											 {
										  ?>
										  <option><?php echo $sem++; ?></option>
										  <?php
										     }
										  ?>
                                       </select>
									   </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="roll_number">Roll No</label>
                                       <input type="text" id="roll_number" name="roll_number" required="required" class="form-control" placeholder="Roll No" readonly="">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="admission_number">Admission No</label>
                                       <input type="text"  id="admission_number" name="admission_number" required="required" class="form-control" placeholder="Admission No" readonly="" value="<?php echo $admission_no; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="student_photo">Upload Student Photo</label>
                                       <div class="card">
                                          <input id="student_photo" name="student_photo" type="file" class="form-control-file" accept="image/*" onchange="preview_image(event)">
                                       </div>
                                    </div>
                                 </div>
                                
                                 <div class="col-md-4">
								  <div class="card-body text-center">
                      <div class="client-avatar"><img id="output_image" src="../img/avatar-2.jpg" alt="..." class="img-fluid">
                        <div class="status bg-green"></div>
                      </div>
                      <div class="client-title">
                       
                      </div> 
                     
                    </div>
                                 </div>
								 
                                 <div class="col-md-12">
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-2">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label"><strong>Student Name :</strong></label><span id="step2_sname"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuFname">Father Name</label>
                                       <input type="text" id="stuFname" name="stuFname" required="required" class="form-control" placeholder="Father Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuFatherOccupation">Father Occupation</label>
                                       <input type="text" id="father_occupation" name="father_occupation" required="required" class="form-control" placeholder="Father Occupation">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMothername">Mother Name</label>
                                       <input type="text" id="stuMname" name="stuMname" required="required" class="form-control" placeholder="Mother Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMotherOccupation">Mother Occupation</label>
                                       <input type="text" id="mother_occupation" name="mother_occupation" required="required" class="form-control" placeholder="Mother Occupation">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuPaddress">Permanent Contact Address </label>
                                       <input type="text" id="permenant_address" name="permenant_address" required="required" class="form-control" placeholder="Permanent Address">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuParentMobileno"> Mobile Number  </label>
                                       <input type="text" id="parent_mobile" name="parent_mobile" required="required" class="form-control" placeholder="Mobile Number ">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmrcno">Emergency Contact Number  </label>
                                       <input type="text" id="emergency_contact_number" name="emergency_contact_number" required="required" class="form-control" placeholder="Emergency Contact Number ">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="selState">State  </label>
                                       <select id="state_id" name="state_id" required="required" class="form-control">
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
                                       <input type="text" id="parent_email" name="parent_email" class="form-control" placeholder="Parents eMail id">
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
                                       <label class="control-label">Student Name</label> : <span id="step3_sname"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-4" id="afees">
                                    
                                 </div>
                                 <div class="col-md-4">
                                   
                                 </div>
                                 <div class="col-md-12">
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-4">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label">Student Name</label> : <span id="step4_sname"></span>
                                    </div>
                                 </div>
                              <div class="col-md-12">
                                    <div class="form-group">
                                                                      <label class="control-label" for="stuTransportOpted">Transport </label>
                                                                      <div class="clearfix"></div>
                                                                      <div class="i-checks in-block">
                                                                          <input id="transport_opted" type="radio" value="Yes" name="transport_opted" class="radio-template" onClick="getroutes('Yes')">
                                                                          <label for="transport_opted">Yes</label>
                                                                      </div>
                                                                      <div class="i-checks in-block">
                                                                          <input id="transport_opted" type="radio" value="No" name="transport_opted"  checked class="radio-template tmpend" onClick="getroutes('No')">
                                                                          <label for="stuTransportOpted2">No</label>
                                                                      </div>
                                                                  </div>
                                    </div> 
                                 
                              
                                <div id="transport">
								</div> 
                                
                                 <div class="col-md-12">
                                   <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-5">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label">Student Name</label> : <span id="step5_sname"></span>
                                    </div>
                                 </div>
                                 <div class="cleafix"></div>
                                 <div class="col-md-3">
								 <div class="form-group">
                                                                      <label class="control-label" for="stuTransportOpted">Hostel </label>
                                                                      <div class="clearfix"></div>
                                                                      <div class="i-checks in-block">
                                                                          <input id="hostel_opted" type="radio" value="Yes" name="hostel_opted" class="radio-template" onClick="gethostels('Yes')">
                                                                          <label for="transport_opted">Yes</label>
                                                                      </div>
                                                                      <div class="i-checks in-block">
                                                                          <input id="hostel_opted" type="radio" value="No" name="hostel_opted"  checked class="radio-template tmpend" onClick="gethostels('No')">
                                                                          <label for="stuTransportOpted2">No</label>
                                                                      </div>
                                                                  </div>
                                    </div> 
                                 
                              
                                <div id="hostel">
								</div> 
                                    
                                 <div class="col-md-12">
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                 </div>
                              </div>
                              <div class="row setup-content" id="step-6">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label">Student Name</label> : <span id="step6_sname"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-12 text-center">
                                    <button class="btn btn-success btn-lg pull-right" type="submit">Save & Send for Approval</button>
                                 </div>
                                 <!-- Modal-->
                                 <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                    <div role="document" class="modal-dialog modal-lg">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h4 id="exampleModalLabel" class="modal-title">Staff Details</h4>
                                             <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
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
					  //alert(curInputs[i].name);
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
         
                if (isValid)
				{
				   if(curStepBtn=="step-1")
				   {
				       $("#step2_sname").html($("#first_name").val()+" "+$("#last_name").val());
					   $("#stuFname").val($("#middle_name").val());
					    $("#stuMname").val($("#mother_name").val());
				   }
				   else  if(curStepBtn=="step-2")
				   {
				    $("#step3_sname").html($("#first_name").val()+" "+$("#last_name").val());
				   getafees();
				   }
				    else  if(curStepBtn=="step-3")
				   {
				    $("#step4_sname").html($("#first_name").val()+" "+$("#last_name").val());
				   
				   }
				    else  if(curStepBtn=="step-4")
				   {
				    $("#step5_sname").html($("#first_name").val()+" "+$("#last_name").val());
				   
				   }
				    else  if(curStepBtn=="step-5")
				   {
				    $("#step6_sname").html($("#first_name").val()+" "+$("#last_name").val());
				   
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
function getafees() {
  var xhttp = new XMLHttpRequest();
  var course_id=document.getElementById("course_id").value;
   var year=document.getElementById("year").value;
    var category_id=document.getElementById("category_id").value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("afees").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getacademic_fees.php?category_id="+category_id+"&course_id="+course_id+"&year="+year, true);
  xhttp.send();
}

function getroutes(transport_opted) {
if(transport_opted=="Yes")
{
  var xhttp = new XMLHttpRequest();
  
 
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("transport").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getbus_routes.php", true);
  xhttp.send();
  }
  else
  {
     document.getElementById("transport").innerHTML ="";
  }
}
function getrfees() {
  var xhttp = new XMLHttpRequest();
  var bus_route_id=document.getElementById("bus_route_id").value;
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("transport_fees").value =
      this.responseText;
    }
  };
  xhttp.open("GET", "getbus_fees.php?bus_route_id="+bus_route_id, true);
  xhttp.send();
}
function gethostels(hostel_opted) {
if(hostel_opted=="Yes")
{
  var xhttp = new XMLHttpRequest();
  
 
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("hostel").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "gethostel_details.php", true);
  xhttp.send();
  }
  else
  {
     document.getElementById("hostel").innerHTML ="";
  }
}
function gethfees() {
  var xhttp = new XMLHttpRequest();
  var hostel_id=document.getElementById("hostel_id").value;
  var hostel_option=document.getElementById("hostel_option").value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("hostel_fees").value =
      this.responseText;
    }
  };
  xhttp.open("GET", "gethostel_fees.php?hostel_id="+hostel_id+"&hostel_option="+hostel_option, true);
  xhttp.send();
}
function selcourse() {
  var xhttp = new XMLHttpRequest();
  var course_id=document.getElementById("course_id").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("syear").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getyears.php?course_id="+course_id, true);
  xhttp.send();
}
function selyear() {
  var xhttp = new XMLHttpRequest();
    var course_id=document.getElementById("course_id").value;
var year=document.getElementById("year").value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("roll_number").value=
      this.responseText;
    }
  };
 xhttp.open("GET", "getrno.php?course_id="+course_id+"&year="+year, true);
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