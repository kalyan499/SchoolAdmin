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

              <h2 class="no-margin-bottom">Employee Salaries Edit</h2>

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
$employee_salary_id=$_REQUEST["employee_salary_id"];
$sql="select * from employee_salaries where employee_salary_id='$employee_salary_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="employee_salaries_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="employee_salary_id" name="employee_salary_id" value="<?php echo $employee_salary_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="employee_id">Employee:</label>

	   <div class="col-sm-9">

	   <select id="employee_id" name="employee_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Employee:</option>
<?php
$sqlr="select * from employees";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["employee_id"]; ?>" <?php if($rowr['employee_id']==$row['employee_id']){ echo "selected";} ?>><?php echo $rowr["first_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="salary_head_id">Salary Head:</label>

	   <div class="col-sm-9">

	   <select id="salary_head_id" name="salary_head_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Salary Head:</option>
<?php
$sqlr="select * from salary_heads";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["salary_head_id"]; ?>" <?php if($rowr['salary_head_id']==$row['salary_head_id']){ echo "selected";} ?>><?php echo $rowr["salary_head"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="head_amount">Head Amount:</label>

	   <div class="col-sm-9">

    <input type="text" id="head_amount" name="head_amount" class="col-xs-10 col-sm-5 form-control" placeholder="Head Amount:" value="<?php echo $row['head_amount']; ?>">

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