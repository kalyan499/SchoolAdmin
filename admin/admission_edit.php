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
$sql="select * from students where student_id='".$_REQUEST["sid"]."'";
$res=$db->query($sql);
$row=$db->fetch_array($res);
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
              <a class="nav-link active" data-toggle="tab" href="#addNewStudent">Edit Student</a>
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
   
                           <form role="form" method="post" action="students_update.php" enctype="multipart/form-data">
						   <input name="student_id" type="hidden" value="<?php echo $_REQUEST["sid"] ?>">
                              <div class="row setup-content" id="step-1">
                                 <div class="col-md-9">
                                    <h4 class="ptb-20">Student Information - (Academic Year  <?php echo $row["academic_year"]; ?>)</h4>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Admission Date<span class="mdfield">*</span></label>
                                       <div class="input-group date">
<!-- <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control dateofbirth" required="required"> --><input type="text" style="visibility:hidden; width:1px; height:1px;" /> 
 <input  id="admission_date" name="admission_date" type="text"  placeholder="dd-mm-yyyy" class="form-control" required="required" value="<?php echo $row["admission_date"]; ?>">
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
										
                                      <option <?php if($row["instruction_medium"]=="ENGLISH"){ echo "selected"; } ?>>ENGLISH</option>
                                       <option <?php if($row["instruction_medium"]=="HINDI"){ echo "selected"; } ?>>HINDI</option>
									   <option <?php if($row["instruction_medium"]=="KANNADA"){ echo "selected"; } ?>>KANNADA</option>
									   <option <?php if($row["instruction_medium"]=="URDU"){ echo "selected"; } ?>>URDU</option>
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
                                         <option value="<?php echo $rowr["mother_tounge_id"]; ?>" <?php if($row["mother_tounge_id"]==$rowr["mother_tounge_id"]){ echo "selected"; } ?>><?php echo $rowr["mother_tounge_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
                                       </select>
                                    </div>
                                 </div>
								
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="lang_group">Language Group<span class="mdfield">*</span></label>
                                      
                                          <select class="form-control" id="lang_group" name="lang_group"  required="required">
                                          <option value="">Select Language Group</option>						
<option value="EM_Eng_Kan_Hin"  <?php if($row["lang_group"]=="EM_Eng_Kan_Hin"){ echo "selected"; } ?>>EM_Eng_Kan_Hin</option>
<option value="EM_Eng_Kan"  <?php if($row["lang_group"]=="EM_Eng_Kan"){ echo "selected"; } ?>>EM_Eng_Kan</option>
<option value="Other"  <?php if($row["lang_group"]=="Other"){ echo "selected"; } ?>>Other</option>				
                                        
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
                                         <option value="<?php echo $rowr["course_id"]; ?>" <?php if($row["course_id"]==$rowr["course_id"]){ echo "selected"; } ?>><?php echo $rowr["course_name"]; ?></option>
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
                                          <?php
										     
											 $cid=$row["course_id"];
	
	$sqlr="select * from grades where course_id='$cid'";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option <?php if($row["current_year"]==$rowr["grade_name"]){ echo "selected"; } ?>><?php echo $rowr["grade_name"]; ?></option>
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
                                       <input type="text" id="roll_number" name="roll_number" required="required" class="form-control" placeholder="Roll No" readonly="" value="<?php echo $row["roll_number"]; ?>">
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
                                         <option value="<?php echo $rowr["section_id"]; ?>" <?php if($row["section_id"]==$rowr["section_id"]){ echo "selected"; } ?>><?php echo $rowr["section_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
                                       </select>
                                    </div>
                                 </div>
                                   <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="admission_number">Admission No</label>
                                       <input type="text"  id="admission_number" name="admission_number" required="required" class="form-control" placeholder="Admission No" readonly="" value="<?php echo $row["admission_number"]; ?>">
                                    </div>
                                 </div>
								 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">Previous School Details?<span class="mdfield">*</span></label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="dey" type="radio" value="Yes" name="de" class="radio-template"  onClick="getedetails('Yes')" <?php if($row["from_other_school"]=="Yes"){ echo "checked"; } ?>>
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="den" type="radio"  value="No" name="de" class="radio-template tmpend"  onClick="getedetails('No')" <?php if($row["from_other_school"]=="No"){ echo "checked"; } ?>>
                                          <label for="rad2">No</label>
                                       </div>
                                    </div>
                                 </div>
								  <div class="row" id="edetails" style="padding-left: 15px; padding-right: 15px; <?php if($row["from_other_school"]=="No"){ ?> display:none; <?php } ?>">

                                <div class="col-md-3">
<div class="form-group">
<label class="control-label" for="previous_school_affiliation">Previous School Affiliation<span class="mdfield">*</span></label>
<select class="form-control" id="previous_school_affiliation" name="previous_school_affiliation"  <?php if($row["from_other_school"]=="Yes"){ ?> required <?php } ?>>

 <option value="">Select Previous School Affiliation</option>
  <option <?php if($row["previous_school_affiliation"]=="ICSE"){ echo "selected"; } ?>>ICSE</option>
                                          <option <?php if($row["previous_school_affiliation"]=="CBSE"){ echo "selected"; } ?>>CBSE</option>
                                          <option <?php if($row["previous_school_affiliation"]=="STATE"){ echo "selected"; } ?>>STATE</option>
										  <option <?php if($row["previous_school_affiliation"]=="Other"){ echo "selected"; } ?>>Other</option>
</select>
  </div>
</div>
 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="transfer_certificate_number">Transfer Certificate No</label>
                                       <input type="text" id="transfer_certificate_number" name="transfer_certificate_number"   <?php if($row["from_other_school"]=="Yes"){ ?> required <?php } ?> class="form-control" placeholder="Transfer Cirtificate No"  value="<?php echo $row["transfer_certificate_number"]; ?>">
                                    </div>
                                 </div>
<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Transfer Certificate Date <span class="mdfield">*</span></label>
                                       <div class="input-group date">
<!-- <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control dateofbirth" required="required"> -->
                                          <input  id="transfer_certificate_date" name="transfer_certificate_date" type="text"  placeholder="dd-mm-yyyy" class="form-control"   <?php if($row["from_other_school"]=="Yes"){ ?> required <?php } ?>  value="<?php echo $row["transfer_certificate_date"]; ?>">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_name">Previous School Name</label>
        <input type="text" id="previous_school_name" name="previous_school_name" class="form-control" placeholder="Previous School Name"  value="<?php echo $row["previous_school_name"]; ?>"   <?php if($row["from_other_school"]=="Yes"){ ?> required <?php } ?>>
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_type">Previous School Type</label>
<select class="form-control" id="previous_school_type" name="previous_school_type"   <?php if($row["from_other_school"]=="Yes"){ ?> required <?php } ?>>

 <option value="">Select Previous School Type</option>
   <option title="Javahar Navodaya Vidyalaya" <?php if($row["previous_school_type"]=="Javahar Navodaya Vidyalaya"){ echo "selected"; } ?>>Javahar Navodaya Vidyalaya</option>
                                                                        <option title="Kendriya Vidyalay / Central Schools" <?php if($row["previous_school_type"]=="Kendriya Vidyalay / Central Schools"){ echo "selected"; } ?>>Kendriya Vidyalay / Central Schools</option>
                                                                        <option title="Sainik Schools"  <?php if($row["previous_school_type"]=="Sainik Schools"){ echo "selected"; } ?>>Sainik Schools</option>
                                                                        <option title="Social Welfare Department Schools"  <?php if($row["previous_school_type"]=="Social Welfare Department Schools"){ echo "selected"; } ?>>Social Welfare Department Schools</option>
                                                                        <option title="Ministry of Labor"  <?php if($row["previous_school_type"]=="Ministry of Labor"){ echo "selected"; } ?>>Ministry of Labor</option>
                                                                        <option title="All Management"  <?php if($row["previous_school_type"]=="All Management"){ echo "selected"; } ?>>All Management</option>
                                                                        <option title="Department of Education"  <?php if($row["previous_school_type"]==""){ echo "selected"; } ?>>Department of Education</option>
                                                                        <option title="Tribal Welfare Department Schools"  <?php if($row["previous_school_type"]=="Tribal Welfare Department Schools"){ echo "selected"; } ?>>Tribal Welfare Department Schools</option>
                                                                        <option title="Local body"  <?php if($row["previous_school_type"]=="Local body"){ echo "selected"; } ?>>Local body</option>
                                                                        <option title="Pvt. Aided"  <?php if($row["previous_school_type"]=="Pvt. Aided"){ echo "selected"; } ?>>Pvt. Aided</option>
                                                                        <option title="Pvt. Unaided"  <?php if($row["previous_school_type"]=="Pvt. Unaided"){ echo "selected"; } ?>>Pvt. Unaided</option>
                                                                        <option title="Others State Govt. Managed Schools"  <?php if($row["previous_school_type"]==""){ echo "selected"; } ?>>Others State Govt. Managed Schools</option>
                                                                        <option title="Railway Schools"  <?php if($row["previous_school_type"]=="Railway Schools"){ echo "selected"; } ?>>Railway Schools</option>
                                                                        <option title="Un-Recognised"  <?php if($row["previous_school_type"]=="Un-Recognised"){ echo "selected"; } ?>>Un-Recognised</option>
                                                                        <option title="Madarsa recognized (by Wakf board/Madarsa Board)"  <?php if($row["previous_school_type"]==""){ echo "selected"; } ?>>Madarsa recognized (by Wakf board/Madarsa Board)</option>
                                                                        <option title="Madarsa unrecognized"  <?php if($row["previous_school_type"]=="Madarsa unrecognized"){ echo "selected"; } ?>>Madarsa unrecognized</option>
                                                                        <option title="Central Tibatin Schools"  <?php if($row["previous_school_type"]=="Central Tibatin Schools"){ echo "selected"; } ?>>Central Tibatin Schools</option>
</select>
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_address">Previous School Address</label>
        <input type="text" id="previous_school_address" name="previous_school_address"   class="form-control" placeholder="Previous School Address"  value="<?php echo $row["previous_school_affiliation"]; ?>"   <?php if($row["from_other_school"]=="Yes"){ ?> required <?php } ?>>
</div>
</div>
<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="previous_school_district_id">District</label>
                                       <select id="previous_school_district_id" name="previous_school_district_id"   <?php if($row["from_other_school"]=="Yes"){ ?> required <?php } ?> class="form-control" onChange="selpschooldistrict()">
									   <option value="">Select District</option>
									   <option value="0">Not In List</option>
									   <?php
$sqlr="select * from districts";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["district_id"]; ?>" <?php if($row["previous_school_district_id"]==$rowr["district_id"]){ echo "selected"; } ?>><?php echo $rowr["district_name"]; ?></option>
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
                                       <select id="previous_school_taluk_id" name="previous_school_taluk_id"   <?php if($row["from_other_school"]=="Yes"){ ?> required <?php } ?> class="form-control" onChange="selpschooltaluk()">
									   <option value="">Select Taluk</option>
									   <option value="0">Not In List</option>
									   <?php
$sqlr="select * from taluks where district_id='".$row["previous_school_district_id"]."'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["taluk_id"]; ?>" <?php if($row["previous_school_taluk_id"]==$rowr["taluk_id"]){ echo "selected"; } ?>><?php echo $rowr["taluk_name"]; ?></option>
<?php
}
?>
									   </select>
									   </div>
                                    </div>
                                 </div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_city">City/Village/Town</label>
      
 <select id="previous_school_city_id" name="previous_school_city_id"   class="form-control" onChange="selpschoolcity()"   <?php if($row["from_other_school"]=="Yes"){ ?> required <?php } ?>>
        <option value="">Select City/Village/Town</option>
	<option value="0">Not In List</option>
	<?php
$sqlr="select * from cities where taluk_id='".$row["previous_school_taluk_id"]."'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["city_id"]; ?>" <?php if($row["previous_school_city_id"]==$rowr["city_id"]){ echo "selected"; } ?>><?php echo $rowr["city_name"]; ?></option>
<?php
}
?>
        </select>

