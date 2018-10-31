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

              <h2 class="no-margin-bottom">Users Edit</h2>

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
$user_id=$_REQUEST["user_id"];
$sql="select * from users where user_id='$user_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="users_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="role_id">Role:</label>

	   <div class="col-sm-9">

	   <select id="role_id" name="role_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Role:</option>
<?php
$sqlr="select * from roles";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["role_id"]; ?>" <?php if($rowr['role_id']==$row['role_id']){ echo "selected";} ?>><?php echo $rowr["name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="username">Username:</label>

	   <div class="col-sm-9">

    <input type="text" id="username" name="username" class="col-xs-10 col-sm-5 form-control" placeholder="Username:" value="<?php echo $row['username']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="password">Password:</label>

	   <div class="col-sm-9">

    <input type="text" id="password" name="password" class="col-xs-10 col-sm-5 form-control" placeholder="Password:" required>

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