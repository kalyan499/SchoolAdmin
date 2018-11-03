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
                                    <p>Admission Details</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Student Details</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                    <p>Contact Details</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                    <p>Student Bank Details</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                    <p>Academic Fees</p>
                                 </div>
                                 <div class="stepwizard-step">
                                    <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                                    <p>Final Summary</p>
                                 </div>
                              </div>
                           </div>
   
                           <form role="form" method="post" action="students_insert.php" enctype="multipart/form-data" id="sform">
                              <div class="row setup-content" id="step-1">
                                 <div class="col-md-9">
                                    <h4 class="ptb-20">Student Information - (Academic Year  <?php echo $_SESSION["academic_year"]; ?>)</h4>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Admission Date<span class="mdfield">*</span></label>
                                       <div class="input-group date">
<!-- <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control dateofbirth" required="required"> -->
<input type="text" style="visibility:hidden; width:1px; height:1px;" />                                        
  <input  id="admission_date" name="admission_date" type="text"  placeholder="dd-mm-yyyy" class="form-control" required="required">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="instruction_medium">Medium of Instruction<span class="mdfield">*</span></label>
                                       <select class="form-control" id="instruction_medium" name="instruction_medium"  required="required">
                                          <option value="">Select Medium of Instruction</option>
										
                                         <option>ENGLISH</option>
                                       <option>HINDI</option>
									   <option>KANNADA</option>
									   <option>URDU</option>
                                       </select>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_tounge_id">Mother Tounge<span class="mdfield">*</span></label>
                                       <select class="form-control" id="mother_tounge_id" name="mother_tounge_id"  required="required">
                                          <option value="">Select Mother Tounge</option>
										
                                        <?php
                                           $sqlr="select * from mother_tounges";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["mother_tounge_id"]; ?>"><?php echo $rowr["mother_tounge_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
                                       </select>
                                    </div>
                                 </div>
								
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="lang_group">Language Group<span class="mdfield">*</span></label>
                                      <!-- <input type="text" class="form-control" id="lang_group" name="lang_group"  required="required" placeholder="Language Group"/> -->
<select class="form-control" id="lang_group" name="lang_group"  required="required">
                                          <option value="">Select Language Group</option>						
<option value="EM_Eng_Kan_Hin">EM_Eng_Kan_Hin</option>
<option value="EM_Eng_Kan">EM_Eng_Kan</option>
<option value="Other">Other</option>				
                                        
                                       </select>
                                         
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
								 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">Previous School Details?</label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="dey" type="radio" value="Yes" name="de" class="radio-template"  onClick="getedetails('Yes')">
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="den" type="radio"  value="No" name="de" class="radio-template tmpend"  checked="" onClick="getedetails('No')">
                                          <label for="rad2">No</label>
                                       </div>
                                    </div>
                                 </div>
								  
<div id="edetails" style="display:none">

                                <div class="col-md-3">
<div class="form-group">
<label class="control-label" for="previous_school_affiliation">Previous School Affiliation<span class="mdfield">*</span></label>
<select class="form-control" id="previous_school_affiliation" name="previous_school_affiliation">

 <option value="">Select Previous School Affiliation</option>
  <option>ICSE</option>
                                          <option>CBSE</option>
                                          <option>STATE</option>
										  <option>Other</option>
</select>
  </div>
</div>
 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="transfer_certificate_number">Transfer Certificate No</label>
                                       <input type="text" id="transfer_certificate_number" name="transfer_certificate_number" class="form-control" placeholder="Transfer Cirtificate No" >
                                    </div>
                                 </div>
<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Transfer Certificate Date <span class="mdfield">*</span></label>
                                       <div class="input-group date">
<!-- <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control dateofbirth" required="required"> -->
                                          <input  id="transfer_certificate_date" name="transfer_certificate_date" type="text"  placeholder="dd-mm-yyyy" class="form-control">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_name">Previous School Name</label>
        <input type="text" id="previous_school_name" name="previous_school_name" class="form-control" placeholder="Previous School Name">
