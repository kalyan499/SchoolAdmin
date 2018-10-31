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

               <!-- Page Navigation Tabs Header-->   
				<div class="os-tabs-w menu-shad">
				<div class="os-tabs-controls">
				<ul class="nav nav-tabs upper">
				<li class="nav-item">
				<a class="nav-link" href="countries_view.php"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Main Entries</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link active" href="salary_heads_view.php"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Employee Related</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Student Related</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Others</span></a>
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
              <a class="nav-link" href="salary_heads_view.php">Salary Heads</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="job_types_view.php">Job Types</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="locations_view.php">Locations</a>
            </li> 
			<li class="nav-item">
              <a class="nav-link" href="departments_view.php">Departments</a>
            </li> 
			<li class="nav-item">
              <a class="nav-link active" href="designations_view.php">Designations</a>
            </li> 
          <li class="nav-item">
              <a class="nav-link" href="leave_types_view.php">Leave Types</a>
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
if(isset($_REQUEST["did"]) && $_REQUEST["did"]!="")
{
$a="update";

$designation_id=$_REQUEST["did"];
$sql="select * from designations where designation_id='$designation_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);
}
 ?>
 <form method="post" action="designations_insert.php" id="formID"  class="form-horizontal">
     <input name="a" type="hidden" value="<?php echo $a; ?>">
<input type="hidden" id="designation_id" name="designation_id" value="<?php echo $designation_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="designation">Designation:</label>

	   <div class="col-sm-9">

    <input type="text" id="designation" name="designation" class="col-xs-10 col-sm-5 form-control" placeholder="Designation:" value="<?php echo $row['designation']; ?>">

	</div>
</div>
<div class="form-actions"> <div class="col-sm-9 offset-sm-3">

  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>

   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>

  </div>

</form>
<br>
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">Designation</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php 
$sn=1;
$sql="select * from designations";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["designation"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="designations_view.php?did=<?php echo $row["designation_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="designations_delete.php?designation_id=<?php echo $row["designation_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
</tr>
<?php
}
?>
</tbody>
</table>
<?php $db->close(); ?>
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

          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>

  <?php include("scripts.php"); ?>
  
  </body>

</html>