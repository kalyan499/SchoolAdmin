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
              <a class="nav-link active" href="books_view.php">Books List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="books_form.php">Add New Book</a>
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
      <div class="tab-pane active" id="stu_lists">
      
	  <div class="table-responsive">
	  <br>
	  <br>
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">Book Name</th>
<th scope="col">Isbn</th>
<th scope="col">Written By</th>
<th scope="col">Published By</th>
<th scope="col">Purchase Date</th>
<th scope="col">Purchase Amount</th>
<th scope="col">Availability</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php include("dbconnect.php");
$db->connect();
$sn=1;
$sql="select * from books t1,publishers t2,authors t3 where t1.publisher_id=t2.publisher_id and t1.author_id=t3.author_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["book_name"]; ?></td>
<td><?php echo $row["isbn"]; ?></td>
<td><?php echo $row["author_name"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["purchase_date"]; ?></td>
<td><?php echo $row["purchase_amount"]; ?></td>
<td><?php echo $row["availability"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="books_edit.php?book_id=<?php echo $row["book_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="books_delete.php?book_id=<?php echo $row["book_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
</tr>
<?php
}
?>
</tbody>
</table>
 </div>
	  
	  
      </div>
      
      <div class="tab-pane" id="addNewStudent">
     
	  
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