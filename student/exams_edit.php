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

              <h2 class="no-margin-bottom">Exams Edit</h2>

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
$exam_id=$_REQUEST["exam_id"];
$sql="select * from exams where exam_id='$exam_id'";
$res=mysql_query($sql);

			$row=mysql_fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="exams_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="exam_id" name="exam_id" value="<?php echo $exam_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="name">Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="name" name="name" class="col-xs-10 col-sm-5 form-control" placeholder="Name:" value="<?php echo $row['name']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="min_marks">Min Marks:</label>

	   <div class="col-sm-9">

    <input type="text" id="min_marks" name="min_marks" class="col-xs-10 col-sm-5 form-control" placeholder="Min Marks:" value="<?php echo $row['min_marks']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="max_marks">Max Marks:</label>

	   <div class="col-sm-9">

    <input type="text" id="max_marks" name="max_marks" class="col-xs-10 col-sm-5 form-control" placeholder="Max Marks:" value="<?php echo $row['max_marks']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="exam_date">Exam Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="exam_date" name="exam_date" class="col-xs-10 col-sm-5 form-control" placeholder="Exam Date:" value="<?php echo $row['exam_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="course_id">Course/Section:</label>

	   <div class="col-sm-9">

	   <select id="course_id" name="course_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Course/Section:</option>
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
<label class="col-sm-3 form-control-label no-padding-right" for="description">Description:</label>

	   <div class="col-sm-9">

	    <textarea id="description" name="description" class="col-xs-10 col-sm-5 form-control" placeholder="Description:"><?php echo $row['description']; ?></textarea>

		</div
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