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
    <div class="os-tabs-w">
         <div class="os-tabs-controls">
           <ul class="nav nav-tabs upper">
		    <li class="nav-item">
              <a class="nav-link" href="books_view.php">Books List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="books_form.php">Add New Book</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="authors_view.php">Authors</a>
            </li>
			  <li class="nav-item">
              <a class="nav-link" href="publishers_view.php">Publishers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student_book_issues_view.php">Student Issue</a>
            </li> 
			<li class="nav-item">
              <a class="nav-link" href="employee_book_issues_view.php">Staff Issue</a>
            </li> 
           </ul>
         </div>
        </div>
		
             <div class="container-fluid no-padding body-content">
				<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
									 <div class="card-body">
                                     
									 <!-- Page Sub Navigation Menu and its content as Tabs -->
				<div class="container-fluid">
				<div class="tab-content">
    
      <div class="tab-pane active" id="stu_lists">   
<?php include("dbconnect.php"); 
$db->connect(); ?>
<form method="post" action="books_insert.php" id="formID" class="form-horizontal">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="book_name">Book Name:</label>
	   <div class="col-sm-9">
    <input type="text" id="book_name" name="book_name" class="col-xs-10 col-sm-5 form-control" placeholder="Book Name:" required>
	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="isbn">Isbn:</label>
	   <div class="col-sm-9">
    <input type="text" id="isbn" name="isbn" class="col-xs-10 col-sm-5 form-control" placeholder="Isbn:" required>
	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="author_id">Written By:</label>
	   <div class="col-sm-9">
  <select id="author_id" name="author_id" class="col-xs-10 col-sm-5 form-control" required>
	   <option value="">Select Written By:</option>
<?php
$sqlr="select * from authors";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["author_id"]; ?>"><?php echo $rowr["author_name"]; ?></option>
<?php
}
?>
</select>
	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="publisher_id">Published By:</label>
	   <div class="col-sm-9">
	   <select id="publisher_id" name="publisher_id" class="col-xs-10 col-sm-5 form-control" required>
	   <option value="">Select Published By:</option>
<?php
$sqlr="select * from publishers";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["publisher_id"]; ?>"><?php echo $rowr["name"]; ?></option>
<?php
}
?>
</select>
	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="purchase_date">Purchase Date:</label>
	   <div class="col-sm-9">
    <input type="date" id="purchase_date" name="purchase_date" class="col-xs-10 col-sm-5 form-control" placeholder="Purchase Date:" required>
	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="purchase_amount">Purchase Amount:</label>
	   <div class="col-sm-9">
    <input type="text" id="purchase_amount" name="purchase_amount" class="col-xs-10 col-sm-5 form-control" placeholder="Purchase Amount:" required>
	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="availability">Availability Staus:</label>
	   <div class="col-sm-9">
  <select id="availability" name="availability" class="col-xs-10 col-sm-5 form-control" required>
  <option value="">Select Availability Staus</option>
    <option>Available</option>
    <option>Booked</option>
    <option>Lost</option>
    <option>Damaged</option>
    <option>Outdated</option>
    </select>
	</div>
</div>

<div class="form-actions"> <div class="col-sm-9 offset-sm-3">
  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>
   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>
  </div>
</form>
     </div>
      </div>
			</div>	
			</div>
								</div>	
							</div>
				</div>
				 </div>
 <?php 
						   $db->close();
						   ?>
          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>

  <?php include("scripts.php"); ?>
  
  </body>

</html>