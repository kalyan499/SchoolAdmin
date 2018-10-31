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

              <h2 class="no-margin-bottom">Add New Agents</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="dashboard-counts no-padding-bottom">

            <div class="container-fluid">

              <div class="row bg-white has-shadow">

               <div class="col-lg-12" >
<?php include("dbconnect.php");
$db->connect();
?>
<form method="post" action="agents_insert.php" id="formID" class="form-horizontal">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="agent_name">Agent Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="agent_name" name="agent_name" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Name:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="agent_address">Agent Address:</label>

	   <div class="col-sm-9">

	    <textarea id="agent_address" name="agent_address" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Address:"></textarea>

		</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="agent_mobile">Agent Mobile:</label>

	   <div class="col-sm-9">

    <input type="text" id="agent_mobile" name="agent_mobile" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Mobile:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="agent_email">Agent Email:</label>

	   <div class="col-sm-9">

    <input type="email" id="agent_email" name="agent_email" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Email:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="agent_place">Agent Place:</label>

	   <div class="col-sm-9">

    <input type="text" id="agent_place" name="agent_place" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Place:" required>

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