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

              <h2 class="no-margin-bottom">Add New Cash Handover Details</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="dashboard-counts no-padding-bottom">

            <div class="container-fluid">

              <div class="row bg-white has-shadow">

               <div class="col-lg-12" >
<?php include("dbconnect.php"); 
$db->connect(); ?>
<form method="post" action="cash_handover_details_insert.php" id="formID" class="form-horizontal">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="cash_handover_id">Cash Handover Id:</label>

	   <div class="col-sm-9">

    <input type="text" id="cash_handover_id" name="cash_handover_id" class="col-xs-10 col-sm-5 form-control" placeholder="Cash Handover Id:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="from_date">From Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="from_date" name="from_date" class="col-xs-10 col-sm-5 form-control" placeholder="From Date:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="to_date">To Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="to_date" name="to_date" class="col-xs-10 col-sm-5 form-control" placeholder="To Date:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="amount">Amount:</label>

	   <div class="col-sm-9">

    <input type="text" id="amount" name="amount" class="col-xs-10 col-sm-5 form-control" placeholder="Amount:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="hand_over_date">Hand Over Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="hand_over_date" name="hand_over_date" class="col-xs-10 col-sm-5 form-control" placeholder="Hand Over Date:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="hand_over_by">Hand Over By:</label>

	   <div class="col-sm-9">

    <input type="text" id="hand_over_by" name="hand_over_by" class="col-xs-10 col-sm-5 form-control" placeholder="Hand Over By:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="two_thousand">Two Thousand:</label>

	   <div class="col-sm-9">

    <input type="text" id="two_thousand" name="two_thousand" class="col-xs-10 col-sm-5 form-control" placeholder="Two Thousand:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="thousand">Thousand:</label>

	   <div class="col-sm-9">

    <input type="text" id="thousand" name="thousand" class="col-xs-10 col-sm-5 form-control" placeholder="Thousand:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="five_hundred">Five Hundred:</label>

	   <div class="col-sm-9">

    <input type="text" id="five_hundred" name="five_hundred" class="col-xs-10 col-sm-5 form-control" placeholder="Five Hundred:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="two_hundred">Two Hundred:</label>

	   <div class="col-sm-9">

    <input type="text" id="two_hundred" name="two_hundred" class="col-xs-10 col-sm-5 form-control" placeholder="Two Hundred:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="hundred">Hundred:</label>

	   <div class="col-sm-9">

    <input type="text" id="hundred" name="hundred" class="col-xs-10 col-sm-5 form-control" placeholder="Hundred:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="fifty">Fifty:</label>

	   <div class="col-sm-9">

    <input type="text" id="fifty" name="fifty" class="col-xs-10 col-sm-5 form-control" placeholder="Fifty:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="twenty">Twenty:</label>

	   <div class="col-sm-9">

    <input type="text" id="twenty" name="twenty" class="col-xs-10 col-sm-5 form-control" placeholder="Twenty:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="ten">Ten:</label>

	   <div class="col-sm-9">

    <input type="text" id="ten" name="ten" class="col-xs-10 col-sm-5 form-control" placeholder="Ten:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="total">Total:</label>

	   <div class="col-sm-9">

    <input type="text" id="total" name="total" class="col-xs-10 col-sm-5 form-control" placeholder="Total:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="approval_status">Approval Status:</label>

	   <div class="col-sm-9">

    <input type="text" id="approval_status" name="approval_status" class="col-xs-10 col-sm-5 form-control" placeholder="Approval Status:" required>

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