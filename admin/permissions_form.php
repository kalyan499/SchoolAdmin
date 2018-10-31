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

              <h2 class="no-margin-bottom">Add New Permissions</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="dashboard-counts no-padding-bottom">

            <div class="container-fluid">

              <div class="row bg-white has-shadow">

               <div class="col-lg-12" >
<?php include("dbconnect.php"); 
$db->connect(); ?>
<form method="post" action="permissions_insert.php" id="formID" class="form-horizontal">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="role_id">Role:</label>

	   <div class="col-sm-9">

	   <select id="role_id" name="role_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Role:</option>
<?php
$sqlr="select * from roles";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["role_id"]; ?>"><?php echo $rowr["name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="controller">Controller:</label>

	   <div class="col-sm-9">

    <input type="text" id="controller" name="controller" class="col-xs-10 col-sm-5 form-control" placeholder="Controller:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="action">Action:</label>

	   <div class="col-sm-9">

    <input type="text" id="action" name="action" class="col-xs-10 col-sm-5 form-control" placeholder="Action:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="permitted">Permitted:</label>

	   <div class="col-sm-9">

    <input type="text" id="permitted" name="permitted" class="col-xs-10 col-sm-5 form-control" placeholder="Permitted:" required>

	</div>
</div>
<div class="form-actions"> <div class="col-sm-9 offset-sm-3">

  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>

   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>

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