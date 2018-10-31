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

              <h2 class="no-margin-bottom">Student Book Issues Edit</h2>

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
$student_book_issue_id=$_REQUEST["student_book_issue_id"];
$sql="select * from student_book_issues where student_book_issue_id='$student_book_issue_id'";
$res=mysql_query($sql);

			$row=mysql_fetch_array($res);

?>
<?php include("val.php"); ?>
<form method="post" action="student_book_issues_update.php" id="formID"  class="form-horizontal">
<input type="hidden" id="student_book_issue_id" name="student_book_issue_id" value="<?php echo $student_book_issue_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="book_id">Book:</label>

	   <div class="col-sm-9">

	   <select id="book_id" name="book_id" class="col-xs-10 col-sm-5 form-control" >

	   	   <option value="">Select Book:</option>
<?php
$sqlr="select * from books";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["book_id"]; ?>" <?php if($rowr['book_id']==$row['book_id']){ echo "selected";} ?>><?php echo $rowr["book_name"]; ?></option>
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
<label class="col-sm-3 form-control-label no-padding-right" for="issue_date">Issue Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="issue_date" name="issue_date" class="col-xs-10 col-sm-5 form-control" placeholder="Issue Date:" value="<?php echo $row['issue_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="due_date">Due Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="due_date" name="due_date" class="col-xs-10 col-sm-5 form-control" placeholder="Due Date:" value="<?php echo $row['due_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="return_date">Return Date:</label>

	   <div class="col-sm-9">

    <input type="date" id="return_date" name="return_date" class="col-xs-10 col-sm-5 form-control" placeholder="Return Date:" value="<?php echo $row['return_date']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="fine_amount">Fine Amount:</label>

	   <div class="col-sm-9">

    <input type="text" id="fine_amount" name="fine_amount" class="col-xs-10 col-sm-5 form-control" placeholder="Fine Amount:" value="<?php echo $row['fine_amount']; ?>">

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