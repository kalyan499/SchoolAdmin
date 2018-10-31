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
<th scope="col">Sudent Photo</th>
<th scope="col">Address</th>
<th scope="col">Mobile</th>
<th scope="col">Email</th>
<th scope="col">Aadhar Number</th>
<th scope="col">Admission Number</th>
<th scope="col">Roll Number</th>
<th scope="col">Religion</th>
<th scope="col">Caste</th>
<th scope="col">Category</th>
<th scope="col">Rte</th>
<th scope="col">Emergency Contact Number</th>
<th scope="col">Hostel Opted</th>
<th scope="col">Transport Opted</th>
<th scope="col">Agent</th>
<th scope="col">Bus Route</th>
<th scope="col">Parent Mobile</th>
<th scope="col">Parent Email</th>
<th scope="col">Course/Section</th>
<th scope="col">Current Class/Sem</th>
<th scope="col">Registration Date</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php include("dbconnect.php");
$db->connect();
$sn=1;
$sql="select * from students t1,religions t2,castes t3,categories t4,agents t5,bus_routes t6,courses t7 where t1.religion_id=t2.religion_id and t1.caste_id=t3.caste_id and t1.category_id=t4.category_id and t1.agent_id=t5.agent_id and t1.bus_route_id=t6.bus_route_id and t1.course_id=t7.course_id";
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
<td><?php echo $row["sudent_photo"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["mobile"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["aadhar_number"]; ?></td>
<td><?php echo $row["admission_number"]; ?></td>
<td><?php echo $row["roll_number"]; ?></td>
<td><?php echo $row["religion_name"]; ?></td>
<td><?php echo $row["caste_name"]; ?></td>
<td><?php echo $row["category_name"]; ?></td>
<td><?php echo $row["rte"]; ?></td>
<td><?php echo $row["emergency_contact_number"]; ?></td>
<td><?php echo $row["hostel_opted"]; ?></td>
<td><?php echo $row["transport_opted"]; ?></td>
<td><?php echo $row["agent_name"]; ?></td>
<td><?php echo $row["route_number"]; ?></td>
<td><?php echo $row["parent_mobile"]; ?></td>
<td><?php echo $row["parent_email"]; ?></td>
<td><?php echo $row["course_name"]; ?></td>
<td><?php echo $row["current_class_sem"]; ?></td>
<td><?php echo $row["registration_date"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="students_edit.php?student_id=<?php echo $row["student_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="students_delete.php?student_id=<?php echo $row["student_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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