</div>
</div>
<div class="clearfix"></div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_type">Previous School Type</label>
<select class="form-control" id="previous_school_type" name="previous_school_type">

 <option value="">Select Previous School Type</option>
   <option title="Javahar Navodaya Vidyalaya">Javahar Navodaya Vidyalaya</option>
                                                                        <option title="Kendriya Vidyalay / Central Schools">Kendriya Vidyalay / Central Schools</option>
                                                                        <option title="Sainik Schools">Sainik Schools</option>
                                                                        <option title="Social Welfare Department Schools">Social Welfare Department Schools</option>
                                                                        <option title="Ministry of Labor">Ministry of Labor</option>
                                                                        <option title="All Management">All Management</option>
                                                                        <option title="Department of Education">Department of Education</option>
                                                                        <option title="Tribal Welfare Department Schools">Tribal Welfare Department Schools</option>
                                                                        <option title="Local body">Local body</option>
                                                                        <option title="Pvt. Aided">Pvt. Aided</option>
                                                                        <option title="Pvt. Unaided">Pvt. Unaided</option>
                                                                        <option title="Others State Govt. Managed Schools">Others State Govt. Managed Schools</option>
                                                                        <option title="Railway Schools">Railway Schools</option>
                                                                        <option title="Un-Recognised">Un-Recognised</option>
                                                                        <option title="Madarsa recognized (by Wakf board/Madarsa Board)">Madarsa recognized (by Wakf board/Madarsa Board)</option>
                                                                        <option title="Madarsa unrecognized">Madarsa unrecognized</option>
                                                                        <option title="Central Tibatin Schools">Central Tibatin Schools</option>
</select>
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_address">Previous School Address</label>
        <input type="text" id="previous_school_address" name="previous_school_address"   class="form-control" placeholder="Previous School Address">
</div>
</div>
<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="previous_school_district_id">District</label>
                                       <select id="previous_school_district_id" name="previous_school_district_id" class="form-control" onChange="selpschooldistrict()">
									   <option value="">Select District</option>
									   <option value="0">Not In List</option>
									   <?php
$sqlr="select * from districts";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["district_id"]; ?>"><?php echo $rowr["district_name"]; ?></option>
<?php
}
?>
									   </select>
                                    </div>
                                 </div>
<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="pschooltaluk_id">Taluk</label>
									   <div id="taluks">
                                       <select id="previous_school_taluk_id" name="previous_school_taluk_id" class="form-control" onChange="selpschooltaluk()">
									   <option value="">Select Taluk</option>
									   <option value="0">Not In List</option>
									   <?php
$sqlr="select * from taluks";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["taluk_id"]; ?>"><?php echo $rowr["taluk_name"]; ?></option>
<?php
}
?>
									   </select>
									   </div>
                                    </div>
                                 </div>
<div class="clearfix"></div>
	<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_city_id">City/Village/Town</label>
        <select id="previous_school_city_id" name="previous_school_city_id"   class="form-control" onChange="selpschoolcity()">
        <option value="">Select City/Village/Town</option>
	<option value="0">Not In List</option>
	
        </select>
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_pincode">Pincode</label>
        <input type="text" id="previous_school_pincode" name="previous_school_pincode"   class="form-control" placeholder="Previous School Pincode"  onblur="selpschoolpincode()">
</div>
</div>                                 
   <div class="clearfix"></div>
   </div>                               
				
                                 <div class="col-md-4 offset-8">
