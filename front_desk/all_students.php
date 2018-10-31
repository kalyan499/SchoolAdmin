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
				<!-- <li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Student Invoice</span></a>
				</li> -->
				
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
              <a class="nav-link active" data-toggle="tab" href="#stu_lists">Student Lists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admission_form.php">Add New Student</a>
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
                                                        <th>Admission Date</th>
														<th>Name</th>
                                                        <th>Gender</th>
                                                        <th>Parents Name</th>
                                                        <th>Grade Section</th>
                                                        <th>Grade</th>
														<th>RTE</th>
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
														<td><?php echo formatADate($row["registration_date"]); ?></td>
                                                        <td>
                                                            <a href="student_details.php?sid=<?php echo $row["student_id"]; ?>"><?php echo $row["first_name"]." ".$row["last_name"]; ?></a>
                                                        </td>
                                                        <td><?php echo $row["gender"]; ?></td>
                                                        <td><?php echo $row["father_name"]; ?></td>
                                                        <td><?php echo $row["course_name"]; ?></td>
                                                        <td><?php echo $row["current_year"]; ?></td>
														  <td><?php echo $row["rte"]; ?></td>
                                                        <td><?php echo $row["address"]; ?></td>
                                                        <td><?php echo $row["date_of_birth"]; ?></td>
                                                        <td><?php echo $row["mobile"]; ?></td>
                                                        <td><?php echo $row["email"]; ?></td>
                                                        <td>
                                                            <div class="hidden-sm hidden-xs btn-group">
                                                                <a href="student_details.php?sid=<?php echo $row["student_id"]; ?>" class="btn btn-sm btn-success">
                                                                    <i class="ace-icon fa fa-eye bigger-120"></i>
                                                                </a>
                                                                <a class="btn btn-sm btn-info" href="admission_edit.php?student_id=<?php echo $row["student_id"]; ?>">
                                                                    <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                                </a>
                                                              
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
  
  </body>

</html>
<?php
function formatADate($adate)
{
    $adates=explode(" ",$adate);
	$adate=$adates[0];
	$ad=explode("-",$adate);
	return $ad[2]."-".$ad[1]."-".$ad[0];
}
?>