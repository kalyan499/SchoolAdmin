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

              <h2 class="no-margin-bottom">Bus Routes Edit</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="dashboard-counts no-padding-bottom">

            <div class="container-fluid">

              <div class="row bg-white has-shadow">

               <div class="col-lg-12" >
<?php

include("dbconnect.php");
$db->connect();
$bus_route_id=$_REQUEST["bus_route_id"];
$sql="select * from bus_routes where bus_route_id='$bus_route_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="bus_routes_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="bus_route_id" name="bus_route_id" value="<?php echo $bus_route_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="route_number">Route Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="route_number" name="route_number" class="col-xs-10 col-sm-5 form-control" placeholder="Route Number:" value="<?php echo $row['route_number']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="route_distance">Route Distance:</label>

	   <div class="col-sm-9">

    <input type="text" id="route_distance" name="route_distance" class="col-xs-10 col-sm-5 form-control" placeholder="Route Distance:" value="<?php echo $row['route_distance']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="driver_name">Driver Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="driver_name" name="driver_name" class="col-xs-10 col-sm-5 form-control" placeholder="Driver Name:" value="<?php echo $row['driver_name']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="assistant_name">Assistant Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="assistant_name" name="assistant_name" class="col-xs-10 col-sm-5 form-control" placeholder="Assistant Name:" value="<?php echo $row['assistant_name']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="vehicle_number">Vehicle Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="vehicle_number" name="vehicle_number" class="col-xs-10 col-sm-5 form-control" placeholder="Vehicle Number:" value="<?php echo $row['vehicle_number']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="route_fees">Route Fees:</label>

	   <div class="col-sm-9">

    <input type="text" id="route_fees" name="route_fees" class="col-xs-10 col-sm-5 form-control" placeholder="Route Fees:" value="<?php echo $row['route_fees']; ?>">

	</div>
</div>
<div class="form-actions">

  <button type="submit" class="btn btn-primary">Submit</button>

  <button type="reset" class="btn btn-cancel">Reset</button>

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