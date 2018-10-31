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
$student_id=$row["student_id"];
$course_id=$row["course_id"];
$year=$row["current_year"];
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
<h1 class="no-margin-bottom">Mount Carmel Central School.</h1>
<p class="no-margin-bottom">Vasanth Nagar, Bengaluru, ,
<br> Karnataka 560051</p>
</div>
<div class="col-md-3 text-right"><img alt="User Pic" src="../simages/<?php echo $row["student_photo"]; ?>" width="130"> </div>
</div>
<hr />
<div class="row">
<div class="col-md-12">
<h3>Student Details</h3>
<table class="table table-bordered">
<thead>
<tr>

<th>Student Name</th>

<th>Gender</th>
<th>Date of Birth</th>
</tr>
</thead>
						<tbody>
						<tr>
							
							<td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
						
							
						 
							
							<td><?php echo $row["gender"]; ?></td>
							<td><?php echo $row["date_of_birth"]; ?></td>
						  </tr>
						  <tr>
<th>Roll Number</th>
<th>Grade Section</th>
<th>Grade</th>
</tr>
<tr>
							<td><?php echo $row["roll_number"]; ?></td>
							
						
							
						 
							<td><?php echo $row["course_name"]; ?></td>
						  
							<td><?php echo $row["current_year"]; ?></td>
						
						  </tr>
						  </tbody>
					</table>
</div>
</div>

              <div class="row">
                <div class=" col-md-12"> 
                <h3 class="m-t-10">Personal Details</h3>
                  <table class="table table-bordered">
                  <thead>
                   <tr>
                      <th  colspan="3">Student Address</th>
                   
                   </tr>             
                  </thead>
                    <tbody>
					   
                   <tr>
                        
                        <td  colspan="3"><?php echo $row["address"]; ?></td>
                     
                       
                      </tr>
                       <tr>
                     
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Aadhar Number</th>
                   </tr>    
                    <tr>
                      
                     
                        
                        <td><a href="mailto:<?php echo $row["email"]; ?>"><?php echo $row["email"]; ?></a></td>
                      
                        <td><?php echo $row["mobile"]; ?>
                        </td>
                        
                        <td><?php echo $row["aadhar_number"]; ?></td>
                      </tr>   
                      </tbody>
					</table>
</div>
</div>

              <div class="row">
                <div class=" col-md-12"> 
                <h3 class="m-t-10">Parent Details</h3>
                  <table class="table table-bordered">
                  <thead>
                   <tr>
                   <th>Father Name</th>
                   <th>Father Education</th>
                   <th>Father Occupation</th>
                  <th>Mother Name</th>
                  <th>Mother Education</th>
                   <th>Mother Occupation</th>
                   </tr>
                   </thead>
                   <tbody>
                      
					  <tr>
                        
                        <td><?php echo $row["father_first_name"]." ".$row["father_last_name"]; ?></td>
                         <td><?php echo $row["father_education"]; ?></td>                      
                        <td><?php echo $row["father_occupation"]; ?></td>
                          <td><?php echo $row["mother_first_name"]." ".$row["mother_last_name"]; ?></td>
                        <td><?php echo $row["mother_education"]; ?></td>
                        <td><?php echo $row["mother_occupation"]; ?></td>
                      
                        
               
                        </td>
                           
                      </tr>
             
                        <tr>
                 
                    <th  colspan="5">Parent Address</th>
                
                   </tr>
                        <tr>
                        
                       
                        
                        <td  colspan="5"><?php echo $row["permenant_address"]; ?></td>
                                              
                    
                        </td>
                           
                      </tr>
			<tr>
                 
                  
                    <th  colspan="2">Email</th>
                    <th colspan="2">Phone Number</th>
                   </tr>	
                   <tr>
                        
                       
                        
                       
                                              
                        <td colspan="2"><a href="mailto:<?php echo $row["parent_email"]; ?>"><?php echo $row["parent_email"]; ?></a></td>
                      
                        <td colspan="2"><?php echo $row["parent_mobile"]; ?>
                        </td>
                           
                      </tr>	  
                    </tbody>
                  </table>
             </div>
             </div>
              <div class="row">
                <div class=" col-md-12"> 
                <br><br><br>
                <h3 class="m-t-10">Fees Details</h3>
                <table class="table table-bordered">
											
											<tr>
												<th>Fees Type</th>
												<th>Fees</th>
												<th>Paid till date</th>
												
												<th>Balance</th>
											</tr>
											<?php
											$tot_fees=$tot_paid=$tot_paying=$tot_balance=0;
 $sqlr="select * from student_fees sf,fee_types ft where sf.fee_type_id=ft.fee_type_id and sf.year='$year' and student_id='$student_id' and course_id='$course_id'";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
  $fees=$rowr["fees"];
