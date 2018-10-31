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
              <a class="nav-link" href="books_view.php">Books List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="books_form.php">Add New Book</a>
            </li>
			  <li class="nav-item">
              <a class="nav-link active" href="authors_view.php">Authors</a>
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
	  <?php include("dbconnect.php"); 
$db->connect(); 
global $row;
$a="insert";
if(isset($_REQUEST["author_id"]) && $_REQUEST["author_id"]!="")
{
$a="update";

$author_id=$_REQUEST["author_id"];
$sql="select * from authors where author_id='$author_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);
}
?>
<form method="post" action="authors_insert.php" id="formID" class="form-horizontal">
<input name="a" type="hidden" value="<?php echo $a; ?>">
<input type="hidden" id="author_id" name="author_id" value="<?php echo $author_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="author_name">Author Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="author_name" name="author_name" class="col-xs-10 col-sm-5 form-control" placeholder="Author Name:" required value="<?php echo $row["author_name"]; ?>">

	</div>
</div>
<div class="form-actions">
  <div class="col-sm-9 offset-sm-3">

  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>

   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>

  </div>

</form>
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">Author Name</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php
$sn=1;
$sql="select * from authors";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["author_name"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="authors_view.php?author_id=<?php echo $row["author_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="authors_delete.php?author_id=<?php echo $row["author_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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