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
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0714_identity_card_photo_user_profile"></i><span>Student Details</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Student Invoice</span></a>
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
              <a class="nav-link" href="all_students.php">Student Lists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admission_form.php">Add New Student</a>
            </li> 
			 <li class="nav-item">
              <a class="nav-link active" href="#">Edit Student</a>
            </li> 
           </ul>
         </div>
        </div>
      <div class="tab-pane" id="stu_lists">
      
	  <div class="table-responsive">
                                            
                                        </div>
	  
	  
      </div>
      <?php
	  include("dbconnect.php"); 
$db->connect(); 
$sql="select * from students where student_id='".$_REQUEST["student_id"]."'";
$res=$db->query($sql);
$row=$db->fetch_array($res);
	  ?>
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
   
                           <form role="form" method="post" action="students_update.php" enctype="multipart/form-data">
						   <input name="student_id" id="student_id" type="hidden" value="<?php echo $_REQUEST["student_id"] ?>">
                              <div class="row setup-content" id="step-1">
                                 <div class="col-md-6">
                                    <h4 class="ptb-20">Student Information - (Academic Year  <?php echo $row["academic_year"]; ?>)</h4>
                                 </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="control-label" for="selBoard">Board</label>
                                       <select class="form-control" id="board" name="board">
                                          <option  <?php if($row["board"]=="ICSE"){ echo "selected"; } ?>>ICSE</option>
                                          <option  <?php if($row["board"]=="CBSE"){ echo "selected"; } ?>>CBSE</option>
                                          <option  <?php if($row["board"]=="STATE"){ echo "selected"; } ?>>STATE</option>
                                       </select>
                                    </div>
                                 </div>
                                 <!-- #section:elements.form -->
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="first_name">First Name <span class="mdfield">*</span></label>
                                       <input maxlength="100" type="text" required="required" id="first_name" name="first_name" class="form-control" placeholder="Student Name" value="<?php echo $row["first_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="middle_name">Middle name</label>
                                       <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle name" value="<?php echo $row["middle_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="last_name">Last name <span class="mdfield">*</span></label>
                                       <input type="text" id="last_name" name="last_name" required="required" class="form-control" placeholder="Last name"  value="<?php echo $row["last_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="mother_name">Mother name <span class="mdfield">*</span></label>
                                       <input type="text" id="mother_name" name="mother_name" required="required" class="form-control" placeholder="Mother name" value="<?php echo $row["mother_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="gender">Gender <span class="mdfield">*</span></label>
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
<!-- <input id="date_of_birth" name="date_of_birth" placeholder="dd-mm-yyyy" class="form-control dateofbirth" type="text" value="<?php echo $row["date_of_birth"]; ?>" required="required"> -->
                                          <input id="date_of_birth" name="date_of_birth" placeholder="dd-mm-yyyy" class="form-control" type="text" value="<?php echo $row["date_of_birth"]; ?>" required="required">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
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
                                       <label class="control-label" for="stuReligion">Religion <span class="mdfield">*</span></label>
                                        <select id="religion_id" name="religion_id" class="col-xs-10 col-sm-12 form-control" required>

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
                                       <label class="control-label" for="caste">Caste <span class="mdfield">*</span></label>
                                       <select id="caste_id" name="caste_id" class="col-xs-10 col-sm-12 form-control" required>

	   <option value="">Select Caste</option>
<?php
$sqlr="select * from castes";
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
                                       <label class="control-label" for="category">Category <span class="mdfield">*</span></label>
                                       <select id="category_id" name="category_id" class="col-xs-10 col-sm-12 form-control" required>

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
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1">RTE <span class="mdfield">*</span></label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="rtey" type="radio" value="Yes" name="rte" class="radio-template" <?php if($row["rte"]=="Yes"){ echo "checked"; } ?>>
                                          <label for="rad1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="rten" type="radio" value="No" name="rte" class="radio-template tmpend" <?php if($row["rte"]=="No"){ echo "checked"; } ?>>
                                          <label for="rad2">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="rad1"></label>
                                        <select class="form-control" id="agent_id" name="agent_id">
                                          <option value="">Select Agent</option>
                                         <?php
                                           $sqlr="select * from agents";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["agent_id"]; ?>" <?php if($row["agent_id"]==$rowr["agent_id"]){ echo "selected"; } ?>><?php echo $rowr["agent_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
                                       </select>
                                    </div>
                                 </div>
                               
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAddress">Student Address <span class="mdfield">*</span></label>
                                       <input type="text" id="address" name="address" required="required" class="form-control" placeholder="Student Address"  value="<?php echo $row["address"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuAdhaarno">Student Adhaar No</label>
                                       <input type="text" id="aadhar_number" name="aadhar_number" class="form-control" placeholder="Student Adhaar No"  value="<?php echo $row["aadhar_number"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmail">Student eMail id</label>
                                       <input type="text" id="email" name="email" class="form-control" placeholder="Student eMail id" ng-model="email"  value="<?php echo $row["email"]; ?>">
                                    </div>
                                 </div>
                                
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSection">Grade Section <span class="mdfield">*</span></label>
                                       <select class="form-control" id="course_id" name="course_id"  onChange="selcourse()">
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
                                       <label class="control-label" for="year">Select Grade <span class="mdfield">*</span></label>
									   <div id="syear">
                                       <select class="form-control" id="year" name="year" onChange="selyear()" required>
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
                                       <label class="control-label" for="section_id">Select Section <span class="mdfield">*</span></label>
                                       <select class="form-control" id="section_id" name="section_id">
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
                                       <label class="control-label" for="roll_number">Roll No</label>
                                       <input type="text" id="roll_number" name="roll_number" required="required" class="form-control" placeholder="Roll No"  value="<?php echo $row["roll_number"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="admission_number">Admission No</label>
                                       <input type="text"  id="admission_number" name="admission_number" required="required" class="form-control" placeholder="Admission No"   value="<?php echo $row["admission_number"]; ?>">
                                    </div>
                                 </div>                                                               
                              <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuSibling1">Sibling</label>
                                       <div class="clearfix"></div>
                                       <div class="i-checks in-block">
                                          <input id="siblingy" type="radio" value="Yes" name="sibling" class="radio-template" <?php if($row["sibling"]=="Yes"){ echo "checked"; } ?>  onClick="selsib()">
                                          <label for="stuSibling1">Yes</label>
                                       </div>
                                       <div class="i-checks in-block">
                                          <input id="siblingn" type="radio" value="No" name="sibling" class="radio-template tmpend" <?php if($row["sibling"]=="No"){ echo "checked"; } ?>  onClick="selsib1()">
                                          <label for="stuSibling2">No</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3" <?php if($row["sibling"]=="No"){ ?> style="display:none" <?php } ?> id="selsib">
                                    <div class="form-group">
                                       <label class="control-label" for="admission_number">Select Sibling</label>
                                       <input type="hidden" id="sibling_id" name="sibling_id" value="<?php echo $row["sibling_id"]; ?>" />
                                       <div id="sname">
                                       <?php
                                       if($row["sibling"]=="Yes")
                                       {
                                           $sqls="select * from students where student_id='".$row["sibling_id"]."'";
                                           $ress=$db->query($sqls);
                                           $rows=$db->fetch_array($ress);
                                       ?>
                                      <input type="text"  id="sibling_name" name="sibling_name" class="form-control" placeholder="Click to Select Sibling" onClick="openWindow('search_students_edit.php?sid=<?php echo $_REQUEST["student_id"]; ?>');" value="<?php echo $rows["first_name"]." ".$rows["last_name"]; ?>" required="required">
                                       <?php
                                       }
                                       ?>
                                       </div>
                                      
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
								  <div class="card-body text-center">
                      <div class="client-avatar"><img id="output_image" src="../simages/<?php echo $row["student_photo"]; ?>" alt="..." width="130">
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
                                       <label class="control-label" for="stuFname">Parent/Gaurdian Name <span class="mdfield">*</span></label>
                                       <input type="text" id="stuFname" name="stuFname" required="required" class="form-control" placeholder="Parent/Gaurdian Name"  value="<?php echo $row["father_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuFatherOccupation">Father Occupation</label>
                                       <input type="text" id="father_occupation" name="father_occupation" class="form-control" placeholder="Father Occupation"   value="<?php echo $row["father_occupation"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMothername">Mother Name <span class="mdfield">*</span></label>
                                       <input type="text" id="stuMname" name="stuMname" required="required" class="form-control" placeholder="Mother Name"   value="<?php echo $row["mother_name"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuMotherOccupation">Mother Occupation</label>
                                       <input type="text" id="mother_occupation" name="mother_occupation" class="form-control" placeholder="Mother Occupation"   value="<?php echo $row["mother_occupation"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuPaddress">Permanent Contact Address <span class="mdfield">*</span></label>
                                       <input type="text" id="permenant_address" name="permenant_address" required="required" class="form-control" placeholder="Permanent Address"  value="<?php echo $row["permenant_address"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuParentMobileno"> Mobile Number <span class="mdfield">*</span> </label>
                                       <input type="text" id="parent_mobile" name="parent_mobile" required="required" class="form-control" placeholder="Mobile Number "   value="<?php echo $row["parent_mobile"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="stuEmrcno">Emergency Contact Number <span class="mdfield">*</span> </label>
                                       <input type="text" id="emergency_contact_number" name="emergency_contact_number" required="required" class="form-control" placeholder="Emergency Contact Number "   value="<?php echo $row["emergency_contact_number"]; ?>">
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
<option value="<?php echo $rowr["country_id"]; ?>" <?php if($rowr["country_id"]==$row["parent_country_id"]){ echo "selected"; } ?>><?php echo $rowr["country_name"]; ?></option>
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
<option value="<?php echo $rowr["state_id"]; ?>" <?php if($rowr["state_id"]==$row["parent_state_id"]){ echo "selected"; } ?>><?php echo $rowr["state_name"]; ?></option>
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
                                       <input type="text" id="parent_email" name="parent_email" class="form-control" placeholder="Parents eMail id"   value="<?php echo $row["parent_email"]; ?>">
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="student_photo">Upload Parent Photo</label>
                                       <div class="card">
                                          <input id="parent_photo" name="parent_photo" type="file" class="form-control-file" accept="image/*" onchange="preview_image1(event)">
                                       </div>
                                    </div>
                                 </div>
								  <div class="col-md-3">
								  <div class="card-body text-center">
                      <div class="client-avatar"><img id="output_image1" src="../simages/<?php echo $row["parent_photo"]; ?>" alt="..." width="130">
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
                              <div class="row setup-content" id="step-3">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label class="control-label">Student Name</label> : <span id="step3_sname"></span>
                                    </div>
                                 </div>
<div class="col-md-12">
                                  <div class="row" id="afees">
                                    <?php
                                    $tot_fees=0;
									$sql1="select * from student_fees t1,fee_types t2 where t1.fee_type_id=t2.fee_type_id and t1.student_id='".$row["student_id"]."' and t1.year='".$row["current_year"]."' and t1.course_id='".$row["course_id"]."'";
$res1=$db->query($sql1);
while($row1=$db->fetch_array($res1))
{
 $tot_fees+=$row1["fees"];
?>
<div class="col-md-12">
<div class="form-group row">
   <label class="col-md-2 control-label" for="rafee"><?php echo $row1["fee_type"]; ?></label>                     
  <input type="number" min="0" required="required" id="<?php echo $row1["fee_type_id"]; ?>" name="<?php echo $row1["fee_type_id"]; ?>" class="col-md-3 form-control afees" placeholder="<?php echo $row1["fee_type"]; ?>" value="<?php echo $row1["fees"]; ?>" onBlur="calcatot()" />
</div>
</div>
<?php
}
									?>
									<div class="col-md-12">
<div class="form-group row">
   <label class="col-md-2 control-label" for="rafee">Total Fees</label>                     
  <input type="number" min="0" required="required" id="afeestot" name="tot_afees" class="col-md-3 form-control" value="<?php echo $tot_fees; ?>" readonly/>
</div>
</div>
                                 </div>
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
                                                                          <input id="transport_opted" type="radio" value="Yes" name="transport_opted" class="radio-template" onClick="getroutes('Yes')"  <?php if($row["transport_opted"]=="Yes"){ echo "checked"; } ?>>
                                                                          <label for="transport_opted">Yes</label>
                                                                      </div>
                                                                      <div class="i-checks in-block">
                                                                          <input id="transport_opted" type="radio" value="No" name="transport_opted"  class="radio-template tmpend" onClick="getroutes('No')"  <?php if($row["transport_opted"]=="No"){ echo "checked"; } ?>>
                                                                          <label for="stuTransportOpted2">No</label>
                                                                      </div>
                                                                  </div>
                                    </div> 
                                 
                               <div class="col-md-12">
                                <div class="row" id="transport">
								<?php
								 if($row["transport_opted"]=="Yes")
								 {
								      $sql1="select * from student_bus_routes where student_id='".$row["student_id"]."' and year='".$row["current_year"]."' and course_id='".$row["course_id"]."'";
										 $res1=$db->query($sql1);
										 $row1=$db->fetch_array($res1);
								 ?>
								 
<div class="col-md-3">
 <div class="form-group">
<label class="control-label" for="stuTransNumber">Route Number/Name</label>
   <select id="bus_route_id" name="bus_route_id" class="form-control" required onChange="getrfees()">

	   <option value="">Select Bus Route</option>
<?php
$sqlr="select * from bus_routes";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["bus_route_id"]; ?>" <?php if($row1["bus_route_id"]==$rowr["bus_route_id"]){ echo "selected";} ?>><?php echo $rowr["route_name"]; ?></option>
<?php
}
?>
</select>
</div>
</div>
 <div class="col-md-3">
 <div class="form-group">
<label class="control-label" for="trsFees">Route Fees  </label>
 <input type="number" min="0" id="transport_fees" name="transport_fees" required="required" class="form-control" placeholder="Route Fees" value="<?php echo $row1["transport_fees"]; ?>">
 </div>
</div>
								 <?php
								 }
								 ?>
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
                                                                          <input id="hostel_opted" type="radio" value="Yes" name="hostel_opted" class="radio-template" onClick="gethostels('Yes')"  <?php if($row["hostel_opted"]=="Yes"){ echo "checked"; } ?>>
                                                                          <label for="transport_opted">Yes</label>
                                                                      </div>
                                                                      <div class="i-checks in-block">
                                                                          <input id="hostel_opted" type="radio" value="No" name="hostel_opted" class="radio-template tmpend" onClick="gethostels('No')"  <?php if($row["hostel_opted"]=="No"){ echo "checked"; } ?>>
                                                                          <label for="stuTransportOpted2">No</label>
                                                                      </div>
                                                                  </div>
                                    </div> 
                                 