<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                 </div>
								 
                                 
                              </div>
                              <div class="row setup-content" id="step-2">
							  <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" for="selBoard">Board</label>
                                       <select class="form-control" id="board" name="board">
                                          <option>ICSE</option>
                                          <option selected>CBSE</option>
                                          <option>STATE</option>
                                       </select>
                                    </div>
                                 </div>
                                 <!-- #section:elements.form -->
								  <div class="col-md-12">
                                    <h5 class="ptb-10">
                                       Student Name:
                                    </h5>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="first_name">First Name <span class="mdfield">*</span></label>
                                       <input maxlength="100" type="text" required="required" id="first_name" name="first_name" class="form-control" placeholder="Student Name">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="middle_name">Middle name  </label>
                                       <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle name">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="last_name">Last name </label>
                                       <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name">
                                    </div>
                                 </div>
								   <div class="col-md-12">
                                    <h5 class="ptb-10">
                                       Father Name:
                                    </h5>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="father_first_name">First Name <span class="mdfield">*</span></label>
                                       <input maxlength="100" type="text" required="required" id="father_first_name" name="father_first_name" class="form-control" placeholder="Father Name">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="father_middle_name">Middle name  </label>
                                       <input type="text" id="father_middle_name" name="father_middle_name" class="form-control" placeholder="Middle name">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="father_last_name">Last name </label>
                                       <input type="text" id="father_last_name" name="father_last_name" class="form-control" placeholder="Last name">
                                    </div>
                                 </div>
								   <div class="col-md-12">
                                    <h5 class="ptb-10">
                                       Mother Name:
                                    </h5>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_first_name">First Name <span class="mdfield">*</span></label>
                                       <input maxlength="100" type="text" required="required" id="mother_first_name" name="mother_first_name" class="form-control" placeholder="Mother Name">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_middle_name">Middle name  </label>
                                       <input type="text" id="mother_middle_name" name="mother_middle_name" class="form-control" placeholder="Middle name">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_last_name">Last name </label>
                                       <input type="text" id="mother_last_name" name="mother_last_name" class="form-control" placeholder="Last name">
                                    </div>
                                 </div>
                                
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="gender">Gender </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="gender" type="radio" value="Male" name="gender" class="radio-template" required="required">
                                          <label for="rad1">Male</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="gender" type="radio"  value="Female" name="gender" class="radio-template tmpend" required="required" checked>
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
                                       <label class="control-label" for="place_of_birth">Place of Birth <span class="mdfield">*</span></label>
                                       <input type="text" id="place_of_birth" name="place_of_birth" required="required" class="form-control" placeholder="Place of Birth">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="age_reason">Age Reason</label>
                                       <input type="text" id="age_reason" name="age_reason" class="form-control" placeholder="Age Reason">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="blood_group">Blood Group</label>
                                       <select class="form-control" id="blood_group" name="blood_group">
									   <option value="">Select Blood Group</option>
                                          <option>A+ve</option>
                                          <option>A-ve</option>
                                          <option>B+ve</option>
                                          <option>B-ve</option>
										   <option>AB+ve</option>
                                          <option>AB-ve</option>
										   <option>O+ve</option>
                                          <option>O-ve</option>
                                       </select>
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
                                       <label class="control-label" for="rad1">Child Admitted to RTE Quota </label>
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
                                       <label class="control-label" for="category">Social Category <span class="mdfield">*</span></label>
                                       <select id="category_id" name="category_id" class="col-xs-10 col-sm-12 form-control" required onchange="selcat()">

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
								
                                  <div class="col-md-3"  style="display:none" id="selobc">
                                    <div class="form-group">
                                       <label class="control-label" for="caste">OBC Sub Caste <span class="mdfield">*</span></label>
                                       <select id="obc_sub_caste_id" name="obc_sub_caste_id" class="col-xs-10 col-sm-12 form-control" required  onchange="selobc()">

	   <option value="">Select OBC Sub Caste</option>
<?php
$sqlr="select * from obc_sub_castes";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["obc_sub_caste_id"]; ?>"><?php echo $rowr["obc_sub_caste_name"]; ?></option>
<?php
}
?>
</select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="caste">Student Caste </label>
                                       <select id="caste_id" name="caste_id" class="col-xs-10 col-sm-12 form-control">

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
                                       <label class="control-label" for="father_caste_id">Father Caste </label>
                                       <select id="father_caste_id" name="father_caste_id" class="col-xs-10 col-sm-12 form-control">

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
                                       <label class="control-label" for="mother_caste_id">Mother Caste </label>
                                       <select id="mother_caste_id" name="mother_caste_id" class="col-xs-10 col-sm-12 form-control">

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
                                       <label class="control-label" for="student_caste_certificate_number">Student Caste Certificate No</label>
                                       <input type="text" id="student_caste_certificate_number" name="student_caste_certificate_number" class="form-control" placeholder="Student Caste Certificate No">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_caste_certificate_number">Father Caste Certificate No</label>
                                       <input type="text" id="father_caste_certificate_number" name="father_caste_certificate_number" class="form-control" placeholder="Father Caste Certificate No">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_caste_certificate_number">Mother Caste Certificate No</label>
                                       <input type="text" id="mother_caste_certificate_number" name="mother_caste_certificate_number" class="form-control" placeholder="Mother Caste Certificate No">
                                    </div>
                                 </div>
                              
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAdhaarno">Student Adhaar UID No</label>
                                       <input type="text" id="aadhar_number" name="aadhar_number" class="form-control" placeholder="Student Adhaar No">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_aadhar_number">Father Adhaar UID No</label>
                                       <input type="text" id="father_aadhar_number" name="father_aadhar_number" class="form-control" placeholder="Father Adhaar No">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_aadhar_number">Mother Adhaar UID No</label>
                                       <input type="text" id="mother_aadhar_number" name="mother_aadhar_number" class="form-control" placeholder="Mother Adhaar No">
                                    </div>
                                 </div>
