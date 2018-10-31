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

              <h2 class="no-margin-bottom">Student Marks Edit</h2>

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
$student_marks_id=$_REQUEST["student_marks_id"];
$sql="select * from student_marks where student_marks_id='$student_marks_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="student_marks_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="student_marks_id" name="student_marks_id" value="<?php echo $student_marks_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="exam_subject_id">Exam Subject:</label>

	   <div class="col-sm-9">

	   <select id="exam_subject_id" name="exam_subject_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Exam Subject:</option>
<?php
$sqlr="select * from exam_subjects";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["exam_subject_id"]; ?>" <?php if($rowr['exam_subject_id']==$row['exam_subject_id']){ echo "selected";} ?>><?php echo $rowr["exam_subject_id"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="student_id">Student:</label>

	   <div class="col-sm-9">

	   <select id="student_id" name="student_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Student:</option>
<?php
$sqlr="select * from students";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["student_id"]; ?>" <?php if($rowr['student_id']==$row['student_id']){ echo "selected";} ?>><?php echo $rowr["roll_number"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="marks">Marks:</label>

	   <div class="col-sm-9">

    <input type="text" id="marks" name="marks" class="col-xs-10 col-sm-5 form-control" placeholder="Marks:" value="<?php echo $row['marks']; ?>">

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