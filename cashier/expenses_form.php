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

         
          <!-- Page Navigation Tabs Header-->   
				<div class="os-tabs-w menu-shad">
				<div class="os-tabs-controls">
				<ul class="nav nav-tabs upper">
				<li class="nav-item">
				<a class="nav-link active" href="expenses_view.php"><span>Expenses</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="expense_types_view.php"><span>Expense Types</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><span>Pending Approvals</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><span>Approved Expenses</span></a>
				</li>
				
				</ul>
				</div>
				</div>
          <!-- Page Header-->
          <!-- Dashboard Counts Section-->

         <div class="container-fluid no-padding body-content">
				<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
									 <div class="card-body">
                                     
									 <!-- Page Sub Navigation Menu and its content as Tabs -->
				<div class="container-fluid">
				<div class="tab-content">
      <div class="os-tabs-w">
         <div class="os-tabs-controls">
           <ul class="nav nav-tabs upper">
            <li class="nav-item">
              <a class="nav-link"  href="expenses_view.php">Expenses Lists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="expenses_form.php">Add New Expense</a>
            </li> 
           </ul>
         </div>
        </div>
        <script type="text/javascript">
         function chkamt()
         {
              var pamt=parseInt(document.getElementById("expense_amount").value);
              if(pamt<=0)
              {
                 try {
bootbox.alert('Expense Amount can not be less than or equal to zero');
}
    catch (ex) {
        console.log(ex.message);
    }
                  return false;
              }
              else
              {
                 return true;
              }
         }
        </script>
		<br>
		
<?php include("dbconnect.php"); 
$db->connect(); ?>
<form method="post" action="expenses_insert.php" id="formID" class="form-horizontal" onSubmit="return chkamt()">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="expense_type_id">Expense Type <span class="mdfield">*</span>:</label>

	   <div class="col-sm-9">

	   <select id="expense_type_id" name="expense_type_id" class="col-xs-10 col-sm-5 form-control" required>

	   <option value="">Select Expense Type:</option>
<?php
$sqlr="select * from expense_types";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["expense_type_id"]; ?>"><?php echo $rowr["expense_type"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="expense_date">Expense Date <span class="mdfield">*</span>:</label>

	   <div class="col-sm-8">
<div class="input-group date">
    <input type="text" id="expense_date" name="expense_date" class="col-xs-10 col-sm-5 form-control" placeholder="Expense Date:" required value="<?php echo date('d-m-Y'); ?>">
<span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
	</div>
</div>

<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="expense_date">Paid Amount <span class="mdfield">*</span> :</label>

	   <div class="col-sm-9">

    <input type="text" id="expense_amount" name="expense_amount" class="col-xs-10 col-sm-5 form-control" placeholder="Paid Amount" required  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">

	</div>
</div>

<div class="form-group row">
                                             <label class="col-sm-3 form-control-label no-padding-right" for="expMOP">Mode of Pay <span class="mdfield">*</span>:</label>
											 <div class="col-sm-9">
                                            <select class="col-xs-10 col-sm-5 form-control" id="payment_mode" name="payment_mode" required>
											<option value="">Select</option>
											<option>Cash</option>
												<option>Cheque</option>
												<option>DD</option>
												<option>Online Transefer</option>
											</select>
											</div>
                                        </div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="paid_by">Paid By <span class="mdfield">*</span>:</label>

	   <div class="col-sm-9">

    <input type="text" id="paid_by" name="paid_by" class="col-xs-10 col-sm-5 form-control" placeholder="Paid By:" required>

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="remarks">Remarks <span class="mdfield">*</span>:</label>

	   <div class="col-sm-9">

    <input type="text" id="remarks" name="remarks" class="col-xs-10 col-sm-5 form-control" placeholder="Remarks:" required>

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