<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="bhagyalakshmi_bond_number">Bhagyalakshmi Bond No</label>
                                       <input type="text" id="bhagyalakshmi_bond_number" name="bhagyalakshmi_bond_number" class="form-control" placeholder="Bhagyalakshmi Bond No">
                                    </div>
                                 </div>	
                                  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="special_category">Special Category</label>
                                       <select class="form-control" id="special_category" name="special_category">
									   <option value="">Select Special Category</option>
                                          <option>Destitute</option>
                                          <option>HIV Case</option>
                                          <option>Orphans</option>
										   <option>Other</option>
                                       </select>
                                    </div>
                                 </div>			
<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">Belongs to BPL</label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="bply" type="radio" value="Yes" name="bpl" class="radio-template" onClick="selbpl('Yes')">
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="bpln" type="radio" checked="" value="No" name="bpl" class="radio-template tmpend" onClick="selbpl('No')">
                                          <label for="rad2">No</label>
                                       </div>
                                    </div>
                                 </div>
								  <div class="col-md-3"  style="display:none" id="selbpl">
                                    <div class="form-group">
                                       <label class="control-label" for="bpl_card_number">BPL Card Number <span class="mdfield">*</span></label>
                                       <input type="text" id="bpl_card_number" name="bpl_card_number" class="form-control" placeholder="BPL Card Number">
                                    </div>
                                 </div>
								 
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">Child With Special Need </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="childsny" type="radio" value="Yes" name="child_special_need" class="radio-template" onClick="selcspecial('Yes')">
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="childsnn" type="radio" checked="" value="No" name="child_special_need" class="radio-template tmpend" onClick="selcspecial('No')">
                                          <label for="rad2">No</label>
                                       </div>
                                    </div>
                                 </div>
								 <div class="col-md-3"  style="display:none" id="selcspecial">
                                    <div class="form-group">
                                       <label class="control-label" for="special_need">Special Need</label>
                                       <select class="form-control" id="special_need" name="special_need">
									   <option value="">Select Special Need</option>
                                          <option>Visual Impairment (Blindness)</option>
<option>Visual Impairment (Low-vision)</option>
<option>Hearing Imparement (Deaf and Hard of Hearing)</option>
<option>Speech and Language Disability</option>
<option>Loco motor impairment</option>
<option>Mental Illness</option>
<option>Specific Learning Disability</option>
<option>Cerebral Palsy</option>
<option>Autism Spectrum Disorder</option>
<option>Multiple Disabilities including Deaf Blindness</option>
<option>Leprosy Cured Persons</option>
<option>Dwarfism</option>
<option>Intellectual Disability</option>
<option>Muscular Dystrophy</option>
<option>Chronic Neurological Conditios</option>
<option>Multiple Sclerosis</option>
<option>Thalassemia</option>
<option>Hemophilia</option>
<option>Sickle Cell Disease</option>
<option>Acid Attack Victim</option>
<option>Parkinsons Disease</option>
<option>Not Applicable</option>
                                       </select>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">BMTC Bus Pass Request</label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="bmtcbusy" type="radio" value="Yes" name="bmtcbus" class="radio-template">
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="bmtcbusn" type="radio" checked="" value="No" name="bmtcbus" class="radio-template tmpend">
                                          <label for="rad2">No</label>
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
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="permenant_address">Address <span class="mdfield">*</span></label>
                                       <input type="text" id="permenant_address" name="permenant_address" required="required" class="form-control" placeholder="Student Address">
                                    </div>
                                 </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="district_id">District</label>
                                       <select id="district_id" name="district_id" required="required" class="form-control" onChange="seldistrict()">
									   <option value="">Select District</option>
									   <?php
$sqlr="select * from districts";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["district_id"]; ?>"><?php echo $rowr["district_name"]; ?></option>
<?php
}
?>
									   </select>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="taluk_id">Taluk</label>
									   <div id="taluks">
                                       <select id="taluk_id" name="taluk_id" required="required" class="form-control" onChange="seltaluk()">
									   <option value="">Select Taluk</option>
									   <option value="0">Not In List</option>
									   <?php
