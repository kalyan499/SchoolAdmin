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

              <h2 class="no-margin-bottom">Castes Edit</h2>

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
$caste_id=$_REQUEST["caste_id"];
$sql="select * from castes where caste_id='$caste_id'";
$res=mysql_query($sql);

			$row=mysql_fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="castes_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="caste_id" name="caste_id" value="<?php echo $caste_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="caste_name">Caste Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="caste_name" name="caste_name" class="col-xs-10 col-sm-5 form-control" placeholder="Caste Name:" value="<?php echo $row['caste_name']; ?>">

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