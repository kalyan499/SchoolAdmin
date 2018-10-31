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
			   
			   	<?php include("dbconnect.php"); 
					$db->connect();
					global $row;
					$a="insert";
					if(isset($_REQUEST["hostel_id"]) && $_REQUEST["hostel_id"]!="")
					{
					$a="update";

					$hostel_id=$_REQUEST["hostel_id"];
					$sql="select * from hostel_details where hostel_id='$hostel_id'";
					$res=$db->query($sql);

					$row=$db->fetch_array($res);
					}
					?>
			<div class="panel-group" id="newHostel">
								  <div class="panel panel-default">
									 <div class="panel-heading">
										<h4 data-toggle="collapse" data-parent="#newHostel" href="#newHostelCollapse" class="panel-title expand mb-0">
										   <div class="right-arrow pull-right">+</div>
										   <a href="#">Add/Edit Hostel</a>
										</h4>
									 </div>
									 <div id="newHostelCollapse" class="panel-collapse collapse">
										<div class="panel-body">
											<form method="post" action="hostel_details_insert.php" id="formID" class="form-horizontal">
											<input name="a" type="hidden" value="<?php echo $a; ?>">
											<input type="hidden" id="hostel_id" name="hostel_id" value="<?php echo $hostel_id; ?>">
											<div class="row">
											<div class="col-md-3">

											<div class="form-group">
											<label class=" form-control-label no-padding-right" for="hostel_name">Hostel Name:</label>	  
											<input type="text" id="hostel_name" name="hostel_name" class="form-control" placeholder="Hostel Name" required  value="<?php echo $row['hostel_name']; ?>">
											</div>

											</div>
											<div class="col-md-3">
											<div class="form-group">
											<label class="form-control-label no-padding-right" for="num_of_rooms">No. of Rooms:</label>
											<input type="text" id="num_of_rooms" name="num_of_rooms" class="form-control" placeholder="No. of Rooms" required  value="<?php echo $row['num_of_rooms']; ?>">
											</div>
											</div>
											<div class="col-md-3">
											<div class="form-group">
											<label class="form-control-label no-padding-right" for="hostel_fees">Hostel Fees:</label>
											<input type="text" id="hostel_fees" name="hostel_fees" class="form-control" placeholder="Hostel Fees" required  value="<?php echo $row['hostel_fees']; ?>">
											</div>
											</div>
											<div class="col-md-3">
											<div class="form-group">
											<label class="form-control-label no-padding-right" for="mess_fees">Mess Fees:</label>	 
											<input type="text" id="mess_fees" name="mess_fees" class="form-control" placeholder="Mess Fees" required  value="<?php echo $row['mess_fees']; ?>">
											</div>
											</div>
											<div class="col-md-3 offset-9">
											<div class="form-group">
											<button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>
											<button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button>
											</div>
											</div>

											</div>
											</form>
											</div>
										</div>
									 </div>
								  </div>
					
			   
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
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
						<td class="hidden-sm hidden-xs btn-group"><a href="hostel_details.php?hostel_id=<?php echo $row["hostel_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
<a href="javascript:;"  class="btn btn-sm btn-danger" onClick="return calert('Are you sure you want to delete this?','hostel_details_delete.php?hostel_id=<?php echo $row["hostel_id"]; ?>')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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