$sqlr="select * from taluks";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["taluk_id"]; ?>"><?php echo $rowr["taluk_name"]; ?></option>
<?php
}
?>
									   </select>
									   </div>
                                    </div>
                                 </div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="city_id">City/Village/Town</label>
         <select id="city_id" name="city_id"   class="form-control" onChange="selcity()" required>
        <option value="">Select City/Village/Town</option>
	<option value="0">Not In List</option>
	
        </select>
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="locality">Locality</label>
        <input type="text" id="locality" name="locality"   class="form-control" placeholder="Locality">
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="pincode">Pincode</label>
        <input type="text" id="pincode" name="pincode"   class="form-control" placeholder="Pincode" onblur="selpincode()">
</div>
</div>
<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Student eMail id</label>
                                       <input type="email" id="email" name="email" class="form-control" placeholder="Student eMail id" ng-model="email">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="single_parent">Single Parent</label>
                                       <select id="single_parent" name="single_parent" class="form-control">
									     
									   <option>NA</option>
									   <option>Father</option>
									   <option>Mother</option>
									  
									    </select>
                                    </div>
                                 </div>
								 
								 
								   <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_mobile"> Father Mobile Number <span class="mdfield">*</span> </label>
                                       <input type="text" id="father_mobile" name="father_mobile" required="required" class="form-control" placeholder="Father Mobile Number ">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_email">Father eMail id  </label>
                                       <input type="email" id="father_email" name="father_email" class="form-control" placeholder="Father eMail id">
                                    </div>
                                 </div>
								 
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_education">Father Education</label>
                                       <select id="father_education" name="father_education" class="form-control" >
									   <option value="">Select Father Education</option>
									   <option>Post Graduate</option>
									   <option>Graduate</option>
									   <option>Senior Seconday</option>
									   <option>Xth</option>
									   <option>Other</option>
									   </select>
                                    </div>
                                 </div>
								 
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_occupation">Father Occupation  </label>
                                       <input type="text" id="father_occupation" name="father_occupation" class="form-control" placeholder="Father Occupation">
                                    </div>
                                 </div>
								 
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_mobile"> Mother Mobile Number </label>
                                       <input type="text" id="mother_mobile" name="mother_mobile" class="form-control" placeholder="Mother Mobile Number ">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_email">Mother eMail id  </label>
                                       <input type="email" id="mother_email" name="mother_email" class="form-control" placeholder="Mother eMail id">
                                    </div>
                                 </div>
                                
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_education">Mother Education</label>
                                       <select id="mother_education" name="mother_education" class="form-control">
									     <option value="">Select Mother Education</option>
									    <option>Post Graduate</option>
									   <option>Graduate</option>
									   <option>Senior Seconday</option>
									   <option>Xth</option>
									   <option>Other</option>
									    </select>
                                    </div>
                                 </div>
                                 
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_occupation"> Mother Occupation </label>
                                       <input type="text" id="mother_occupation" name="mother_occupation" class="form-control" placeholder="Mother Occupation">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="father_annual_income">Father Annual Income  </label>
                                       <input type="text" id="father_annual_income" name="father_annual_income" class="form-control" placeholder="Father Annual Income">
                                    </div>
                                 </div>
								  <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_annual_income"> Mother Annual Income </label>
                                       <input type="text" id="mother_annual_income" name="mother_annual_income" class="form-control" placeholder="Mother Annual Income">
                                    </div>
                                 </div>
								  <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="sms_mobile_number"> SMS Mobile Number </label>
                                       <select id="sms_mobile_number" name="sms_mobile_number" class="form-control" placeholder="SMS Mobile Number ">
									     <option value="">Select SMS Mobile Number</option>
										 <option>Father Mobile Number</option>
										 <option>Mother Mobile Number</option>
										 <option>Gaurdian Mobile Number</option>
									   </select>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSibling1">Child Sponsored </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="sponsoredy" type="radio" value="Yes" name="sponsored" class="radio-template" onClick="selsponsor('Yes')">
                                          <label for="stuSibling1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="sponsoredn" type="radio" checked="" value="No" name="sponsored" class="radio-template tmpend"  onClick="selsponsor('No')">
                                          <label for="stuSibling2">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3" style="display:none" id="selsponsor">
                                    <div class="form-group">
                                       <label class="control-label" for="sponsoring_agency">Select Sponsor</label>
                                       <input type="text" id="sponsoring_agency" name="sponsoring_agency"  class="form-control"/>
                                       <div id="sname">
                                      
                                       </div>
                                    </div>
                                 </div>
								  <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSibling1">Residing With Guardian </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="rgaurdiany" type="radio" value="Yes" name="guardian" class="radio-template" onClick="selguardian('Yes')">
                                          <label for="stuSibling1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="rgaurdiann" type="radio" checked="" value="No" name="guardian" class="radio-template tmpend"  onClick="selguardian('No')">
                                          <label for="stuSibling2">No</label>
                                       </div>
                                    </div>
                                 </div>
								  <div class="col-md-12">
                                <div class="row" id="gdetails">
								</div> 
