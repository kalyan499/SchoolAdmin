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
<th scope="col">Employee</th>
<th scope="col">Paid Date</th>
<th scope="col">Payout Month</th>
<th scope="col">Payout Year</th>
<th scope="col">Basic Salary</th>
<th scope="col">Approval Status</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php include("dbconnect.php");
$db->connect();
$sn=1;
$sql="select * from employee_payouts t1,employees t2 where t1.employee_id=t2.employee_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["paid_date"]; ?></td>
<td><?php echo $row["payout_month"]; ?></td>
<td><?php echo $row["payout_year"]; ?></td>
<td><?php echo $row["basic_salary"]; ?></td>
<td><?php echo $row["approval_status"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="employee_payouts_edit.php?employee_payout_id=<?php echo $row["employee_payout_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="employee_payouts_delete.php?employee_payout_id=<?php echo $row["employee_payout_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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