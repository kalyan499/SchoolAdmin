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

              <h2 class="no-margin-bottom">Cash Handover Details Edit</h2>

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
$agent_id=$_REQUEST["agent_id"];
$sql="select * from cash_handover_details where cash_handover_id='$cash_handover_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);
?>
<?php include("val.php"); ?>
<form method="post" action="cash_handover_details_update.php" id="formID"  class="form-horizontal">
<input name="cash_handover_id" type="hidden" value="<?php echo $row['cash_handover_id']; ?>">

<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="from_date">From Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="from_date" name="from_date" class="col-xs-10 col-sm-5 form-control" placeholder="From Date:" value="<?php echo $row['from_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="to_date">To Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="to_date" name="to_date" class="col-xs-10 col-sm-5 form-control" placeholder="To Date:" value="<?php echo $row['to_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="amount">Amount:</label>

	   <div class="col-sm-9">

    <input type="text" id="amount" name="amount" class="col-xs-10 col-sm-5 form-control" placeholder="Amount:" value="<?php echo $row['amount']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="hand_over_date">Hand Over Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="hand_over_date" name="hand_over_date" class="col-xs-10 col-sm-5 form-control" placeholder="Hand Over Date:" value="<?php echo $row['hand_over_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="hand_over_by">Hand Over By:</label>

	   <div class="col-sm-9">

    <input type="text" id="hand_over_by" name="hand_over_by" class="col-xs-10 col-sm-5 form-control" placeholder="Hand Over By:" value="<?php echo $row['hand_over_by']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="two_thousand">2000/-</label>

	   <div class="col-sm-9">

    <input type="text" id="two_thousand" name="two_thousand" class="col-xs-10 col-sm-5 form-control" placeholder="Two Thousand:" value="<?php echo $row['two_thousand']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="thousand">1000/-</label>

	   <div class="col-sm-9">

    <input type="text" id="thousand" name="thousand" class="col-xs-10 col-sm-5 form-control" placeholder="Thousand:" value="<?php echo $row['thousand']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="five_hundred">500/-</label>

	   <div class="col-sm-9">

    <input type="text" id="five_hundred" name="five_hundred" class="col-xs-10 col-sm-5 form-control" placeholder="Five Hundred:" value="<?php echo $row['five_hundred']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="two_hundred">200/-</label>

	   <div class="col-sm-9">

    <input type="text" id="two_hundred" name="two_hundred" class="col-xs-10 col-sm-5 form-control" placeholder="Two Hundred:" value="<?php echo $row['two_hundred']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="hundred">100/-</label>

	   <div class="col-sm-9">

    <input type="text" id="hundred" name="hundred" class="col-xs-10 col-sm-5 form-control" placeholder="Hundred:" value="<?php echo $row['hundred']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="fifty">50/-</label>

	   <div class="col-sm-9">

    <input type="text" id="fifty" name="fifty" class="col-xs-10 col-sm-5 form-control" placeholder="Fifty:" value="<?php echo $row['fifty']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="twenty">20/-</label>

	   <div class="col-sm-9">

    <input type="text" id="twenty" name="twenty" class="col-xs-10 col-sm-5 form-control" placeholder="Twenty:" value="<?php echo $row['twenty']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="ten">10/-</label>

	   <div class="col-sm-9">

    <input type="text" id="ten" name="ten" class="col-xs-10 col-sm-5 form-control" placeholder="Ten:" value="<?php echo $row['ten']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="total">Total:</label>

	   <div class="col-sm-9">

    <input type="text" id="total" name="total" class="col-xs-10 col-sm-5 form-control" placeholder="Total:" value="<?php echo $row['total']; ?>">

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