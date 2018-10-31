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

              <h2 class="no-margin-bottom">Dashboard</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="tables">
   
            <div class="container-fluid">

              <div class="row">

                <div class="col-lg-12">

                  <div class="card">

                    <div class="card-header align-items-center">

                      <div class="card-comps pull-right">

						
						</div>

					  <div class="clearfix"></div>

                    </div>

                    <div class="card-body">

                      <div class="table-responsive">
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">First Name</th>
<th scope="col">Middle Name</th>
<th scope="col">Last Name</th>
<th scope="col">Mother Name</th>
<th scope="col">Gender</th>
<th scope="col">Date Of Birth</th>
<th scope="col">Employee Photo</th>
<th scope="col">Address</th>
<th scope="col">Mobile</th>
<th scope="col">Email</th>
<th scope="col">Aadhar Number</th>
<th scope="col">Employee Type</th>
<th scope="col">Employee Code</th>
<th scope="col">Pan Number</th>
<th scope="col">Emergency Number</th>
<th scope="col">Joining Date</th>
<th scope="col">Job Type</th>
<th scope="col">Payment Mode</th>
<th scope="col">Bank Account Number</th>
<th scope="col">Confirmation Period</th>
<th scope="col">Department</th>
<th scope="col">Location</th>
<th scope="col">Designation</th>
<th scope="col">PF Enabled</th>
<th scope="col">PF UAN</th>
<th scope="col">PF Number</th>
<th scope="col">PF Enrollment Date</th>
<th scope="col">EPF Number</th>
<th scope="col">Relationship</th>
<th scope="col">EPS Enabled</th>
<th scope="col">ESI Enabled</th>
<th scope="col">ESI Number</th>
<th scope="col">Basic Salary</th>
<th scope="col">Approval Status</th>
<th scope="col">Registration Date</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php include("dbconnect.php");
$db->connect();
$sn=1;
$sql="select * from employees t1,employee_types t2,job_types t3,departments t4,locations t5,designations t6 where t1.employee_type_id=t2.employee_type_id and t1.job_type_id=t3.job_type_id and t1.department_id=t4.department_id and t1.location_id=t5.location_id and t1.designation_id=t6.designation_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["middle_name"]; ?></td>
<td><?php echo $row["last_name"]; ?></td>
<td><?php echo $row["mother_name"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["date_of_birth"]; ?></td>
<td><?php echo $row["employee_photo"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["mobile"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["aadhar_number"]; ?></td>
<td><?php echo $row["employee_type"]; ?></td>
<td><?php echo $row["employee_code"]; ?></td>
<td><?php echo $row["pan_number"]; ?></td>
<td><?php echo $row["emergency_number"]; ?></td>
<td><?php echo $row["joining_date"]; ?></td>
<td><?php echo $row["job_type_name"]; ?></td>
<td><?php echo $row["payment_mode"]; ?></td>
<td><?php echo $row["bank_account_number"]; ?></td>
<td><?php echo $row["confirmation_period"]; ?></td>
<td><?php echo $row["department_name"]; ?></td>
<td><?php echo $row["location"]; ?></td>
<td><?php echo $row["designation"]; ?></td>
<td><?php echo $row["is_pf_enabled"]; ?></td>
<td><?php echo $row["pf_uan"]; ?></td>
<td><?php echo $row["pf_number"]; ?></td>
<td><?php echo $row["pf_enrollment_date"]; ?></td>
<td><?php echo $row["epf_number"]; ?></td>
<td><?php echo $row["relationship"]; ?></td>
<td><?php echo $row["is_eps_enabled"]; ?></td>
<td><?php echo $row["is_esi_enabled"]; ?></td>
<td><?php echo $row["esi_number"]; ?></td>
<td><?php echo $row["basic_salary"]; ?></td>
<td><?php echo $row["approval_status"]; ?></td>
<td><?php echo $row["registration_date"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="employees_edit.php?employee_id=<?php echo $row["employee_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="employees_delete.php?employee_id=<?php echo $row["employee_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
</tr>
<?php
}
?>
</tbody>
</table>
<?php $db->close(); ?>
</div>

                    </div>

                  </div>

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

  </body>

</html>