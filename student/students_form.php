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

              <h2 class="no-margin-bottom">Add New Students</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="dashboard-counts no-padding-bottom">

            <div class="container-fluid">

              <div class="row bg-white has-shadow">

               <div class="col-lg-12" >
<?php include("dbconnect.php"); 
$db->connect(); ?>
<form method="post" action="students_insert.php" id="formID" class="form-horizontal">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="first_name">First Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="first_name" name="first_name" class="col-xs-10 col-sm-5 form-control" placeholder="First Name:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="middle_name">Middle Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="middle_name" name="middle_name" class="col-xs-10 col-sm-5 form-control" placeholder="Middle Name:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="last_name">Last Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="last_name" name="last_name" class="col-xs-10 col-sm-5 form-control" placeholder="Last Name:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="mother_name">Mother Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="mother_name" name="mother_name" class="col-xs-10 col-sm-5 form-control" placeholder="Mother Name:" required>

	</div>
</div>
<div class="form-group row">
<label cl ass="control-label" for="rad1"Gender:</label>

           <div class="clearfix"></div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="gender" name="gender" value="Mail" required>

          <label for="rad1">Mail</label>

        </div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="gender" name="gender" value="Female" required>

          <label for="rad1">Female</label>

        </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="date_of_birth">Date Of Birth:</label>

	   <div class="col-sm-9">

    <input type="date" id="date_of_birth" name="date_of_birth" class="col-xs-10 col-sm-5 form-control" placeholder="Date Of Birth:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="sudent_photo">Sudent Photo:</label>

	   <div class="col-sm-9">

    <input type="file" id="sudent_photo" name="sudent_photo" class="col-xs-10 col-sm-5 form-control" placeholder="Sudent Photo:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="address">Address:</label>

	   <div class="col-sm-9">

    <input type="text" id="address" name="address" class="col-xs-10 col-sm-5 form-control" placeholder="Address:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="mobile">Mobile:</label>

	   <div class="col-sm-9">

    <input type="text" id="mobile" name="mobile" class="col-xs-10 col-sm-5 form-control" placeholder="Mobile:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="email">Email:</label>

	   <div class="col-sm-9">

    <input type="email" id="email" name="email" class="col-xs-10 col-sm-5 form-control" placeholder="Email:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="aadhar_number">Aadhar Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="aadhar_number" name="aadhar_number" class="col-xs-10 col-sm-5 form-control" placeholder="Aadhar Number:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="admission_number">Admission Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="admission_number" name="admission_number" class="col-xs-10 col-sm-5 form-control" placeholder="Admission Number:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="roll_number">Roll Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="roll_number" name="roll_number" class="col-xs-10 col-sm-5 form-control" placeholder="Roll Number:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="religion_id">Religion:</label>

	   <div class="col-sm-9">

	   <select id="religion_id" name="religion_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Religion:</option>
<?php
$sqlr="select * from religions";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["religion_id"]; ?>"><?php echo $rowr["religion_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="caste_id">Caste:</label>

	   <div class="col-sm-9">

	   <select id="caste_id" name="caste_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Caste:</option>
<?php
$sqlr="select * from castes";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["caste_id"]; ?>"><?php echo $rowr["caste_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="category_id">Category:</label>

	   <div class="col-sm-9">

	   <select id="category_id" name="category_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Category:</option>
<?php
$sqlr="select * from categories";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["category_id"]; ?>"><?php echo $rowr["category_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label cl ass="control-label" for="rad1"Rte:</label>

           <div class="clearfix"></div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="rte" name="rte" value="Yes" required>

          <label for="rad1">Yes</label>

        </div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="rte" name="rte" value="No" required>

          <label for="rad1">No</label>

        </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="emergency_contact_number">Emergency Contact Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="emergency_contact_number" name="emergency_contact_number" class="col-xs-10 col-sm-5 form-control" placeholder="Emergency Contact Number:" required>

	</div>
</div>
<div class="form-group row">
<label cl ass="control-label" for="rad1"Hostel Opted:</label>

           <div class="clearfix"></div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="hostel_opted" name="hostel_opted" value="Yes" required>

          <label for="rad1">Yes</label>

        </div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="hostel_opted" name="hostel_opted" value="No" required>

          <label for="rad1">No</label>

        </div>
</div>
<div class="form-group row">
<label cl ass="control-label" for="rad1"Transport Opted:</label>

           <div class="clearfix"></div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="transport_opted" name="transport_opted" value="Yes" required>

          <label for="rad1">Yes</label>

        </div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="transport_opted" name="transport_opted" value="No" required>

          <label for="rad1">No</label>

        </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="agent_id">Agent:</label>

	   <div class="col-sm-9">

	   <select id="agent_id" name="agent_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Agent:</option>
<?php
$sqlr="select * from agents";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["agent_id"]; ?>"><?php echo $rowr["agent_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="bus_route_id">Bus Route:</label>

	   <div class="col-sm-9">

	   <select id="bus_route_id" name="bus_route_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Bus Route:</option>
<?php
$sqlr="select * from bus_routes";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["bus_route_id"]; ?>"><?php echo $rowr["route_number"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="parent_mobile">Parent Mobile:</label>

	   <div class="col-sm-9">

    <input type="text" id="parent_mobile" name="parent_mobile" class="col-xs-10 col-sm-5 form-control" placeholder="Parent Mobile:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="parent_email">Parent Email:</label>

	   <div class="col-sm-9">

    <input type="email" id="parent_email" name="parent_email" class="col-xs-10 col-sm-5 form-control" placeholder="Parent Email:" required>

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
<label class="col-sm-3 form-control-label no-padding-right" for="current_class_sem">Current Class/Sem:</label>

	   <div class="col-sm-9">

    <input type="text" id="current_class_sem" name="current_class_sem" class="col-xs-10 col-sm-5 form-control" placeholder="Current Class/Sem:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="registration_date">Registration Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="registration_date" name="registration_date" class="col-xs-10 col-sm-5 form-control" placeholder="Registration Date:" required>

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