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
              <h2 class="no-margin-bottom">Front Desk Admin Dashboard</h2>
            </div>
          </header>
		  <?php include("dbconnect.php"); 
$db->connect();
$sqlr="select count(*) as cnt from students where academic_year='".$_SESSION["academic_year"]."' and approval_status=1";
$resr=$db->query($sqlr);
$rowr=$db->fetch_array($resr);
$nstudents=$nparents=$rowr["cnt"];
$sqlr="select count(*) as cnt from employees";
$resr=$db->query($sqlr);
$rowr=$db->fetch_array($resr);
$nemployees=$rowr["cnt"];
$db->close();

 ?>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Total<br>Students</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $nstudents; ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Total<br>Staffs</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $nemployees; ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Total<br>Parents</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php echo $nparents; ?></strong></div>
                  </div>
                </div>
                <!-- Item 
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Total<br>Earnings</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>40,000</strong></div>
                  </div>
                </div> -->
              </div>
            </div>
          </section>
		  <!--Dashbaord Fees Collection -->
		 
		  
		    
        
          <!-- Page Footer-->
         <?php include("footer.php"); ?>
        </div>
      </div>
    </div>
  <?php include("scripts.php"); ?>
  </body>
</html>