</div> 
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="student_photo">Upload Student Photo</label>
                                       <div class="card mb-0">
                                          <input id="student_photo" name="student_photo" type="file" class="form-control-file" accept="image/*" onchange="preview_image(event)">
                                       </div>
                    <div class="card-body text-center">
                      <div class="client-avatar"><img id="output_image" src="../img/avatar-2.jpg" alt="..." width="130" height:180>
                        <div class="status bg-green"></div>
                      </div></div>
                                    </div>
                                 </div>
								
                                <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="student_photo">Upload Father Photo</label>
                                       <div class="card mb-0">
                                          <input id="father_photo" name="father_photo" type="file" class="form-control-file" accept="image/*" onchange="preview_image_father(event)">
                                       </div>
<div class="card-body text-center">
                      <div class="client-avatar"><img id="output_image_father" src="../img/avatar-2.jpg" alt="..." width="130" height:180>
                        <div class="status bg-green"></div>
                      </div></div>
                                    </div>

                                    </div>
                                 
								    <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="student_photo">Upload Mother Photo</label>
                                       <div class="card mb-0">
                                          <input id="mother_photo" name="mother_photo" type="file" class="form-control-file" accept="image/*" onchange="preview_image_mother(event)">
                                       </div>
<div class="card-body text-center">
                      <div class="client-avatar"><img id="output_image_mother" src="../img/avatar-2.jpg" alt="..." width="130" height:180>
                        <div class="status bg-green"></div>
                      </div></div>
                                    </div>

                                    </div>
                                 
<div class="col-md-3">
                                    <div class="form-group">
                                        
                                       
                                    </div>
                                 </div>

				
                                 <div class="col-md-3"></div>
                                 <div class="col-md-3"></div>

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
                             <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="bank_name">Bank Name</label>
                                       <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Bank Name">
                                    </div>
                                 </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="bank_account_number">Bank A/c No</label>
                                       <input type="text" id="bank_account_number" name="bank_account_number" class="form-control" placeholder="Bank A/c No">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="bank_ifsc_code">Bank IFSC Code</label>
                                       <input type="text" id="bank_ifsc_code" name="bank_ifsc_code" class="form-control" placeholder="Bank IFSC Code">
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
								 <div class="col-md-12">
                                 <div class="row" id="afees">
                                    
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
                                    <button class="btn btn-success pull-right" type="button" onClick="sform()"><i class="fa fa-save"></i> Save Student</button>
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
     openWindow('search_students.php');
	  document.getElementById("selsib").style="display:block";
      
   }
   function selsib1()
   {
   document.getElementById("sname").innerHTML="";
      document.getElementById("selsib").style="display:none";
   }
   
    function selcspecial(special_opted) {
if(special_opted=="Yes")
{
   
      document.getElementById("selcspecial").style="display:block";
	  document.getElementById("special_need").required=true;
	  }
	  else
	  {
	  document.getElementById("selcspecial").style="display:none";
	   document.getElementById("special_need").required=false;
	  }
   }
       function selsponsor(sponsor_opted) {
if(sponsor_opted=="Yes")
{
   
      document.getElementById("selsponsor").style="display:block";
	  }
	  else
	  {
	  document.getElementById("selsponsor").style="display:none";
	  }
   }
   
   
   function selbpl(bpl_opted) {
   document.getElementById("bpl_card_number").innerHTML="";
if(bpl_opted=="Yes")
{
   
   
      document.getElementById("selbpl").style="display:block";
	  }
	   else
	  {
	  document.getElementById("selbpl").style="display:none";
	  }
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
                    curInputs = curStep.find("input[type='text'],input[type='email'],input[type='url'],select,input[type='radio'],input[type='date']"),
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
				       
				   }
				   else  if(curStepBtn=="step-2")
				   {
				    $("#step3_sname").html($("#first_name").val()+" "+$("#last_name").val());
				  
				   }
				    else  if(curStepBtn=="step-3")
				   {
				    $("#step4_sname").html($("#first_name").val()+" "+$("#last_name").val());
				   
				   }
				    else  if(curStepBtn=="step-4")
				   {
				    $("#step5_sname").html($("#first_name").val()+" "+$("#last_name").val());
				    getafees();
				   }
				   
                    nextStepWizard.removeAttr('disabled').trigger('click');
				}
            });
         
            $('div.setup-panel div a.btn-primary').trigger('click');
         
         });
      </script>
