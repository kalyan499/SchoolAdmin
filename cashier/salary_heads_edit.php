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

              <h2 class="no-margin-bottom">Salary Heads Edit</h2>

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
$salary_head_id=$_REQUEST["salary_head_id"];
$sql="select * from salary_heads where salary_head_id='$salary_head_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="salary_heads_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="salary_head_id" name="salary_head_id" value="<?php echo $salary_head_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="salary_head">Salary Head:</label>

	   <div class="col-sm-9">

    <input type="text" id="salary_head" name="salary_head" class="col-xs-10 col-sm-5 form-control" placeholder="Salary Head:" value="<?php echo $row['salary_head']; ?>">

	</div>
</div>
<div class="form-group row">
<label cl ass="control-label" for="rad1"Head Type:</label>

           <div class="clearfix"></div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="head_type" name="head_type" value="Allowance"  <?php if($row['head_type']=="Allowance"){ echo "checked";} ?>>

          <label for="rad1">Allowance</label>

        </div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="head_type" name="head_type" value="Deduction"  <?php if($row['head_type']=="Deduction"){ echo "checked";} ?>>

          <label for="rad1">Deduction</label>

        </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="head_percentage">Head Percentage:</label>

	   <div class="col-sm-9">

    <input type="text" id="head_percentage" name="head_percentage" class="col-xs-10 col-sm-5 form-control" placeholder="Head Percentage:" value="<?php echo $row['head_percentage']; ?>">

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