<div class="col-md-12">
                              
                                <div class="row" id="hostel">
								<?php
								 if($row["hostel_opted"]=="Yes")
								 {
								         $sql1="select * from student_hostels where student_id='".$row["student_id"]."' and year='".$row["current_year"]."' and course_id='".$row["course_id"]."'";
										 $res1=$db->query($sql1);
										 $row1=$db->fetch_array($res1);
								 ?>
<div class="col-md-3">
<div class="form-group">
<label class="control-label" for="stuHostelOpt">Hostel Details</label>
<select class="form-control" id="hostel_id" name="hostel_id" onChange="gethfees()">

 <option value="">Select Hostel</option>
 <?php
$sqlr="select * from hostel_details";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
  <option value="<?php echo $rowr["hostel_id"]; ?>" <?php if($row1["hostel_id"]==$rowr["hostel_id"]){ echo "selected";} ?>><?php echo $rowr["hostel_name"]; ?></option>
<?php
}
?>
</select>
  </div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="control-label" for="stuHostelOpt">Hostel Details</label>
<select class="form-control" id="hostel_option" name="hostel_option" onChange="gethfees()">
 <option value="">Select Hostel Option</option>
  <option value="hfees"  <?php if($row1["opted_for"]=="Accommodation Only"){ echo "selected";} ?>>Accommodation Only</option>
  <option value="mfees"  <?php if($row1["opted_for"]=="Accommodation with Food"){ echo "selected";} ?>>Accommodation with Food</option>
</select>
  </div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="hostelFees">Hostel Fees  </label>
        <input type="number" min="0" id="hostel_fees" name="hostel_fees"  class="form-control" placeholder="Hostel Fees" value="<?php echo $row1["hostel_fees"]; ?>">
</div>
</div>
								 <?php
								 }
								?>
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
                                    <button class="btn btn-success btn-lg pull-right" type="submit">Save & Update</button>
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
    var sid=document.getElementById("student_id").value;
      document.getElementById("sname").innerHTML="<input type=\"text\"  id=\"sibling_name\" name=\"sibling_name\" class=\"form-control\" placeholder=\"Click to Select Sibling\" onClick=\"openWindow('search_students_edit.php?sid="+sid+"');\" required=\"required\">";
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
					  
					    $("#stuMname").val($("#mother_name").val());
				   }
				   else  if(curStepBtn=="step-2")
				   {
				    $("#step3_sname").html($("#first_name").val()+" "+$("#last_name").val());
				   //getafees();
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
function preview_image1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image1');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
  </body>

</html>