<Script>

window.onload = function () {
        document.getElementById('instruction_medium').focus();
    };

</Script>
	  <script>
  $('#admission_date').datepicker({ 
            format: "dd MM yyyy", 
            todayHighlight: true
        }).datepicker("setDate", "0");
	  </script>
<script>
function selpschooldistrict(){
 var xhttp = new XMLHttpRequest();
  var previous_school_district_id=document.getElementById("previous_school_district_id").value;
 

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("previous_school_taluk_id").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "gettaluks.php?district_id="+previous_school_district_id, true);
  xhttp.send();

}


function selpschooltaluk(){
 var xhttp = new XMLHttpRequest();
  var previous_school_taluk_id=document.getElementById("previous_school_taluk_id").value;
 

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("previous_school_city_id").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "getcity.php?taluk_id="+previous_school_taluk_id, true);
  xhttp.send();

}


function selpschoolcity(){
 var xhttp = new XMLHttpRequest();
  var previous_school_city_id=document.getElementById("previous_school_city_id").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("previous_school_pincode").value=this.responseText;
    }
  };
  xhttp.open("GET", "getpcode.php?city_id="+previous_school_city_id, true);
  xhttp.send();

}

function selpschoolpincode(){
var xhttp = new XMLHttpRequest();
  var previous_school_pincode=document.getElementById("previous_school_pincode").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var res=this.responseText;
        res=res.split("$$");
      document.getElementById("previous_school_district_id").value =res[0];
       seldistrict2(res[0],res[1])
     
      seltaluk2(res[1],res[2])
    }
  };
  xhttp.open("GET", "getdtv.php?pcode="+previous_school_pincode, true);
  xhttp.send();

}
function seldistrict2(district_id,taluk_id){
 var xhttp = new XMLHttpRequest();
  
 

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("previous_school_taluk_id").innerHTML =this.responseText;
       document.getElementById("previous_school_taluk_id").value =taluk_id;
    }
  };
  xhttp.open("GET", "gettaluks.php?district_id="+district_id, true);
  xhttp.send();

}


function seltaluk2(taluk_id,city_id){
 var xhttp = new XMLHttpRequest();
 
 

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("previous_school_city_id").innerHTML =this.responseText;
       document.getElementById("previous_school_city_id").value=city_id;
    }
  };
  xhttp.open("GET", "getcity.php?taluk_id="+taluk_id, true);
  xhttp.send();

}

function seldistrict(){
 var xhttp = new XMLHttpRequest();
  var district_id=document.getElementById("district_id").value;
 

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("taluk_id").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "gettaluks.php?district_id="+district_id, true);
  xhttp.send();

}


function seltaluk(){
 var xhttp = new XMLHttpRequest();
  var taluk_id=document.getElementById("taluk_id").value;
 

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("city_id").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "getcity.php?taluk_id="+taluk_id, true);
  xhttp.send();

}


function selcity(){
 var xhttp = new XMLHttpRequest();
  var city_id=document.getElementById("city_id").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("pincode").value=this.responseText;
    }
  };
  xhttp.open("GET", "getpcode.php?city_id="+city_id, true);
  xhttp.send();

}

function selpincode(){
var xhttp = new XMLHttpRequest();
  var pincode=document.getElementById("pincode").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var res=this.responseText;
      res=res.split("$$");
      document.getElementById("district_id").value =res[0];
      seldistrict1(res[0],res[1])
     
      seltaluk1(res[1],res[2])
     
    }
  };
  xhttp.open("GET", "getdtv.php?pcode="+pincode, true);
  xhttp.send();

}


