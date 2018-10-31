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

              <h2 class="no-margin-bottom">Leave Types Edit</h2>

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
$leave_type_id=$_REQUEST["leave_type_id"];
$sql="select * from leave_types where leave_type_id='$leave_type_id'";
$res=mysql_query($sql);

			$row=mysql_fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="leave_types_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="leave_type_id" name="leave_type_id" value="<?php echo $leave_type_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="leave_type">Leave Type:</label>

	   <div class="col-sm-9">

    <input type="text" id="leave_type" name="leave_type" class="col-xs-10 col-sm-5 form-control" placeholder="Leave Type:" value="<?php echo $row['leave_type']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="monthly_leaves">Monthly Leaves:</label>

	   <div class="col-sm-9">

    <input type="text" id="monthly_leaves" name="monthly_leaves" class="col-xs-10 col-sm-5 form-control" placeholder="Monthly Leaves:" value="<?php echo $row['monthly_leaves']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="yearly_leaves">Yearly Leaves:</label>

	   <div class="col-sm-9">

    <input type="text" id="yearly_leaves" name="yearly_leaves" class="col-xs-10 col-sm-5 form-control" placeholder="Yearly Leaves:" value="<?php echo $row['yearly_leaves']; ?>">

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