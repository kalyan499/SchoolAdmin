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

              <h2 class="no-margin-bottom">Expenses Edit</h2>

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
$expense_id=$_REQUEST["expense_id"];
$sql="select * from expenses where expense_id='$expense_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="expenses_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="expense_id" name="expense_id" value="<?php echo $expense_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="expense_type_id">Expense Type:</label>

	   <div class="col-sm-9">

	   <select id="expense_type_id" name="expense_type_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Expense Type:</option>
<?php
$sqlr="select * from expense_types";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["expense_type_id"]; ?>" <?php if($rowr['expense_type_id']==$row['expense_type_id']){ echo "selected";} ?>><?php echo $rowr["expense_type"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="expense_date">Expense Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="expense_date" name="expense_date" class="col-xs-10 col-sm-5 form-control" placeholder="Expense Date:" value="<?php echo $row['expense_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="expense_date">Paid Amount:</label>

	   <div class="col-sm-9">

    <input type="text" id="expense_amount" name="expense_amount" class="col-xs-10 col-sm-5 form-control" placeholder="Paid Amount" required value="<?php echo $row["expense_amount"]; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="payment_mode">Payment Mode:</label>

	   <div class="col-sm-9">

    <input type="text" id="payment_mode" name="payment_mode" class="col-xs-10 col-sm-5 form-control" placeholder="Payment Mode:" value="<?php echo $row['payment_mode']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="paid_by">Paid By:</label>

	   <div class="col-sm-9">

    <input type="text" id="paid_by" name="paid_by" class="col-xs-10 col-sm-5 form-control" placeholder="Paid By:" value="<?php echo $row['paid_by']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="remarks">Remarks:</label>

	   <div class="col-sm-9">

    <input type="text" id="remarks" name="remarks" class="col-xs-10 col-sm-5 form-control" placeholder="Remarks:" value="<?php echo $row['remarks']; ?>">

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