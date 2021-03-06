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

              <h2 class="no-margin-bottom">Add New Bus Routes</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="dashboard-counts no-padding-bottom">

            <div class="container-fluid">

              <div class="row bg-white has-shadow">

               <div class="col-lg-12" >
<?php include("dbconnect.php"); 
$db->connect(); ?>
<form method="post" action="bus_routes_insert.php" id="formID" class="form-horizontal">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="route_number">Route Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="route_number" name="route_number" class="col-xs-10 col-sm-5 form-control" placeholder="Route Number:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="route_number">Route Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="route_name" name="route_name" class="col-xs-10 col-sm-5 form-control" placeholder="Route Name" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="route_distance">Route Distance:</label>

	   <div class="col-sm-9">

    <input type="text" id="route_distance" name="route_distance" class="col-xs-10 col-sm-5 form-control" placeholder="Route Distance:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="driver_name">Driver Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="driver_name" name="driver_name" class="col-xs-10 col-sm-5 form-control" placeholder="Driver Name:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="drvLicenceno"> Driver Licence No </label>
	<div class="col-sm-9">
					<input type="text" id="driver_license_number" placeholder="Driver Licence No" name="driver_license_number" class="col-xs-10 col-sm-5 form-control">
		</div>
  </div>
	<div class="form-group row">
		<label class="col-sm-3 form-control-label no-padding-right" for="drvPhoneno"> Driver Phone No </label>
			<div class="col-sm-9">
				<input type="text" id="driver_phone_number" name="driver_phone_number" placeholder="Driver Phone No" class="col-xs-10 col-sm-5 form-control">
			</div>
	</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="assistant_name">Assistant Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="assistant_name" name="assistant_name" class="col-xs-10 col-sm-5 form-control" placeholder="Assistant Name:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="vehicle_number">Vehicle Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="vehicle_number" name="vehicle_number" class="col-xs-10 col-sm-5 form-control" placeholder="Vehicle Number:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="route_fees">Route Fees:</label>

	   <div class="col-sm-9">

    <input type="text" id="route_fees" name="route_fees" class="col-xs-10 col-sm-5 form-control" placeholder="Route Fees:" required>

	</div>
</div>

<div class="form-actions"> <div class="col-sm-9 offset-sm-3">

  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>

   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>

  </div>

</form>
<?php $db->close(); ?>
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