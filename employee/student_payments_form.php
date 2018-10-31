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

              <h2 class="no-margin-bottom">Add New Student Payments</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="dashboard-counts no-padding-bottom">

            <div class="container-fluid">

              <div class="row bg-white has-shadow">

               <div class="col-lg-12" >
<?php include("dbconnect.php"); 
$db->connect(); ?>
<form method="post" action="student_payments_insert.php" id="formID" class="form-horizontal">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="student_id">Student:</label>

	   <div class="col-sm-9">

	   <select id="student_id" name="student_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Student:</option>
<?php
$sqlr="select * from students";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["student_id"]; ?>"><?php echo $rowr["roll_number"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="course_id">Course/Section:</label>

	   <div class="col-sm-9">

	   <select id="course_id" name="course_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Course/Section:</option>
<?php
$sqlr="select * from courses";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["course_id"]; ?>"><?php echo $rowr["course_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="sem">Sem/Class:</label>

	   <div class="col-sm-9">

    <input type="text" id="sem" name="sem" class="col-xs-10 col-sm-5 form-control" placeholder="Sem/Class:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="fee_type_id">Fee Type:</label>

	   <div class="col-sm-9">

	   <select id="fee_type_id" name="fee_type_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Fee Type:</option>
<?php
$sqlr="select * from fee_types";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["fee_type_id"]; ?>"><?php echo $rowr["fee_type"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="fees_paid">Fees Paid:</label>

	   <div class="col-sm-9">

    <input type="text" id="fees_paid" name="fees_paid" class="col-xs-10 col-sm-5 form-control" placeholder="Fees Paid:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="paid_date">Paid Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="paid_date" name="paid_date" class="col-xs-10 col-sm-5 form-control" placeholder="Paid Date:" required>

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