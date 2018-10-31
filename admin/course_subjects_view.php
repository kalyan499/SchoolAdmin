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
<th scope="col">Course</th>
<th scope="col">Subject</th>
<th scope="col">Sem</th>
<th scope="col">Teacher</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php include("dbconnect.php");
$db->connect();
$sn=1;
$sql="select * from course_subjects t1,courses t2,subjects t3,employees t4 where t1.course_id=t2.course_id and t1.subject_id=t3.subject_id and t1.employee_id=t4.employee_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["course_name"]; ?></td>
<td><?php echo $row["subject_name"]; ?></td>
<td><?php echo $row["sem"]; ?></td>
<td><?php echo $row["first_name"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="course_subjects_edit.php?course_subject_id=<?php echo $row["course_subject_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="course_subjects_delete.php?course_subject_id=<?php echo $row["course_subject_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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