</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_pincode">Pincode</label>
        <input type="text" id="previous_school_pincode" name="previous_school_pincode"   class="form-control" placeholder="Previous School Pincode"  value="<?php echo $row["previous_school_pincode"]; ?>"  onblur="selpschoolpincode()"   <?php if($row["from_other_school"]=="Yes"){ ?> required <?php } ?>>
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
                                       <label class="control-label" for="selBoard">Board</label>
                                       <select class="form-control" id="board" name="board">
                                          <option <?php if($row["board"]=="ICSE"){ echo "selected"; } ?>>ICSE</option>
                                          <option <?php if($row["board"]=="CBSE"){ echo "selected"; } ?>>CBSE</option>
                                          <option  <?php if($row["board"]=="STATE"){ echo "selected"; } ?>>STATE</option>
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
                                       <input maxlength="100" type="text" required="required" id="first_name" name="first_name" class="form-control" placeholder="Student Name" value="<?php echo $row["first_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="middle_name">Middle name  </label>
                                       <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle name" value="<?php echo $row["middle_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="last_name">Last name <span class="mdfield">*</span></label>
                                       <input type="text" id="last_name" name="last_name" required="required" class="form-control" placeholder="Last name"  value="<?php echo $row["last_name"]; ?>">
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
                                       <input maxlength="100" type="text" required="required" id="father_first_name" name="father_first_name" class="form-control" placeholder="Father Name" value="<?php echo $row["father_first_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="father_middle_name">Middle name  </label>
                                       <input type="text" id="father_middle_name" name="father_middle_name" class="form-control" placeholder="Middle name" value="<?php echo $row["father_middle_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="father_last_name">Last name <span class="mdfield">*</span></label>
                                       <input type="text" id="father_last_name" name="father_last_name" required="required" class="form-control" placeholder="Last name"  value="<?php echo $row["father_last_name"]; ?>">
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
                                       <input maxlength="100" type="text" required="required" id="mother_first_name" name="mother_first_name" class="form-control" placeholder="Mother Name" value="<?php echo $row["mother_first_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_middle_name">Middle name  </label>
                                       <input type="text" id="mother_middle_name" name="mother_middle_name" class="form-control" placeholder="Middle name" value="<?php echo $row["mother_middle_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_last_name">Last name <span class="mdfield">*</span></label>
                                       <input type="text" id="mother_last_name" name="mother_last_name" required="required" class="form-control" placeholder="Last name"  value="<?php echo $row["mother_last_name"]; ?>">
                                    </div>
                                 </div>
                                
                                  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="gender">Gender </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="gender" type="radio" value="Male" name="gender" class="radio-template" <?php if($row["gender"]=="Male"){ echo "checked"; } ?>>
                                          <label for="rad1">Male</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="gender" type="radio"  value="Female" name="gender" class="radio-template tmpend" <?php if($row["gender"]=="Female"){ echo "checked"; } ?>>
                                          <label for="rad2">Female</label>
                                       </div>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Date of Birth <span class="mdfield">*</span></label>
                                       <div class="input-group date">
<!-- <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control dateofbirth" required="required"> -->
                                          <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control" required="required" value="<?php echo $row["date_of_birth"]; ?>">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                
                               <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="place_of_birth">Place of Birth <span class="mdfield">*</span></label>
                                       <input type="text" id="place_of_birth" name="place_of_birth" required="required" class="form-control" placeholder="Place of Birth" value="<?php echo $row["place_of_birth"]; ?>">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="age_reason">Age Reason</label>
                                       <input type="text" id="age_reason" name="age_reason" class="form-control" placeholder="Age Reason" value="<?php echo $row["age_reason"]; ?>">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="blood_group">Blood Group</label>
                                       <select class="form-control" id="blood_group" name="blood_group">
									   <option value="">Select Blood Group</option>
                                          <option <?php if($row["blood_group"]=="A+ve"){ echo "selected"; } ?>>A+ve</option>
                                          <option <?php if($row["blood_group"]=="A-ve"){ echo "selected"; } ?>>A-ve</option>
                                          <option <?php if($row["blood_group"]=="B+ve"){ echo "selected"; } ?>>B+ve</option>
                                          <option <?php if($row["blood_group"]=="B-ve"){ echo "selected"; } ?>>B-ve</option>
										   <option <?php if($row["blood_group"]=="AB+ve"){ echo "selected"; } ?>>AB+ve</option>
                                          <option <?php if($row["blood_group"]=="AB-ve"){ echo "selected"; } ?>>AB-ve</option>
										   <option <?php if($row["blood_group"]=="O+ve"){ echo "selected"; } ?>>O+ve</option>
                                          <option <?php if($row["blood_group"]=="O-ve"){ echo "selected"; } ?>>O-ve</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuNationality">Country/Nationality</label>
                                       <select id="country_id" name="country_id" required="required" class="form-control" onChange="getstates()">
									   <option value="">Select Country</option>
									   <?php
$sqlr="select * from countries";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["country_id"]; ?>" <?php if($rowr["country_id"]==$row["country_id"]){ echo "selected"; } ?>><?php echo $rowr["country_name"]; ?></option>
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
<option value="<?php echo $rowr["state_id"]; ?>" <?php if($rowr["state_id"]==$row["state_id"]){ echo "selected"; } ?>><?php echo $rowr["state_name"]; ?></option>
<?php
}
?>
									   </select>
									   </div>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">Child Admitted to RTE Quota <span class="mdfield">*</span></label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="rtey" type="radio" value="Yes" name="rte" class="radio-template" <?php if($row["rte"]=="Yes"){ echo "checked"; } ?>>
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="rten" type="radio" checked="" value="No" name="rte" class="radio-template tmpend" <?php if($row["rte"]=="No"){ echo "checked"; } ?>>
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
<option value="<?php echo $rowr["religion_id"]; ?>"  <?php if($row["religion_id"]==$rowr["religion_id"]){ echo "selected"; } ?>><?php echo $rowr["religion_name"]; ?></option>
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
<option value="<?php echo $rowr["category_id"]; ?>" <?php if($row["category_id"]==$rowr["category_id"]){ echo "selected"; } ?>><?php echo $rowr["category_name"]; ?></option>
<?php
}
?>
</select>
                                    </div>
                                 </div>
								
                                  <div class="col-md-3" <?php if($row["category_id"]!=4){ ?> style="display:none;" <?php } ?> id="selobc" >
                                    <div class="form-group">
                                       <label class="control-label" for="caste">OBC Sub Caste <span class="mdfield">*</span></label>
                                       <select id="obc_sub_caste_id" name="obc_sub_caste_id" class="col-xs-10 col-sm-12 form-control"   <?php if($row["category_id"]==4){ ?> required <?php } ?> onchange="selobc()">

	   <option value="">Select OBC Sub Caste</option>
