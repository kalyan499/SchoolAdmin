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
<!-- Page Header-->
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
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0714_identity_card_photo_user_profile"></i><span>Student Details</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link active" href="student_payments_view.php"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Student Invoice</span></a>
				</li>
				
				</ul>
				</div>
				</div>
             <!--    <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Student Invoice</h2>
                    </div>
                </header> -->
                <!-- Dashboard Counts Section-->
                       <?php
	  include("dbconnect.php"); 
$spid=$_REQUEST["student_payment_id"];	  
$db->connect(); 
$sql="select * from student_payments sp,students s,courses c where sp.student_id=s.student_id and s.course_id=c.course_id and sp.student_payment_id='$spid'";
$res=$db->query($sql);
$row=$db->fetch_array($res);
$sql1="select * from school_settings";
$res1=$db->query($sql1);
$row1=$db->fetch_array($res1);
	  ?>      
			    <section class="dashboard-counts">
                    <div class="container-fluid">

                        <div class="recent-updates card">

                            <div class="card-body no-padding">

                                <div class="card invoice_copy">
                                    <div class="body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="text-center">FEE RECEIPT</h4>
                                                <div class="clearfix">
                                                    <div class="float-left">
                                                        <p>Sl. No <strong>426</strong>
                                                        </p>
                                                    </div>
                                                    <div class="float-right">
                                                        <p><strong>Date: </strong> <?php echo formatDate($row["paid_date"]); ?></p>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-20">
                                                    <address>
                                      Name of the Student <strong><?php echo $row["first_name"]." ".$row["last_name"]; ?></strong><br>
                                      Son / Daughter of <strong><?php echo $row["father_name"]; ?></strong>
									   </address>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="i-checks">
                                                    <label for="mscn"><?php echo $row["course_name"]; ?></label> &nbsp; &nbsp;
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="i-checks pull-right">
                                                    <label>Class:</label> &nbsp; &nbsp;
                                                    <label for="msc1"><?php echo $row["current_year"]; ?></label> &nbsp; &nbsp;
                                                   
                                                </div>
                                            </div>
                                        </div>

                              

                                        <div class="mt-40"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-striped no-margin-bottom">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Particulars</th>
                                                                <th class="text-right" width="160">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
														<?php
										$tot=0;
										$sn=1;
										   $sql1="select * from student_payment_fees spf,fee_types ft where spf.fee_type_id=ft.fee_type_id and spf.student_payment_id='$spid'";
										   $res1=$db->query($sql1);
										   while($row1=$db->fetch_array($res1))
										   {
										      $tot+=$row1["fees_paid"];
										?>
                                                            <tr>
                                                                <td><?php echo $sn++; ?></td>
                                                                <td><?php echo $row1["fee_type"]; ?></td>
                                                                <td class="text-right">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="aplnfee"><i class="fa fa-rupee"></i></span>
                                                                        </div>
                                                                       <input type="text" class="form-control text-right" id="aplnfee" value="<?php echo $row1["fees_paid"]; ?>" readonly=""/>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                              <?php
											}
											
										
										   $sql1="select * from student_payment_hostel_fees  where student_payment_id='$spid'";
										   $res1=$db->query($sql1);
										   if($row1=$db->fetch_array($res1))
										   {
										    $tot+=$row1["fees_paid"];
										   
										?>
                                       <tr>
                                                                <td><?php echo $sn++; ?></td>
                                                                <td>Hostel Fees</td>
                                                                <td class="text-right">
                                                                    <div class="input-group">
                                                                       <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="aplnfee"><i class="fa fa-rupee"></i></span>
                                                                        </div>
                                                                      <input type="text" class="form-control text-right" id="aplnfee" value="<?php echo $row1["fees_paid"]; ?>" readonly=""/>
                                                                    </div>
                                                                </td>
                                                            </tr>
															
															 <?php
											}
											 $sql1="select * from student_payment_transport_fees  where student_payment_id='$spid'";
										   $res1=$db->query($sql1);
										   if($row1=$db->fetch_array($res1))
										   {
										    $tot+=$row1["fees_paid"];
										?>
															  <tr>
                                                                <td><?php echo $sn++; ?></td>
                                                                <td>Transport Fees</td>
                                                                <td class="text-right">
                                                                    <div class="input-group">
                                                                       <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="aplnfee"><i class="fa fa-rupee"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control text-right" id="aplnfee" value="<?php echo $row1["fees_paid"]; ?>" readonly=""/>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php
											}
											?>
                                                        </tbody>
                                                        <tfoot>
                                                            <td colspan="2" class="text-right"><strong>Total</strong></td>
                                                            <td class="text-right">
                                                                <div class="input-group">
																<div class="input-group-prepend">
                                                                            <span class="input-group-text" id="aplnfee"><i class="fa fa-rupee"></i></span>
                                                                        </div>
																<input type="text" class="form-control text-right" id="aplnfee" value="<?php echo $tot; ?>" readonly=""/>
                                                                </div>
                                                            </td>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 text-right">
                                            
                                                <hr>
                                                <h3>Rs. <?php echo $tot; ?></h3>
                                                <hr>
                                                <a class="btn btn-primary" href="student_payments_update.php?spid=<?php echo $spid; ?>">Approve</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>

                        </div>
                    </div>
				</section>


          <!-- Dashboard Counts Section-->



          <!-- Page Footer-->
<?php $db->close(); ?>
         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>
	 <?php include("scripts.php"); ?>
<script>
		function myFunction() {
				alert("The Invoice copy has been generated successfullly!..");
				$(".invoice_copy").css("display", "none"); 
				window.print();
				 window.location = "student_payments_view.php";
		}
		
	</script>
  </body>

</html>
<?php
function formatDate($adate)
{
    
	$ad=explode("-",$adate);
	return $ad[2]."-".$ad[1]."-".$ad[0];
}
?>