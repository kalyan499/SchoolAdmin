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
				<a class="nav-link active" href="all_students.php"><i class="os-icon picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i><span>Students</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0706_user_profile_add_new"></i><span>Student Promotion</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0714_identity_card_photo_user_profile"></i><span>Student Details</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="student_payments_view.php"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Student Invoice</span></a>
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
              <a class="nav-link" href="all_students.php">Student Lists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#addNewStudent">Add New Student</a>
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
   
                           <form role="form" method="post" action="students_insert.php" enctype="multipart/form-data" id="sform">
                              <div class="row setup-content" id="step-1">
                                 <div class="col-md-6">
                                    <h4 class="ptb-20">Student Information - (Academic Year  <?php echo $_SESSION["academic_year"]; ?>)</h4>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="control-label" for="selBoard">Board</label>
                                       <select class="form-control" id="board" name="board">
                                          <option>ICSE</option>
                                          <option>CBSE</option>
                                          <option selected>STATE</option>
                                       </select>
                                    </div>
                                 </div>
                                 <!-- #section:elements.form -->
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="first_name">First Name <span class="mdfield">*</span></label>
                                       <input maxlength="100" type="text" required="required" id="first_name" name="first_name" class="form-control" placeholder="Student Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="middle_name">Middle name  </label>
                                       <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="last_name">Last name <span class="mdfield">*</span></label>
                                       <input type="text" id="last_name" name="last_name" required="required" class="form-control" placeholder="Last name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_name">Mother name <span class="mdfield">*</span></label>
                                       <input type="text" id="mother_name" name="mother_name" required="required" class="form-control" placeholder="Mother name">
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
<!-- <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control dateofbirth" required="required"> -->
                                          <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control" required="required">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuNationality">Country/Nationality</label>
                                       <select id="country_id" name="country_id" required="required" class="form-control" onChange="selcountry()">
									   <option value="">Select Country</option>
									   <?php
$sqlr="select * from countries";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["country_id"]; ?>" <?php if($rowr["country_id"]==101){ echo "selected"; } ?>><?php echo $rowr["country_name"]; ?></option>
<?php
}
?>
									   </select>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuNationality">State</label>
									   <div id="states">
                                       <select id="state_id" name="state_id" required="required" class="form-control">
									   <option value="">Select State</option>
									   <option value="0">Not In List</option>
									   <?php
$sqlr="select * from states where country_id=101";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["state_id"]; ?>" <?php if($rowr["state_id"]==17){ echo "selected"; } ?>><?php echo $rowr["state_name"]; ?></option>
<?php
}
?>
									   </select>
									   </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuReligion">Religion <span class="mdfield">*</span></label>
                                        <select id="religion_id" name="religion_id" class="col-xs-10 col-sm-12 form-control" required onChange="selreligion()">

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
                                       <label class="control-label" for="caste">Caste <span class="mdfield">*</span></label>
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
                                       <label class="control-label" for="category">Category <span class="mdfield">*</span></label>
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
                                       <label class="control-label" for="rad1">RTE <span class="mdfield">*</span></label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="rtey" type="radio" value="Yes" name="rte" class="radio-template">
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="rten" type="radio" checked="" value="No" name="rte" class="radio-template tmpend">
                                          <label for="rad2">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">Agent</label>
                                        <select class="form-control" id="agent_id" name="agent_id">
                                          <option value="">Not Applicable</option>
                                         <?php
                                           $sqlr="select * from agents";
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
                                       <label class="control-label" for="stuAddress">Student Address <span class="mdfield">*</span></label>
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
                                       <input type="text" id="email" name="email" class="form-control" placeholder="Student eMail id" ng-model="email">
                                    </div>
                                 </div>
                                
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSection">Grade Section<span class="mdfield">*</span></label>
                                       <select class="form-control" id="course_id" name="course_id"  onChange="selcourse()" required="required">
                                          <option value="">Select Grade Section</option>
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
                                       <label class="control-label" for="year">Select Grade<span class="mdfield">*</span></label>
									   <div id="syear">
                                       <select class="form-control" id="year" name="year" onChange="selyear()" required="required">
                                          <option value="">Select Grade</option>
                                         
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
                                       <label class="control-label" for="section_id">Section <span class="mdfield">*</span></label>
                                       <select class="form-control" id="section_id" name="section_id" required="required">
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
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSibling1">Sibling </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="siblingy" type="radio" value="Yes" name="sibling" class="radio-template" onClick="selsib()">
                                          <label for="stuSibling1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="siblingn" type="radio" checked="" value="No" name="sibling" class="radio-template tmpend"  onClick="selsib1()">
                                          <label for="stuSibling2">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3" style="display:none" id="selsib">
                                    <div class="form-group">
                                       <label class="control-label" for="admission_number">Select Sibling</label>
                                       <input type="hidden" id="sibling_id" name="sibling_id" />
                                       <div id="sname">
                                      
                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-md-3">
								  <div class="card-body text-center">
                      <div class="client-avatar"><img id="output_image" src="../img/avatar-2.jpg" alt="..." width="130">
                        <div class="status bg-green"></div>
                      </div>
                      <div class="client-title">
                       
                      </div> 
                     
                    </div>
                                 </div>
                                 <div class="col-md-4 offset-8">
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
                                       <label class="control-label" for="stuFname">Parent/Gaurdian Name <span class="mdfield">*</span></label>
                                       <input type="text" id="stuFname" name="stuFname" required="required" class="form-control" placeholder="Parent/Gaurdian Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuFatherOccupation">Father Occupation</label>
                                       <input type="text" id="father_occupation" name="father_occupation" class="form-control" placeholder="Father Occupation">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMothername">Mother Name <span class="mdfield">*</span></label>
                                       <input type="text" id="stuMname" name="stuMname" required="required" class="form-control" placeholder="Mother Name">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMotherOccupation">Mother Occupation</label>
                                       <input type="text" id="mother_occupation" class="form-control" placeholder="Mother Occupation">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuPaddress">Permanent Contact Address <span class="mdfield">*</span></label>
                                       <input type="text" id="permenant_address" name="permenant_address" required="required" class="form-control" placeholder="Permanent Address">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuParentMobileno"> Mobile Number <span class="mdfield">*</span> </label>
                                       <input type="text" id="parent_mobile" name="parent_mobile" required="required" class="form-control" placeholder="Mobile Number ">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmrcno">Emergency Contact Number <span class="mdfield">*</span> </label>
                                       <input type="text" id="emergency_contact_number" name="emergency_contact_number" required="required" class="form-control" placeholder="Emergency Contact Number ">
                                    </div>
                                 </div>
                                      <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuNationality">Country/Nationality</label>
                                       <select id="parent_country_id" name="parent_country_id" required="required" class="form-control" onChange="selpcountry()">
									   <option value="">Select Country</option>
									   <?php
