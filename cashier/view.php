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
															<th>#</th>
															<th>Book Name</th>
															<th>Writer</th>
															<th>Subject</th>
															<th>Class</th>
															<th>Year</th>
															<th>Creating Date</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>#2901</td>
															<td>
																English Grammar
															</td>
															<td>Vins</td>
															<td>English</td>
															<td>5</td>
															<td>2017</td>
															<td>08/02/2017</td>
															<td>
															<div class="hidden-sm hidden-xs btn-group">
															<button class="btn btn-sm btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															<button class="btn btn-sm btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>
															</div>
															</td>
														</tr>
														<tr>
															<td>#2902</td>
															<td>
																Science
															</td>
															<td>Vins</td>
															<td>English</td>
															<td>7</td>
															<td>2017</td>
															<td>02/02/2017</td>
															<td>
															<div class="hidden-sm hidden-xs btn-group">
															<button class="btn btn-sm btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															<button class="btn btn-sm btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>
															</div>
															</td>
														</tr>
														<tr>
															<td>#2904</td>
															<td>
																Maths
															</td>
															<td>Vins</td>
															<td>Mathematics</td>
															<td>6</td>
															<td>2017</td>
															<td>08/07/2017</td>
															<td>
															<div class="hidden-sm hidden-xs btn-group">
															<button class="btn btn-sm btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															<button class="btn btn-sm btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>
															</div>
															</td>
														</tr>
														<tr>
															<td>#2908</td>
															<td>
																Social Study
															</td>
															<td>Vins</td>
															<td>English</td>
															<td>6</td>
															<td>2017</td>
															<td>02/05/2017</td>
															<td>
															<div class="hidden-sm hidden-xs btn-group">
															<button class="btn btn-sm btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>

															<button class="btn btn-sm btn-danger">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</button>
															</div>
															</td>
														</tr>
														
													</tbody>
												</table>
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