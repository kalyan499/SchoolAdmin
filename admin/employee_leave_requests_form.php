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

              <h2 class="no-margin-bottom">Add New Employee Leave Requests</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="dashboard-counts no-padding-bottom">

            <div class="container-fluid">

              <div class="row bg-white has-shadow">

               <div class="col-lg-12" >
<?php include("dbconnect.php"); 
$db->connect(); ?>
<form method="post" action="employee_leave_requests_insert.php" id="formID" class="form-horizontal">
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
<label class="col-sm-3 form-control-label no-padding-right" for="leave_type_id">Leave Type:</label>

	   <div class="col-sm-9">

	   <select id="leave_type_id" name="leave_type_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Leave Type:</option>
<?php
$sqlr="select * from leave_types";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["leave_type_id"]; ?>"><?php echo $rowr["leave_type"]; ?></option>
<?php
}
?>
</select>

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
<label class="col-sm-3 form-control-label no-padding-right" for="num_days">Num Days:</label>

	   <div class="col-sm-9">

    <input type="text" id="num_days" name="num_days" class="col-xs-10 col-sm-5 form-control" placeholder="Num Days:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="remarks">Remarks:</label>

	   <div class="col-sm-9">

    <input type="text" id="remarks" name="remarks" class="col-xs-10 col-sm-5 form-control" placeholder="Remarks:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="leave_status">Leave Status:</label>

	   <div class="col-sm-9">

    <input type="text" id="leave_status" name="leave_status" class="col-xs-10 col-sm-5 form-control" placeholder="Leave Status:" required>

	</div>
</div>
<div class="form-actions"> <div class="col-sm-9 offset-sm-3">

  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>

   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>

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