$paid_till_date=0;
   $sqlp="select sum(fees_paid) as amt from student_payment_fees spf,student_payments sp where spf.student_payment_id=sp.student_payment_id and fee_type_id='".$rowr["fee_type_id"]."' and year='$year' and student_id='$student_id' and course_id='$course_id'";
$resp=$db->query($sqlp);
 if($rowp=$db->fetch_array($resp))
 $paid_till_date=$rowp["amt"];
  $balance=$fees-$paid_till_date;
  $tot_fees+=$fees;
 $tot_paid+=$paid_till_date;
$tot_balance+=$balance;
?>
											<tr>
											<td><?php echo $rowr["fee_type"]; ?></td>
											<td><div style="text-align:  right;" id="fees<?php echo $rowr["fee_type_id"]; ?>"><?php echo $rowr["fees"]; ?></div></td>
											<td><div style="text-align:  right;" id="feespaid<?php echo $rowr["fee_type_id"]; ?>"><?php echo $paid_till_date; ?></div></td>
											
											<td><div style="text-align:  right;" id="bal<?php echo $rowr["fee_type_id"]; ?>" class="bal"><?php echo $balance; ?></div></td>
											</tr>
											
											<?php
											}
   											
			$sql2="select * from student_hostels where year='$year' and student_id='$student_id' and course_id='$course_id'";
			$res2=$db->query($sql2);
			if($row2=$db->fetch_array($res2))
			{
			   $hfees=$row2["hostel_fees"];
			       $sqlhp="select sum(fees_paid) as amt from student_payment_hostel_fees spf,student_payments sp where spf.student_payment_id=sp.student_payment_id and year='$year' and student_id='$student_id' and course_id='$course_id'";
$reshp=$db->query($sqlhp);
 if($rowhp=$db->fetch_array($reshp))
 $hpaid_till_date=$rowhp["amt"];
  $hbalance=$hfees-$hpaid_till_date;
   $tot_fees+=$hfees;
 $tot_paid+=$hpaid_till_date;
			?>
			<tr>
											<td>Hostel Fees</td>
											<td><div style="text-align:  right;" id="feesh"><?php echo $row2["hostel_fees"]; ?></div></td>
											<td><div style="text-align:  right;" id="feespaidh"><?php echo $hpaid_till_date; ?></div></td>
											
											<td><div style="text-align:  right;" id="balh" class="bal"><?php echo $hbalance; ?></div></td>
											</tr>
			<?php
			}
			$sql2="select * from student_bus_routes where year='$year' and student_id='$student_id' and course_id='$course_id'";
			$res2=$db->query($sql2);
			if($row2=$db->fetch_array($res2))
			{
			   $tfees=$row2["transport_fees"];
			       $sqltp="select sum(fees_paid) as amt from student_payment_transport_fees spf,student_payments sp where spf.student_payment_id=sp.student_payment_id and year='$year' and student_id='$student_id' and course_id='$course_id'";
$restp=$db->query($sqltp);
 if($rowtp=$db->fetch_array($restp))
 $tpaid_till_date=$rowtp["amt"];
  $tbalance=$tfees-$tpaid_till_date;
   $tot_fees+=$tfees;
 $tot_paid+=$tpaid_till_date;
			?>
			<tr>
											<td>Transport Fees</td>
											<td><div style="text-align:  right;" id="feest"><?php echo $row2["transport_fees"]; ?></div></td>
											<td><div id="feespaidt"><?php echo $tpaid_till_date; ?></div></td>
											
											<td><div style="text-align:  right;" id="balt" class="bal"><?php echo $tbalance; ?></div></td>
											</tr>
			<?php
			}
											$db->close();
											?>
											<tr>
												<th>Total</th>
												<th><div style="text-align:  right;" id="totfees"><?php echo $tot_fees; ?></div></th>
												<th><div style="text-align:  right;" id="totpt"><?php echo $tot_paid; ?></div></th>
												
												<th><div style="text-align:  right;" id="totb"><?php echo $tot_fees-$tot_paid-$tot_paying; ?></div></th>
											</tr>
										</table>
              <div class="student_details text-right" style="margin-top:20px">
			<a href="all_students.php" class="btn btn-info" ><i class="fa fa-chevron-left"></i> Back</a>   <button class="btn btn-primary" onclick="myFunction()"><i class="fa fa-print"></i> Print</button>
			  </div>
                </div>
				
              </div>
            </div>
                 
            
          </div>
                       
                    </div>
                </div>
              
           
      
				</div>
				 
				

          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>

  <?php include("scripts1.php"); ?>
  <script>
		function myFunction() {
				
				$(".student_details").css("display", "none"); 
				window.print();
				
		}
		
	</script>
  </body>

</html>