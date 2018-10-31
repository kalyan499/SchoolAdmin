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

              <h2 class="no-margin-bottom">Employees Edit</h2>

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
$employee_id=$_REQUEST["employee_id"];
$sql="select * from employees where employee_id='$employee_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="employees_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="employee_id" name="employee_id" value="<?php echo $employee_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="first_name">First Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="first_name" name="first_name" class="col-xs-10 col-sm-5 form-control" placeholder="First Name:" value="<?php echo $row['first_name']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="middle_name">Middle Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="middle_name" name="middle_name" class="col-xs-10 col-sm-5 form-control" placeholder="Middle Name:" value="<?php echo $row['middle_name']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="last_name">Last Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="last_name" name="last_name" class="col-xs-10 col-sm-5 form-control" placeholder="Last Name:" value="<?php echo $row['last_name']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="mother_name">Mother Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="mother_name" name="mother_name" class="col-xs-10 col-sm-5 form-control" placeholder="Mother Name:" value="<?php echo $row['mother_name']; ?>">

	</div>
</div>
<div class="form-group row">
<label cl ass="control-label" for="rad1"Gender:</label>

           <div class="clearfix"></div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="gender" name="gender" value="Mail"  <?php if($row['gender']=="Mail"){ echo "checked";} ?>>

          <label for="rad1">Mail</label>

        </div>
<div class="i-checks in-block">

          <input type="radio" class="radio-template" id="gender" name="gender" value="Female"  <?php if($row['gender']=="Female"){ echo "checked";} ?>>

          <label for="rad1">Female</label>

        </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="date_of_birth">Date Of Birth:</label>

	   <div class="col-sm-9">

    <input type="date" id="date_of_birth" name="date_of_birth" class="col-xs-10 col-sm-5 form-control" placeholder="Date Of Birth:" value="<?php echo $row['date_of_birth']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="employee_photo">Employee Photo:</label>

	   <div class="col-sm-9">

    <input type="file" id="employee_photo" name="employee_photo" class="col-xs-10 col-sm-5 form-control" placeholder="Employee Photo:" value="<?php echo $row['employee_photo']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="address">Address:</label>

	   <div class="col-sm-9">

    <input type="text" id="address" name="address" class="col-xs-10 col-sm-5 form-control" placeholder="Address:" value="<?php echo $row['address']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="mobile">Mobile:</label>

	   <div class="col-sm-9">

    <input type="text" id="mobile" name="mobile" class="col-xs-10 col-sm-5 form-control" placeholder="Mobile:" value="<?php echo $row['mobile']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="email">Email:</label>

	   <div class="col-sm-9">

    <input type="email" id="email" name="email" class="col-xs-10 col-sm-5 form-control" placeholder="Email:" value="<?php echo $row['email']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="aadhar_number">Aadhar Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="aadhar_number" name="aadhar_number" class="col-xs-10 col-sm-5 form-control" placeholder="Aadhar Number:" value="<?php echo $row['aadhar_number']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="employee_type_id">Employee Type:</label>

	   <div class="col-sm-9">

	   <select id="employee_type_id" name="employee_type_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Employee Type:</option>
