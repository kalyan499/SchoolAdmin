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

              <h2 class="no-margin-bottom">Course Fees Edit</h2>

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
$course_fee_id=$_REQUEST["course_fee_id"];
$sql="select * from course_fees where course_fee_id='$course_fee_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="course_fees_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="course_fee_id" name="course_fee_id" value="<?php echo $course_fee_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="course_id">Course:</label>

	   <div class="col-sm-9">

	   <select id="course_id" name="course_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Course:</option>
<?php
$sqlr="select * from courses";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["course_id"]; ?>" <?php if($rowr['course_id']==$row['course_id']){ echo "selected";} ?>><?php echo $rowr["course_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="sem">Sem:</label>

	   <div class="col-sm-9">

    <input type="text" id="sem" name="sem" class="col-xs-10 col-sm-5 form-control" placeholder="Sem:" value="<?php echo $row['sem']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="fee_type_id">Fee Type:</label>

	   <div class="col-sm-9">

	   <select id="fee_type_id" name="fee_type_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Fee Type:</option>
<?php
$sqlr="select * from fee_types";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["fee_type_id"]; ?>" <?php if($rowr['fee_type_id']==$row['fee_type_id']){ echo "selected";} ?>><?php echo $rowr["fee_type"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="category_id">Category:</label>

	   <div class="col-sm-9">

	   <select id="category_id" name="category_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Category:</option>
<?php
$sqlr="select * from categories";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["category_id"]; ?>" <?php if($rowr['category_id']==$row['category_id']){ echo "selected";} ?>><?php echo $rowr["category_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="fee">Fee:</label>

	   <div class="col-sm-9">

    <input type="text" id="fee" name="fee" class="col-xs-10 col-sm-5 form-control" placeholder="Fee:" value="<?php echo $row['fee']; ?>">

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