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

              <h2 class="no-margin-bottom">Add New Employee Payouts</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="dashboard-counts no-padding-bottom">

            <div class="container-fluid">

              <div class="row bg-white has-shadow">

               <div class="col-lg-12" >
<?php include("dbconnect.php"); 
$db->connect(); ?>
<form method="post" action="employee_payouts_insert.php" id="formID" class="form-horizontal">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="employee_id">Employee:</label>

	   <div class="col-sm-9">

	   <select id="employee_id" name="employee_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Employee:</option>
<?php
$sqlr="select * from employees";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["employee_id"]; ?>"><?php echo $rowr["first_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="paid_date">Paid Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="paid_date" name="paid_date" class="col-xs-10 col-sm-5 form-control" placeholder="Paid Date:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="payout_month">Payout Month:</label>

	   <div class="col-sm-9">

    <input type="text" id="payout_month" name="payout_month" class="col-xs-10 col-sm-5 form-control" placeholder="Payout Month:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="payout_year">Payout Year:</label>

	   <div class="col-sm-9">

    <input type="text" id="payout_year" name="payout_year" class="col-xs-10 col-sm-5 form-control" placeholder="Payout Year:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="basic_salary">Basic Salary:</label>

	   <div class="col-sm-9">

    <input type="text" id="basic_salary" name="basic_salary" class="col-xs-10 col-sm-5 form-control" placeholder="Basic Salary:" required>

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