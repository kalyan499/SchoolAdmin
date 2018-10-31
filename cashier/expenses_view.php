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

          <!-- Page Navigation Tabs Header-->   
				<div class="os-tabs-w menu-shad">
				<div class="os-tabs-controls">
				<ul class="nav nav-tabs upper">
				<li class="nav-item">
				<a class="nav-link active" href="expenses_view.php"><span>Expenses</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="expense_types_view.php"><span>Expense Types</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><span>Pending Approvals</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><span>Approved Expenses</span></a>
				</li>
				
				</ul>
				</div>
				</div>
          <!-- Page Header-->
          <!-- Dashboard Counts Section-->

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
              <a class="nav-link active"  href="expenses_view.php">Expenses Lists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="expenses_form.php">Add New Expense</a>
            </li> 
           </ul>
         </div>
        </div>
		<br>
		                                      <div class="card-header align-items-center">

                      <div class="card-comps pull-right">
<?php
if(isset($_SESSION["vsims_msg"]))
{
?>
<h5><?php echo $_SESSION["vsims_msg"]; ?></h5>
<?php
unset($_SESSION["vsims_msg"]);
}
?>	
						
						</div>

					  <div class="clearfix"></div>

                    </div>
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">Expense Type</th>
<th scope="col">Expense Date</th>
<th scope="col">Paid Amount</th>
<th scope="col">Payment Mode</th>
<th scope="col">Paid By</th>
<th scope="col">Remarks</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php include("dbconnect.php");
$db->connect();
$sn=1;
$sql="select * from expenses t1,expense_types t2 where t1.expense_type_id=t2.expense_type_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["expense_type"]; ?></td>
<td><?php echo $row["expense_date"]; ?></td>
<td><?php echo $row["expense_amount"]; ?></td>
<td><?php echo $row["payment_mode"]; ?></td>
<td><?php echo $row["paid_by"]; ?></td>
<td><?php echo $row["remarks"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="expenses_edit.php?expense_id=<?php echo $row["expense_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="expenses_delete.php?expense_id=<?php echo $row["expense_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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