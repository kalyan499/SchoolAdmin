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
				<a class="nav-link" href="all_students.php"><i class="os-icon picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i><span>Students</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0706_user_profile_add_new"></i><span>Student Promotion</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link active" href="#"><i class="os-icon picons-thin-icon-thin-0714_identity_card_photo_user_profile"></i><span>Student Details</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Student Invoice</span></a>
				</li>
				
				</ul>
				</div>
				</div>
          <!-- Page Header-->

         

          <!-- Dashboard Counts Section-->
<?php
include("dbconnect.php"); 
$db->connect(); 
$sql="select * from students s,religions r,courses c,categories c1,castes c2,countries c3,states s1 where s.course_id=c.course_id and s.religion_id=r.religion_id and s.category_id=c1.category_id and s.caste_id=c2.caste_id and s.country_id=c3.country_id and s.state_id=s1.state_id and student_id='".$_REQUEST["sid"]."'";
$res=$db->query($sql);
$row=$db->fetch_array($res);
?>						
          <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
					    <h2 class="no-margin-bottom">Student Details</h2>
                    </div>
                </header>
                <!-- Dashboard Counts Section-->
		  
		  
		  <section class="dashboard-counts">
            <div class="container-fluid">
           
                   <div class="card">
                
                    <div class="body">
<div class="panel panel-info" style="border-color: #bce8f1; ">
            <div class="panel-heading" style="color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1; ">
              <h3 class="panel-title"><?php echo $row["first_name"]." ".$row["last_name"]; ?></h3>
            </div>
            <div class="panel-body">
<div class="row">
<div class="col-md-3"><img src="../img/school_logo.png" alt="Sofia Group Of Institution"  width="130"></div>
<div class="col-md-6 text-center xs-p-20">
<h5 class="no-margin-bottom"></h5>
<h1 class="no-margin-bottom">MOUNT CARMEL CENTRAL SCHOOL</h1>
<p class="no-margin-bottom">Bangalore - 560 064</p>
</div>
<div class="col-md-3 text-right"><img alt="User Pic" src="../simages/<?php echo $row["student_photo"]; ?>" width="130"> </div>
</div>
<hr />
<div class="row">
<div class="col-md-12">
<h3>Student Details</h3>
<table class="table table-user-information">
						<tbody>
						<tr>
							<td  width="220">Name:</td>
							<td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
						  </tr>
						<tr>
							<td>Roll Number:</td>
							<td><?php echo $row["roll_number"]; ?></td>
						  </tr>
						  <tr>
							<td>Grade Section:</td>
							<td><?php echo $row["course_name"]; ?></td>
						  </tr>
						  <tr>
							<td>Grade:</td>
							<td><?php echo $row["current_year"]; ?></td>
						  </tr>
						  
						  </tbody>
					</table>
</div>
</div>

              <div class="row">
                <div class=" col-md-12"> 
                <h3 class="m-t-10">Personal Details</h3>
                  <table class="table table-user-information">
                    <tbody>
					   
                   <tr>
                        <td width="220">Student Address</td>
                        <td><?php echo $row["address"]; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:<?php echo $row["email"]; ?>"><?php echo $row["email"]; ?></a></td>
                      </tr>
                      <tr><td>Phone Number</td>
                        <td><?php echo $row["mobile"]; ?>
                        </td>
                      </tr>
					  <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $row["date_of_birth"]; ?></td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td><?php echo $row["gender"]; ?></td>
                      </tr>
					   <tr>
                        <td>Aadhar Number</td>
                        <td><?php echo $row["aadhar_number"]; ?></td>
                      </tr>
                      
					  <tr>
                        <td>Father Name:</td>
                        <td><?php echo $row["father_name"]; ?></td>
                      </tr>
                      
					   <tr>
                        <td>Father Occupation:</td>
                        <td><?php echo $row["father_occupation"]; ?></td>
                      </tr>
                      <tr>
                        <td>Mother Name:</td>
                        <td><?php echo $row["mother_name"]; ?></td>
                      </tr>
					  <tr>
                        <td>Mother Occupation:</td>
                        <td><?php echo $row["mother_occupation"]; ?></td>
                      </tr>
                     
                        <tr>
                        <td>Parent Address</td>
                        <td><?php echo $row["permenant_address"]; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:<?php echo $row["parent_email"]; ?>"><?php echo $row["parent_email"]; ?></a></td>
                      </tr>
                        <tr><td>Phone Number</td>
                        <td><?php echo $row["parent_mobile"]; ?>
                        </td>
                           
                      </tr>
                <!--     <tr>
                        <td>Religion</td>
                        <td><?php echo $row["religion_name"]; ?></td>
                      </tr>
					   <tr>
                        <td>Caste</td>
                        <td><?php echo $row["caste_name"]; ?></td>
                      </tr>
					   <tr>
                        <td>Category</td>
                        <td><?php echo $row["category_name"]; ?></td>
                      </tr> -->
					  
                    </tbody>
                  </table>
              <div class="student_details">
			   <button class="btn btn-primary pull-right" onclick="myFunction()">Print</button>
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
		function myFunction() {
				
				$(".student_details").css("display", "none"); 
				window.print();
				
		}
		
	</script>
  </body>

</html>