<?php
$sqlr="select * from obc_sub_castes";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["obc_sub_caste_id"]; ?>" <?php if($row["obc_sub_caste_id"]==$rowr["obc_sub_caste_id"]){ echo "selected"; } ?>><?php echo $rowr["obc_sub_caste_name"]; ?></option>
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
$sqlr="select * from castes where religion_id='".$row["religion_id"]."' and category_id='".$row["category_id"]."' and obc_sub_caste_id='".$row["obc_sub_caste_id"]."'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["caste_id"]; ?>" <?php if($row["caste_id"]==$rowr["caste_id"]){ echo "selected"; } ?>><?php echo $rowr["caste_name"]; ?></option>
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
$sqlr="select * from castes where religion_id='".$row["religion_id"]."' and category_id='".$row["category_id"]."' and obc_sub_caste_id='".$row["obc_sub_caste_id"]."'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["caste_id"]; ?>" <?php if($rowr["caste_id"]==$row["father_caste_id"]){ echo "selected"; } ?>><?php echo $rowr["caste_name"]; ?></option>
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
$sqlr="select * from castes where religion_id='".$row["religion_id"]."' and category_id='".$row["category_id"]."' and obc_sub_caste_id='".$row["obc_sub_caste_id"]."'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["caste_id"]; ?>" <?php if($rowr["caste_id"]==$row["mother_caste_id"]){ echo "selected"; } ?>><?php echo $rowr["caste_name"]; ?></option>
<?php
}
?>
</select>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="student_caste_certificate_number">Student Caste Certificate No</label>
                                       <input type="text" id="student_caste_certificate_number" name="student_caste_certificate_number" class="form-control" placeholder="Student Caste Certificate No" value="<?php echo $row["student_caste_certificate_number"]; ?>">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_caste_certificate_number">Father Caste Certificate No</label>
                                       <input type="text" id="father_caste_certificate_number" name="father_caste_certificate_number" class="form-control" placeholder="Father Caste Certificate No" value="<?php echo $row["father_caste_certificate_number"]; ?>">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_caste_certificate_number">Mother Caste Certificate No</label>
                                       <input type="text" id="mother_caste_certificate_number" name="mother_caste_certificate_number" class="form-control" placeholder="Mother Caste Certificate No" value="<?php echo $row["mother_caste_certificate_number"]; ?>">
                                    </div>
                                 </div>
                              
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAdhaarno">Student Adhaar UID No</label>
                                       <input type="text" id="aadhar_number" name="aadhar_number" class="form-control" placeholder="Student Adhaar No" value="<?php echo $row["aadhar_number"]; ?>">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_aadhar_number">Father Adhaar UID No</label>
                                       <input type="text" id="father_aadhar_number" name="father_aadhar_number" class="form-control" placeholder="Father Adhaar No" value="<?php echo $row["father_aadhar_number"]; ?>">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_aadhar_number">Mother Adhaar UID No</label>
                                       <input type="text" id="mother_aadhar_number" name="mother_aadhar_number" class="form-control" placeholder="Mother Adhaar No" value="<?php echo $row["mother_aadhar_number"]; ?>">
                                    </div>
                                 </div>
								   <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="bhagyalakshmi_bond_number">Bhagyalakshmi Bond No</label>
                                       <input type="text" id="bhagyalakshmi_bond_number" name="bhagyalakshmi_bond_number" class="form-control" placeholder="Bhagyalakshmi Bond No" value="<?php echo $row["bhagyalakshmi_bond_number"]; ?>">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="special_category">Special Category</label>
                                       <select class="form-control" id="special_category" name="special_category">
									   <option value="">Select Special Category</option>
                                          <option <?php if($row["special_category"]=="None"){ echo "selected"; } ?>>None</option>
                                          <option <?php if($row["special_category"]=="Destitute"){ echo "selected"; } ?>>Destitute</option>
                                          <option <?php if($row["special_category"]=="HIV Case"){ echo "selected"; } ?>>HIV Case</option>
                                          <option <?php if($row["special_category"]=="Orphans"){ echo "selected"; } ?>>Orphans</option>
										   <option <?php if($row["special_category"]=="Other"){ echo "selected"; } ?>>Other</option>
                                       </select>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">Belongs to BPL<span class="mdfield">*</span></label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="bply" type="radio" value="Yes" name="bpl" class="radio-template" onClick="selbpl('Yes')" <?php if($row["bpl"]=="Yes"){ echo "checked"; } ?>>
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="bpln" type="radio"  value="No" name="bpl" class="radio-template tmpend" onClick="selbpl('No')" <?php if($row["bpl"]=="No"){ echo "checked"; } ?>>
                                          <label for="rad2">No</label>
                                       </div>
                                    </div>
                                 </div>
								
								  <div class="col-md-3"  <?php if($row["bpl"]=="No"){ ?> style="display:none" <?php } ?> id="selbpl">
                                    <div class="form-group">
                                       <label class="control-label" for="bpl_card_number">BPL Card Number</label>
                                       <input type="text" id="bpl_card_number" name="bpl_card_number" class="form-control" placeholder="BPL Card Number" value="<?php echo $row["bpl_card_number"]; ?>" >
                                    </div>
                                 </div>
								
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">Child With Special Need<span class="mdfield">*</span></label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="childsny" type="radio" value="Yes" name="child_special_need" class="radio-template" onClick="selcspecial('Yes')" <?php if($row["child_special_need"]=="Yes"){ echo "checked"; } ?>>
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="childsnn" type="radio" value="No" name="child_special_need" class="radio-template tmpend" onClick="selcspecial('No')" <?php if($row["child_special_need"]=="No"){ echo "checked"; } ?>>
                                          <label for="rad2">No</label>
                                       </div>
                                    </div>
                                 </div>
								 <div class="col-md-3" <?php if($row["child_special_need"]=="No"){ ?> style="display:none" <?php } ?> id="selcspecial">
                                    <div class="form-group">
                                      <label class="control-label" for="special_need">Special Need</label>
                                       <select class="form-control" id="special_need" name="special_need"  <?php if($row["child_special_need"]=="Yes"){ ?> required <?php } ?>>
									   <option value="">Select Special Need</option>
                                          <option  <?php if($row["special_need"]=="Visual Impairment (Blindness)"){ echo "selected"; } ?>>Visual Impairment (Blindness)</option>