$sqlr="select * from countries";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["country_id"]; ?>" <?php if($rowr["country_id"]==101){ echo "selected"; } ?>><?php echo $rowr["country_name"]; ?></option>
<?php
}
?>
									   </select>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuNationality">State</label>
									   <div id="states">
                                       <select id="parent_state_id" name="parent_state_id" required="required" class="form-control">
									   <option value="">Select State</option>
									   <option value="0">Not In List</option>
									   <?php
$sqlr="select * from states where country_id=101";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["state_id"]; ?>" <?php if($rowr["state_id"]==17){ echo "selected"; } ?>><?php echo $rowr["state_name"]; ?></option>
<?php
}
?>
									   </select>
									   </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="parentsEmailid">Parents eMail id  </label>
                                       <input type="text" id="parent_email" name="parent_email" class="form-control" placeholder="Parents eMail id">
                                    </div>
                                 </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="student_photo">Upload Parent Photo</label>
                                       <div class="card">
                                          <input id="parent_photo" name="parent_photo" type="file" class="form-control-file" accept="image/*" >
                                       </div>
                                    </div>
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
<div class="col-md-12">
                                 <div class="row" id="afees">
                                    
                                 </div>
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
                                 
                              <div class="col-md-12">
                                <div class="row" id="transport">
								</div> 
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
                                 
                              <div class="col-md-12">
                                <div class="row" id="hostel">
								</div> 
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
                                    <button class="btn btn-success btn-lg pull-right" type="button" onClick="sform()">Save & Send for Approval</button>
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

  <?php include("scripts1.php"); ?>
   <script>
   function sform()
   {
       var xhttp = new XMLHttpRequest();
    var course_id=document.getElementById("course_id").value;
var year=document.getElementById("year").value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("roll_number").value=
      this.responseText;
      document.getElementById("sform").submit();
    }
  };
 xhttp.open("GET", "getrno.php?course_id="+course_id+"&year="+year, true);
  xhttp.send();
  
   }
   
   function calcatot()
{
  
   var fees=document.getElementsByClassName("afees");
  
   var tot_fees=0;
 
   for (i = 0; i < fees.length; i++) {
      tot_fees+=parseInt(fees[i].value);
    
    }
	document.getElementById("afeestot").value=tot_fees;
		
}
   function selsib()
   {
      document.getElementById("sname").innerHTML="<input type=\"text\"  id=\"sibling_name\" name=\"sibling_name\" class=\"form-control\" placeholder=\"Click to Select Sibling\" onClick=\"openWindow('search_students.php');\" required=\"required\">";
      document.getElementById("selsib").style="display:block";
      
   }
   function selsib1()
   {
   document.getElementById("sname").innerHTML="";
      document.getElementById("selsib").style="display:none";
   }
   
   function openWindow(url)
{
	var h = 800;
	var w = 850;
	var winl = (screen.width-w)/2;
	var wint = (screen.height-h)/2;
	NewWin=window.open(url,'NewWin','toolbar=no,status=no, width='+w+', height='+h+', scrollbars=1, top='+wint+', left='+winl);
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
	var rte="No";
 if(document.getElementById("rtey").checked)
   rte="Yes";
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("afees").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getacademic_fees.php?category_id="+category_id+"&course_id="+course_id+"&year="+year+"&rte="+rte, true);
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

function selpcountry() {
  var xhttp = new XMLHttpRequest();
  var country_id=document.getElementById("parent_country_id").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("parent_state_id").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getstates.php?country_id="+country_id, true);
  xhttp.send();
}
function selreligion() {
  var xhttp = new XMLHttpRequest();
  var religion_id=document.getElementById("religion_id").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("caste_id").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getcastes.php?religion_id="+religion_id, true);
  xhttp.send();
}

function selyear() {
 
	  getrno();
   
}
function getrno() {
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