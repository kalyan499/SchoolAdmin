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
		   
<div class="os-tabs-w menu-shad">
         <div class="os-tabs-controls">
           <ul class="nav nav-tabs upper">
		    <li class="nav-item">
              <a class="nav-link" href="expenses_view.php"> <i class="picons-thin-icon-thin-0409_wallet_credit_card_money_payment"></i>Expenses List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="expenses_form.php"><i class="picons-thin-icon-thin-0426_money_payment_dollars_coins_cash"></i>Add New Expenses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="expense_types_view.php"><i class="picons-thin-icon-thin-0424_money_payment_dollar_cash"></i> Expense Types</a>
            </li> 
           </ul>
         </div>
        </div>
             

<!-- Page Sub Navigation Menu and its content as Tabs -->
 
<section> 
<div class="container-fluid">
        <div class="card">
            <div class="card-body">
			<?php include("dbconnect.php"); 
			$db->connect();
			global $row;
			$a="insert";
			if(isset($_REQUEST["expense_type_id"]) && $_REQUEST["expense_type_id"]!="")
			{
			$a="update";

			$expense_type_id=$_REQUEST["expense_type_id"];
			$sql="select * from expense_types where expense_type_id='$expense_type_id'";
			$res=$db->query($sql);
			$row=$db->fetch_array($res);
			}
			?>
			<form method="post" action="expense_types_insert.php" id="formID" class="form-horizontal">
			
			<input name="a" type="hidden" value="<?php echo $a; ?>">
			<input type="hidden" id="expense_type_id" name="expense_type_id" value="<?php echo $expense_type_id; ?>">
			
			<div class="form-group row">
			<label class="col-sm-3 form-control-label no-padding-right" for="expense_type">Expense Type:</label>

			<div class="col-sm-9">

			<input type="text" id="expense_type" name="expense_type" class="col-xs-10 col-sm-5 form-control" placeholder="Expense Type:"  required value="<?php echo $row['expense_type']; ?>">

			</div>
			</div>
			
			<div class="form-actions" style="text-align:center;">
			<button type="submit" class="btn btn-primary">Submit</button>
			<button type="reset" class="btn btn-cancel">Reset</button>
			</div>

			</form>
                 
                    
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
						<thead>
						<tr>
						<th scope="col">S.No</th>
						<th scope="col">Expense Type</th>
						<th scope="col">Actions</th>
						</tr>
						</thead>
						<tbody>
						<?php 
						$sn=1;
						$sql="select * from expense_types";
						$res=$db->query($sql);
						while($row=$db->fetch_array($res))
						{
						?>
						<tr>
						<td><?php echo $sn++; ?></td>
						<td><?php echo $row["expense_type"]; ?></td>
						<td class="hidden-sm hidden-xs btn-group"><a href="expense_types_view.php?expense_type_id=<?php echo $row["expense_type_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="expense_types_delete.php?expense_type_id=<?php echo $row["expense_type_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
						</tr>
						<?php
						}
						?>
						</tbody>
					</table>
				</div>
					
                
            </div>
        </div>
    </div>
	</section>
 <?php 
						   $db->close();
						   ?>
          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        

      </div>

    </div>

  <?php include("scripts.php"); ?>
  
  </body>

</html>