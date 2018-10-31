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

              <h2 class="no-margin-bottom">Transport Details</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

               <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
               <div class="col-lg-12" >
			   <div class="panel-group" id="newTransport">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 data-toggle="collapse" data-parent="#newTransport" href="#newtransCollapse" class="panel-title expand">
           <div class="right-arrow pull-right">+</div>
          <a href="#">Add New Transport</a>
        </h4>
      </div>
      <div id="newtransCollapse" class="panel-collapse collapse">
        <div class="panel-body">		
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
		</div>
      </div>
    </div>
  </div> 						
 </div>
 </div>
</div>
</section>
		  <!--Dashbaord Fees Collection -->
		  <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow" x-placement="bottom-end" style="display: none; position: absolute; transform: translate3d(15px, 26px, 0px); top: 0px; left: 0px; will-change: transform;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Transport List</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">Route Number</th>
<th scope="col">Route Distance</th>
<th scope="col">Driver Name</th>
<th scope="col">Assistant Name</th>
<th scope="col">Vehicle Number</th>
<th scope="col">Route Fees</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php include("dbconnect.php");
$db->connect();
$sn=1;
$sql="select * from bus_routes";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["route_number"]; ?></td>
<td><?php echo $row["route_distance"]; ?></td>
<td><?php echo $row["driver_name"]; ?></td>
<td><?php echo $row["assistant_name"]; ?></td>
<td><?php echo $row["vehicle_number"]; ?></td>
<td><?php echo $row["route_fees"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="bus_routes_edit.php?bus_route_id=<?php echo $row["bus_route_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="bus_routes_delete.php?bus_route_id=<?php echo $row["bus_route_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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