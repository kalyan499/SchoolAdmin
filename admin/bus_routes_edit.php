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
               <section class="tables">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-12" >
						<div class="card">
                        <div class="card-body">
						 <div class="container-fluid">
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
							  
							  <div class="row">
									<div class="col-md-3">
									<div class="form-group">
                                 <label class="form-control-label no-padding-right" for="route_number">Route Number:</label>
                                 
                                    <input type="text" id="route_number" name="route_number" class="form-control" placeholder="Route Number:" value="<?php echo $row['route_number']; ?>">
                                 
                              </div>
									</div>
									<div class="col-md-3">
									<div class="form-group">
									<label class="form-control-label no-padding-right" for="route_name">Route Name:</label>
									<input type="text" id="route_name" name="route_name" class="form-control" placeholder="Route Name" required value="<?php echo $row['route_name']; ?>">
									</div>
									</div>
									<div class="col-md-3">
									<div class="form-group">
                                 <label class="form-control-label no-padding-right" for="route_distance">Route Distance:</label>                               
                                    <input type="text" id="route_distance" name="route_distance" class="form-control" placeholder="Route Distance" value="<?php echo $row['route_distance']; ?>">
                                  </div>									
									</div>
									<div class="col-md-3">
									<div class="form-group">
                                 <label class="form-control-label no-padding-right" for="driver_name">Driver Name:</label>                                 
                                    <input type="text" id="driver_name" name="driver_name" class="form-control" placeholder="Driver Name" value="<?php echo $row['driver_name']; ?>">
                                 </div>
									</div>
									<div class="col-md-3">
									<div class="form-group">
                                 <label class="form-control-label no-padding-right" for="assistant_name">Assistant Name:</label>                                
                                    <input type="text" id="assistant_name" name="assistant_name" class="form-control" placeholder="Assistant Name" value="<?php echo $row['assistant_name']; ?>">
                                 </div>
									</div>
									<div class="col-md-3">
									 <div class="form-group">
                                 <label class="form-control-label no-padding-right" for="vehicle_number">Vehicle Number:</label>                                 
                                    <input type="text" id="vehicle_number" name="vehicle_number" class="form-control" placeholder="Vehicle Number" value="<?php echo $row['vehicle_number']; ?>">
                                 </div>
									</div>
									<div class="col-md-3">
									<div class="form-group">
                                 <label class="form-control-label no-padding-right" for="route_fees">Route Fees:</label>                                
                                    <input type="text" id="route_fees" name="route_fees" class="form-control" placeholder="Route Fees" value="<?php echo $row['route_fees']; ?>">
                                 </div>
									</div>
									<div class="col-md-3">
									 <div class="form-actions">
								<label class="form-control-label no-padding-right">&nbsp;</label><br />
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                
								 <a href="bus_routes_view.php" class="btn btn-default">Cancel</a>
								
                              </div>
									</div>									  
							  </div>
							  
                             
                           </form>
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