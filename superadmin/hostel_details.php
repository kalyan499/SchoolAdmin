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

              <h2 class="no-margin-bottom">Hostel Details</h2>

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
<form method="post" action="hostel_update.php" id="formID" class="form-horizontal">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="book_name">Hostel Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="hostel_name" name="hostel_name" class="col-xs-10 col-sm-5 form-control" placeholder="Hostel Name" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="isbn">No. of Rooms:</label>

	   <div class="col-sm-9">

    <input type="text" id="num_of_rooms" name="num_of_rooms" class="col-xs-10 col-sm-5 form-control" placeholder="No. of Rooms" required>

	</div>
</div>

<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="purchase_amount">Hostel Fees:</label>

	   <div class="col-sm-9">

    <input type="text" id="hostel_fees" name="hostel_fees" class="col-xs-10 col-sm-5 form-control" placeholder="Hostel Fees" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="availability">Mess Fees:</label>

	   <div class="col-sm-9">

    <input type="text" id="mess_fees" name="mess_fees" class="col-xs-10 col-sm-5 form-control" placeholder="Mess Fees" required>

	</div>
</div>

<div class="form-actions"> <div class="col-sm-9 offset-sm-3">

  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>

   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>

  </div>

</form>
                      <div class="table-responsive">
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">Hostel Name</th>
<th scope="col">No. of Rooms</th>
<th scope="col">Hostel Fees</th>
<th scope="col">Mess Fees</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php 
include("dbconnect.php");
$db->connect();
$sn=1;
$sql="select * from hostel_details";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["hostel_name"]; ?></td>
<td><?php echo $row["num_of_rooms"]; ?></td>
<td><?php echo $row["hostel_fees"]; ?></td>
<td><?php echo $row["mess_fees"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="hostel_edit.php?hostel_id=<?php echo $row["hostel_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="hostel_delete.php?hostel_id=<?php echo $row["agent_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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