function seldistrict1(district_id,taluk_id){
 var xhttp = new XMLHttpRequest();
  
 

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("taluk_id").innerHTML =this.responseText;
       document.getElementById("taluk_id").value =taluk_id;
    }
  };
  xhttp.open("GET", "gettaluks.php?district_id="+district_id, true);
  xhttp.send();

}


function seltaluk1(taluk_id,city_id){
 var xhttp = new XMLHttpRequest();
 
 

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("city_id").innerHTML =this.responseText;
       document.getElementById("city_id").value=city_id;
    }
  };
  xhttp.open("GET", "getcity.php?taluk_id="+taluk_id, true);
  xhttp.send();

}

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
      document.getElementById("afees").innerHTML =this.responseText;
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

function getedetails(de) {
if(de=="Yes")
{
   
   
      document.getElementById("edetails").style="display:flex;flex-wrap:wrap";
	
	  document.getElementById("previous_school_affiliation").required=true;
document.getElementById("transfer_certificate_number").required=true;
document.getElementById("transfer_certificate_date").required=true;
document.getElementById("previous_school_name").required=true;
document.getElementById("previous_school_type").required=true;
document.getElementById("previous_school_address").required=true;
document.getElementById("previous_school_district_id").required=true;
document.getElementById("previous_school_taluk_id").required=true;
document.getElementById("previous_school_city_id").required=true;
document.getElementById("previous_school_pincode").required=true;
	  }
	   else
	  {
	  document.getElementById("edetails").style="display:none";
	  	  document.getElementById("previous_school_affiliation").value="";
document.getElementById("transfer_certificate_number").value="";
document.getElementById("transfer_certificate_date").value="";
document.getElementById("previous_school_name").value="";
document.getElementById("previous_school_type").value="";
document.getElementById("previous_school_address").value="";
document.getElementById("previous_school_district_id").value="";
document.getElementById("previous_school_taluk_id").value="";
document.getElementById("previous_school_city_id").value="";
document.getElementById("previous_school_pincode").value="";
document.getElementById("previous_school_affiliation").required=false;
document.getElementById("transfer_certificate_number").required=false;
document.getElementById("transfer_certificate_date").required=false;
document.getElementById("previous_school_name").required=false;
document.getElementById("previous_school_type").required=false;
document.getElementById("previous_school_address").required=false;
document.getElementById("previous_school_district_id").required=false;
document.getElementById("previous_school_taluk_id").required=false;
document.getElementById("previous_school_city_id").required=false;
document.getElementById("previous_school_pincode").required=false;

	  }

}

function selcat() {
var cat=document.getElementById("category_id").value;
if(cat==4)
{
   
   
      document.getElementById("selobc").style="display:block";
      document.getElementById("obc_sub_caste_id").required=true;
	  }
	   else
	  {
	  document.getElementById("selobc").style="display:none";
	  document.getElementById("obc_sub_caste_id").required=false;
	  var xhttp = new XMLHttpRequest();
  var religion_id=document.getElementById("religion_id").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("caste_id").innerHTML = document.getElementById("father_caste_id").innerHTML=document.getElementById("mother_caste_id").innerHTML=this.responseText;
    }
  };
  xhttp.open("GET", "getcastes.php?religion_id="+religion_id+"&category_id="+cat, true);
  xhttp.send();
	  }

}

function selobc()
{
var cat=document.getElementById("category_id").value;
var obc_sub_caste_id=document.getElementById("obc_sub_caste_id").value;
var xhttp = new XMLHttpRequest();
  var religion_id=document.getElementById("religion_id").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("caste_id").innerHTML = document.getElementById("father_caste_id").innerHTML=document.getElementById("mother_caste_id").innerHTML=this.responseText;
    }
  };
  xhttp.open("GET", "getobccastes.php?religion_id="+religion_id+"&category_id="+cat+"&obc_sub_caste_id="+obc_sub_caste_id, true);
  xhttp.send();

}
function selguardian(gd) {
if(gd=="Yes")
{
  var xhttp = new XMLHttpRequest();
  
 
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("gdetails").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "getguardiandetails.php", true);
  xhttp.send();
  }
  else
  {
     document.getElementById("gdetails").innerHTML ="";
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

function preview_image_father(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image_father');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

function preview_image_mother(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image_mother');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
  </body>

</html>