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
              <a class="nav-link active" href="expenses_view.php"> <i class="picons-thin-icon-thin-0409_wallet_credit_card_money_payment"></i>Expenses List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="expenses_form.php"><i class="picons-thin-icon-thin-0426_money_payment_dollars_coins_cash"></i>Add New Expenses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="expense_types_view.php"><i class="picons-thin-icon-thin-0424_money_payment_dollar_cash"></i> Expense Types</a>
            </li> 
           </ul>
         </div>
        </div>


             <div class="container-fluid">
<section>
				
							<div class="card">
								 <div class="card-body">
								 <!-- Page Sub Navigation Menu and its content as Tabs -->
								
<div class="table-responsive">
	 
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">Expense Type</th>
<th scope="col">Expense Date</th>
<th scope="col">Expense Amount</th>
<th scope="col">Payment Mode</th>
<th scope="col">Paid By</th>
<th scope="col">Remarks</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php include("dbconnect.php");
$db->connect();
$sn=1;
$sql="select * from expenses t1,expense_types t2 where t1.expense_type_id=t2.expense_type_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["expense_type"]; ?></td>
<td><?php echo $row["expense_date"]; ?></td>
<td><?php echo $row["expense_amount"]; ?></td>
<td><?php echo $row["payment_mode"]; ?></td>
<td><?php echo $row["paid_by"]; ?></td>
<td><?php echo $row["remarks"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="expenses_edit.php?expense_id=<?php echo $row["expense_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="#"  class="btn btn-sm btn-danger" onClick="calert('Are you sure you want to delete this?','expenses_delete.php?expense_id=<?php echo $row["expense_id"]; ?>')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
</tr>
<?php
}
?>
</tbody>
</table>
 </div>
									 
								 </div>
							</div>	
					
</section>
				 </div>
 <?php 
						   $db->close();
						   ?>
          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>

      </div>
</section>
    </div>

  <?php include("scripts.php"); ?>
  
  </body>

</html>