<option  <?php if($row["special_need"]=="Visual Impairment (Low-vision)"){ echo "selected"; } ?>>Visual Impairment (Low-vision)</option>
<option  <?php if($row["special_need"]=="Speech and Language Disability"){ echo "selected"; } ?>>Hearing Imparement (Deaf and Hard of Hearing)</option>
<option  <?php if($row["special_need"]=="Speech and Language Disability"){ echo "selected"; } ?>>Speech and Language Disability</option>
<option  <?php if($row["special_need"]=="Loco motor impairment"){ echo "selected"; } ?>>Loco motor impairment</option>
<option  <?php if($row["special_need"]=="Mental Illness"){ echo "selected"; } ?>>Mental Illness</option>
<option  <?php if($row["special_need"]=="Specific Learning Disability"){ echo "selected"; } ?>>Specific Learning Disability</option>
<option  <?php if($row["special_need"]=="Cerebral Palsy"){ echo "selected"; } ?>>Cerebral Palsy</option>
<option  <?php if($row["special_need"]=="Autism Spectrum Disorder"){ echo "selected"; } ?>>Autism Spectrum Disorder</option>
<option  <?php if($row["special_need"]=="Multiple Disabilities including Deaf Blindness"){ echo "selected"; } ?>>Multiple Disabilities including Deaf Blindness</option>
<option  <?php if($row["special_need"]=="Leprosy Cured Persons"){ echo "selected"; } ?>>Leprosy Cured Persons</option>
<option  <?php if($row["special_need"]=="Dwarfism"){ echo "selected"; } ?>>Dwarfism</option>
<option  <?php if($row["special_need"]=="Intellectual Disability"){ echo "selected"; } ?>>Intellectual Disability</option>
<option  <?php if($row["special_need"]=="Muscular Dystrophy"){ echo "selected"; } ?>>Muscular Dystrophy</option>
<option  <?php if($row["special_need"]=="Chronic Neurological Conditios"){ echo "selected"; } ?>>Chronic Neurological Conditios</option>
<option  <?php if($row["special_need"]=="Multiple Sclerosis"){ echo "selected"; } ?>>Multiple Sclerosis</option>
<option  <?php if($row["special_need"]=="Thalassemia"){ echo "selected"; } ?>>Thalassemia</option>
<option  <?php if($row["special_need"]=="Hemophilia"){ echo "selected"; } ?>>Hemophilia</option>
<option  <?php if($row["special_need"]=="Sickle Cell Disease"){ echo "selected"; } ?>>Sickle Cell Disease</option>
<option  <?php if($row["special_need"]=="Acid Attack Victim"){ echo "selected"; } ?>>Acid Attack Victim</option>
<option  <?php if($row["special_need"]=="Parkinsons Disease"){ echo "selected"; } ?>>Parkinsons Disease</option>
<option  <?php if($row["special_need"]=="Not Applicable"){ echo "selected"; } ?>>Not Applicable</option>
                                       </select>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">BMTC Bus Pass Request<span class="mdfield">*</span></label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="bmtcbusy" type="radio" value="Yes" name="bmtcbus" class="radio-template" <?php if($row["bmtcbus"]=="Yes"){ echo "checked"; } ?>>
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="bmtcbusn" type="radio" checked="" value="No" name="bmtcbus" class="radio-template tmpend" <?php if($row["bmtcbus"]=="No"){ echo "checked"; } ?>>
                                          <label for="rad2">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 
                                
                              
                                
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSibling1">Sibling </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="siblingy" type="radio" value="Yes" name="sibling" class="radio-template" onClick="selsib()" <?php if($row["sibling"]=="Yes"){ echo "checked"; } ?>>
                                          <label for="stuSibling1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="siblingn" type="radio" value="No" name="sibling" class="radio-template tmpend"  onClick="selsib1()" <?php if($row["sibling"]=="No"){ echo "checked"; } ?>>
                                          <label for="stuSibling2">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3" <?php if($row["sibling"]=="No"){ ?> style="display:none;" <?php } ?> id="selsib">
                                    <div class="form-group">
                                       <label class="control-label" for="admission_number">Select Sibling</label>
                                       <input type="hidden" id="sibling_id" name="sibling_id" value="<?php echo $row["sibling_id"]; ?>" />
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
                                       <input type="text" id="permenant_address" name="permenant_address" required="required" class="form-control" placeholder="Student Address" value="<?php echo $row["permenant_address"]; ?>">
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
<option value="<?php echo $rowr["district_id"]; ?>" <?php if($row["district_id"]==$rowr["district_id"]){ echo "selected"; } ?>><?php echo $rowr["district_name"]; ?></option>
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
                                       <select id="taluk_id" name="taluk_id" required="required" class="form-control"  onChange="seltaluk()">
									   <option value="">Select Taluk</option>
									   <option value="0">Not In List</option>
									   <?php
