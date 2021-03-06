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

              <h2 class="no-margin-bottom">Student Attendances Edit</h2>

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
$student_attendance_id=$_REQUEST["student_attendance_id"];
$sql="select * from student_attendances where student_attendance_id='$student_attendance_id'";
$res=mysql_query($sql);

			$row=mysql_fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="student_attendances_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="student_attendance_id" name="student_attendance_id" value="<?php echo $student_attendance_id; ?>">
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
<label class="col-sm-3 form-control-label no-padding-right" for="attendance_date">Attendance Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="attendance_date" name="attendance_date" class="col-xs-10 col-sm-5 form-control" placeholder="Attendance Date:" value="<?php echo $row['attendance_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="attendance_time">Attendance Time:</label>

	   <div class="col-sm-9">

    <input type="text" id="attendance_time" name="attendance_time" class="col-xs-10 col-sm-5 form-control" placeholder="Attendance Time:" value="<?php echo $row['attendance_time']; ?>">

	</div>
</div>
<div class="form-group row">
<label cl ass="control-label" for="rad1"Status:</label>

           <div class="clearfix"></div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="status" name="status" value="P"  <?php if($row['status']=="P"){ echo "checked";} ?>>

          <label for="rad1">P</label>

        </div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="status" name="status" value="A"  <?php if($row['status']=="A"){ echo "checked";} ?>>

          <label for="rad1">A</label>

        </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="subject_id">Subject:</label>

	   <div class="col-sm-9">

	   <select id="subject_id" name="subject_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Subject:</option>
<?php
$sqlr="select * from subjects";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["subject_id"]; ?>" <?php if($rowr['subject_id']==$row['subject_id']){ echo "selected";} ?>><?php echo $rowr["subject_name"]; ?></option>
<?php
}
?>
</select>

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
<label class="col-sm-3 form-control-label no-padding-right" for="sem">Sem/Class:</label>

	   <div class="col-sm-9">

    <input type="text" id="sem" name="sem" class="col-xs-10 col-sm-5 form-control" placeholder="Sem/Class:" value="<?php echo $row['sem']; ?>">

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