<?php
$sqlr="select * from employee_types";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["employee_type_id"]; ?>" <?php if($rowr['employee_type_id']==$row['employee_type_id']){ echo "selected";} ?>><?php echo $rowr["employee_type"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="employee_code">Employee Code:</label>

	   <div class="col-sm-9">

    <input type="text" id="employee_code" name="employee_code" class="col-xs-10 col-sm-5 form-control" placeholder="Employee Code:" value="<?php echo $row['employee_code']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="pan_number">Pan Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="pan_number" name="pan_number" class="col-xs-10 col-sm-5 form-control" placeholder="Pan Number:" value="<?php echo $row['pan_number']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="emergency_number">Emergency Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="emergency_number" name="emergency_number" class="col-xs-10 col-sm-5 form-control" placeholder="Emergency Number:" value="<?php echo $row['emergency_number']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="joining_date">Joining Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="joining_date" name="joining_date" class="col-xs-10 col-sm-5 form-control" placeholder="Joining Date:" value="<?php echo $row['joining_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="job_type_id">Job Type:</label>

	   <div class="col-sm-9">

	   <select id="job_type_id" name="job_type_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Job Type:</option>
<?php
$sqlr="select * from job_types";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["job_type_id"]; ?>" <?php if($rowr['job_type_id']==$row['job_type_id']){ echo "selected";} ?>><?php echo $rowr["job_type_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="payment_mode">Payment Mode:</label>

	   <div class="col-sm-9">

    <input type="text" id="payment_mode" name="payment_mode" class="col-xs-10 col-sm-5 form-control" placeholder="Payment Mode:" value="<?php echo $row['payment_mode']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="bank_account_number">Bank Account Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="bank_account_number" name="bank_account_number" class="col-xs-10 col-sm-5 form-control" placeholder="Bank Account Number:" value="<?php echo $row['bank_account_number']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="confirmation_period">Confirmation Period:</label>

	   <div class="col-sm-9">

    <input type="text" id="confirmation_period" name="confirmation_period" class="col-xs-10 col-sm-5 form-control" placeholder="Confirmation Period:" value="<?php echo $row['confirmation_period']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="department_id">Department:</label>

	   <div class="col-sm-9">

	   <select id="department_id" name="department_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Department:</option>
<?php
$sqlr="select * from departments";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["department_id"]; ?>" <?php if($rowr['department_id']==$row['department_id']){ echo "selected";} ?>><?php echo $rowr["department_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="location_id">Location:</label>

	   <div class="col-sm-9">

	   <select id="location_id" name="location_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Location:</option>
<?php
$sqlr="select * from locations";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["location_id"]; ?>" <?php if($rowr['location_id']==$row['location_id']){ echo "selected";} ?>><?php echo $rowr["location"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="designation_id">Designation:</label>

	   <div class="col-sm-9">

	   <select id="designation_id" name="designation_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Designation:</option>
<?php
$sqlr="select * from designations";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["designation_id"]; ?>" <?php if($rowr['designation_id']==$row['designation_id']){ echo "selected";} ?>><?php echo $rowr["designation"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="is_pf_enabled">PF Enabled:</label>

	   <div class="col-sm-9">

    <input type="text" id="is_pf_enabled" name="is_pf_enabled" class="col-xs-10 col-sm-5 form-control" placeholder="PF Enabled:" value="<?php echo $row['is_pf_enabled']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="pf_uan">PF UAN:</label>

	   <div class="col-sm-9">

    <input type="text" id="pf_uan" name="pf_uan" class="col-xs-10 col-sm-5 form-control" placeholder="PF UAN:" value="<?php echo $row['pf_uan']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="pf_number">PF Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="pf_number" name="pf_number" class="col-xs-10 col-sm-5 form-control" placeholder="PF Number:" value="<?php echo $row['pf_number']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="pf_enrollment_date">PF Enrollment Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="pf_enrollment_date" name="pf_enrollment_date" class="col-xs-10 col-sm-5 form-control" placeholder="PF Enrollment Date:" value="<?php echo $row['pf_enrollment_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="epf_number">EPF Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="epf_number" name="epf_number" class="col-xs-10 col-sm-5 form-control" placeholder="EPF Number:" value="<?php echo $row['epf_number']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="relationship">Relationship:</label>

	   <div class="col-sm-9">

    <input type="text" id="relationship" name="relationship" class="col-xs-10 col-sm-5 form-control" placeholder="Relationship:" value="<?php echo $row['relationship']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="is_eps_enabled">EPS Enabled:</label>

	   <div class="col-sm-9">

    <input type="text" id="is_eps_enabled" name="is_eps_enabled" class="col-xs-10 col-sm-5 form-control" placeholder="EPS Enabled:" value="<?php echo $row['is_eps_enabled']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="is_esi_enabled">ESI Enabled:</label>

	   <div class="col-sm-9">

    <input type="text" id="is_esi_enabled" name="is_esi_enabled" class="col-xs-10 col-sm-5 form-control" placeholder="ESI Enabled:" value="<?php echo $row['is_esi_enabled']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="esi_number">ESI Number:</label>

	   <div class="col-sm-9">

    <input type="text" id="esi_number" name="esi_number" class="col-xs-10 col-sm-5 form-control" placeholder="ESI Number:" value="<?php echo $row['esi_number']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="basic_salary">Basic Salary:</label>

	   <div class="col-sm-9">

    <input type="text" id="basic_salary" name="basic_salary" class="col-xs-10 col-sm-5 form-control" placeholder="Basic Salary:" value="<?php echo $row['basic_salary']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="approval_status">Approval Status:</label>

	   <div class="col-sm-9">

    <input type="text" id="approval_status" name="approval_status" class="col-xs-10 col-sm-5 form-control" placeholder="Approval Status:" value="<?php echo $row['approval_status']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="registration_date">Registration Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="registration_date" name="registration_date" class="col-xs-10 col-sm-5 form-control" placeholder="Registration Date:" value="<?php echo $row['registration_date']; ?>">

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