$sqlr="select * from taluks where district_id='".$row["district_id"]."'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["taluk_id"]; ?>" <?php if($row["taluk_id"]==$rowr["taluk_id"]){ echo "selected"; } ?>><?php echo $rowr["taluk_name"]; ?></option>
<?php
}
?>
									   </select>
									   </div>
                                    </div>
                                 </div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="city">City/Village/Town</label>
        <select id="city_id" name="city_id"   class="form-control" onChange="selcity()">
        <option value="">Select City/Village/Town</option>
	<option value="0">Not In List</option>
	<?php
$sqlr="select * from cities where taluk_id='".$row["taluk_id"]."'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["city_id"]; ?>" <?php if($row["city_id"]==$rowr["city_id"]){ echo "selected"; } ?>><?php echo $rowr["city_name"]; ?></option>
<?php
}
?>
        </select>
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="locality">Locality</label>
        <input type="text" id="locality" name="locality"   class="form-control" placeholder="Locality" value="<?php echo $row["permenant_address"]; ?>">
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="pincode">Pincode</label>
        <input type="text" id="pincode" name="pincode"   class="form-control" placeholder="Pincode" value="<?php echo $row["pincode"]; ?>" onBlur="selpincode()">
</div>
</div>
<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Student eMail id</label>
                                       <input type="text" id="email" name="email" class="form-control" placeholder="Student eMail id" ng-model="email" value="<?php echo $row["email"]; ?>">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="single_parent">Single Parent</label>
                                       <select id="single_parent" name="single_parent" class="form-control">
									     
									   <option <?php if($row["single_parent"]=="NA"){ echo "selected"; } ?>>NA</option>
									   <option <?php if($row["single_parent"]=="Father"){ echo "selected"; } ?>>Father</option>
									   <option <?php if($row["single_parent"]=="Mother"){ echo "selected"; } ?>>Mother</option>
									  
									    </select>
                                    </div>
                                 </div>
								   <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_mobile"> Father Mobile Number <span class="mdfield">*</span> </label>
                                       <input type="text" id="father_mobile" name="father_mobile" required="required" class="form-control" placeholder="Father Mobile Number " value="<?php echo $row["father_mobile"]; ?>">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_email">Father eMail id  </label>
                                       <input type="text" id="father_email" name="father_email" class="form-control" placeholder="Father eMail id" value="<?php echo $row["father_email"]; ?>">
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_education">Father Education</label>
                                       <select id="father_education" name="father_education" class="form-control" >
									   <option value="">Select Father Education</option>
									   <option <?php if($row["father_education"]=="Post Graduate"){ echo "selected"; } ?>>Post Graduate</option>
									   <option <?php if($row["father_education"]=="Graduate"){ echo "selected"; } ?>>Graduate</option>
									   <option <?php if($row["father_education"]=="Senior Secondary"){ echo "selected"; } ?>>Senior Secondary</option>
									   <option <?php if($row["father_education"]=="Xth"){ echo "selected"; } ?>>Xth</option>
									   <option <?php if($row["father_education"]=="Other"){ echo "selected"; } ?>>Other</option>
									   </select>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="father_occupation">Father Occupation  </label>
                                       <input type="text" id="father_occupation" name="father_occupation" class="form-control" placeholder="Father Occupation" value="<?php echo $row["father_occupation"]; ?>">
                                    </div>
                                 </div>
								    <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_mobile"> Mother Mobile Number <span class="mdfield">*</span> </label>
                                       <input type="text" id="mother_mobile" name="mother_mobile" required="required" class="form-control" placeholder="Mother Mobile Number " value="<?php echo $row["mother_mobile"]; ?>">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_email">Mother eMail id  </label>
                                       <input type="text" id="mother_email" name="mother_email" class="form-control" placeholder="Mother eMail id" value="<?php echo $row["mother_email"]; ?>">
                                    </div>
                                 </div>
                                
                                
                                 
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_education">Mother Education</label>
                                       <select id="mother_education" name="mother_education" class="form-control">
									   <option value="">Select Mother Education</option>
									   <option <?php if($row["mother_education"]=="Post Graduate"){ echo "selected"; } ?>>Post Graduate</option>
									   <option <?php if($row["mother_education"]=="Graduate"){ echo "selected"; } ?>>Graduate</option>
									   <option <?php if($row["mother_education"]=="Senior Secondary"){ echo "selected"; } ?>>Senior Secondary</option>
									   <option <?php if($row["mother_education"]=="Xth"){ echo "selected"; } ?>>Xth</option>
									   <option <?php if($row["mother_education"]=="Other"){ echo "selected"; } ?>>Other</option>
									    </select>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_occupation"> Mother Occupation </label>
                                       <input type="text" id="mother_occupation" name="mother_occupation" class="form-control" placeholder="Mother Occupation" value="<?php echo $row["mother_occupation"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="father_annual_income">Father Annual Income  </label>
                                       <input type="text" id="father_annual_income" name="father_annual_income" class="form-control" placeholder="Father Annual Income" value="<?php echo $row["father_annual_income"]; ?>">
                                    </div>
                                 </div>
								    <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_mobile"> Mother Annual Income </label>
                                       <input type="text" id="mother_mobile" name="mother_annual_income" class="form-control" placeholder="Mother Annual Income" value="<?php echo $row["mother_annual_income"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label class="control-label" for="sms_mobile_number"> SMS Mobile Number </label>
                                       <select id="sms_mobile_number" name="sms_mobile_number" class="form-control" placeholder="SMS Mobile Number ">
									     <option value="">Select SMS Mobile Number</option>
										 <option <?php if($row["sms_mobile_number"]=="Father Mobile Number"){ echo "selected"; } ?>>Father Mobile Number</option>
										 <option <?php if($row["sms_mobile_number"]=="Mother Mobile Number"){ echo "selected"; } ?>>Mother Mobile Number</option>
										 <option <?php if($row["sms_mobile_number"]=="Gaurdian Mobile Number"){ echo "selected"; } ?>>Gaurdian Mobile Number</option>
									   </select>
                                    </div>
                                 </div>
								  <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSibling1">Child Sponsored </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="sponsoredy" type="radio" value="Yes" name="sponsored" class="radio-template" onClick="selsponsor('Yes')" <?php if($row["sponsored"]=="Yes"){ echo "checked"; } ?>>
                                          <label for="stuSibling1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="sponsoredn" type="radio" value="No" name="sponsored" class="radio-template tmpend"  onClick="selsponsor('No')" <?php if($row["sponsored"]=="No"){ echo "checked"; } ?>>
                                          <label for="stuSibling2">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3" style="display:none" id="selsponsor">
                                    <div class="form-group">
                                       <label class="control-label" for="sponsoring_agency">Select Agency</label>
                                       <input type="text" id="sponsoring_agency" name="sponsoring_agency"  class="form-control" value="<?php echo $row["sponsoring_agency"]; ?>"/>
                                       <div id="sname">
                                      
                                       </div>
                                    </div>
                                 </div>
								  <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSibling1">Residing With Guardian </label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="rgaurdiany" type="radio" value="Yes" name="guardian" class="radio-template" onClick="selguardian('Yes')" <?php if($row["guardian"]=="Yes"){ echo "checked"; } ?>>
                                          <label for="stuSibling1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="rgaurdiann" type="radio" checked="" value="No" name="guardian" class="radio-template tmpend"  onClick="selguardian('No')" <?php if($row["guardian"]=="No"){ echo "checked"; } ?>>
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
                                       <div class="card">
                                          <input id="student_photo" name="student_photo" type="file" class="form-control-file" accept="image/*" >
                                       </div>
                                    </div>
                                 </div>
								
                                <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="student_photo">Upload Father Photo</label>
                                       <div class="card">
                                          <input id="father_photo" name="father_photo" type="file" class="form-control-file" accept="image/*" >
                                       </div>
                                    </div>
                                 </div>
								    <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="student_photo">Upload Mother Photo</label>
                                       <div class="card">
                                          <input id="mother_photo" name="mother_photo" type="file" class="form-control-file" accept="image/*" >
                                       </div>
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
                                       <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Bank Name" value="<?php echo $row["bank_name"]; ?>">
                                    </div>
                                 </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="bank_account_number">Bank A/c No</label>
                                       <input type="text" id="bank_account_number" name="bank_account_number" class="form-control" placeholder="Bank A/c No" value="<?php echo $row["bank_account_number"]; ?>">
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="bank_ifsc_code">Bank IFSC Code</label>
                                       <input type="text" id="bank_ifsc_code" name="bank_ifsc_code" class="form-control" placeholder="Bank IFSC Code" value="<?php echo $row["bank_ifsc_code"]; ?>">
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
	  }
	  else
	  {
	  document.getElementById("selcspecial").style="display:none";
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
				    //getafees();
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
	  }
	   else
	  {
	  document.getElementById("selobc").style="display:none";
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