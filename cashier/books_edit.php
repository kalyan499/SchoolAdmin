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

              <h2 class="no-margin-bottom">Books Edit</h2>

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
$book_id=$_REQUEST["book_id"];
$sql="select * from books where book_id='$book_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="books_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="book_id" name="book_id" value="<?php echo $book_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="book_name">Book Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="book_name" name="book_name" class="col-xs-10 col-sm-5 form-control" placeholder="Book Name:" value="<?php echo $row['book_name']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="isbn">Isbn:</label>

	   <div class="col-sm-9">

    <input type="text" id="isbn" name="isbn" class="col-xs-10 col-sm-5 form-control" placeholder="Isbn:" value="<?php echo $row['isbn']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="author_id">Author Id:</label>

	   <div class="col-sm-9">

    <input type="text" id="author_id" name="author_id" class="col-xs-10 col-sm-5 form-control" placeholder="Author Id:" value="<?php echo $row['author_id']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="publisher_id">Published By:</label>

	   <div class="col-sm-9">

	   <select id="publisher_id" name="publisher_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Published By:</option>
<?php
$sqlr="select * from publishers";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["publisher_id"]; ?>" <?php if($rowr['publisher_id']==$row['publisher_id']){ echo "selected";} ?>><?php echo $rowr["name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="purchase_date">Purchase Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="purchase_date" name="purchase_date" class="col-xs-10 col-sm-5 form-control" placeholder="Purchase Date:" value="<?php echo $row['purchase_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="purchase_amount">Purchase Amount:</label>

	   <div class="col-sm-9">

    <input type="text" id="purchase_amount" name="purchase_amount" class="col-xs-10 col-sm-5 form-control" placeholder="Purchase Amount:" value="<?php echo $row['purchase_amount']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="availability">Availability:</label>

	   <div class="col-sm-9">

    <input type="text" id="availability" name="availability" class="col-xs-10 col-sm-5 form-control" placeholder="Availability:" value="<?php echo $row['availability']; ?>">

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