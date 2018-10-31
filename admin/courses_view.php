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
              <a class="nav-link active" href="courses_view.php">Grade Sections List</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="grades_view.php">Grade List</a> <!-- <a class="nav-link" href="#stu_lists">Grade List</a> -->
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="fee_types_view.php">Fee Types</a>
            </li> 
             <li class="nav-item">
              <a class="nav-link" href="course_fee_types.php">Grade Fee Types</a>
            </li>
<li class="nav-item">
              <a class="nav-link" href="course_fees_form.php">Grade Fees</a>
            </li>           </ul>
         </div>
        </div>
      <div class="tab-pane active" id="stu_lists">
      
	  <div class="table-responsive">
	  <br>
	  <br>
<?php
include("dbconnect.php");
$db->connect();
global $row;
$a="insert";
if(isset($_REQUEST["cid"]) && $_REQUEST["cid"]!="")
{
$a="update";

$course_id=$_REQUEST["cid"];
$sql="select * from courses where course_id='$course_id'";
$res=$db->query($sql);
$row=$db->fetch_array($res);
}
?>				  
<form method="post" action="courses_insert.php" id="formID" class="form-horizontal">
<input name="a" type="hidden" value="<?php echo $a; ?>">
<input type="hidden" id="course_id" name="course_id" value="<?php echo $course_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="course_name">Course Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="course_name" name="course_name" class="col-xs-10 col-sm-5 form-control" placeholder="Course Name" required  value="<?php echo $row['course_name']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="course_name">Course Duration:</label>

	   <div class="col-sm-9">

    <input type="text" id="course_duration" name="course_duration" class="col-xs-10 col-sm-5 form-control" placeholder="Course Duration" required  value="<?php echo $row['course_duration']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="course_name">Course Type:</label>

	   <div class="col-sm-9">

    <select id="course_type" name="course_type" class="col-xs-10 col-sm-5 form-control"  required>
	<option value="">Select Type</option>
	<option <?php if($row["course_type"]=="Under Graduate"){ echo "selected"; } ?>>Under Graduate</option>
	<option <?php if($row["course_type"]=="Post Graduate"){ echo "selected"; } ?>>Post Graduate</option>
	<option <?php if($row["course_type"]=="Other"){ echo "selected"; } ?>>Other</option>
	</select>

	</div>
</div>
<div class="form-actions"> <div class="col-sm-9 offset-sm-3">

  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>

   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>

  </div>

</form>					  
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">Course Name</th>
<th scope="col">Course Duration</th>
<th scope="col">Course Type</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php
$sn=1;
$sql="select * from courses";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["course_name"]; ?></td>
<td><?php echo $row["course_duration"]; ?> Years</td>
<td><?php echo $row["course_type"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="courses_view.php?cid=<?php echo $row["course_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
<!-- <a href="courses_delete.php?course_id=<?php echo $row["course_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a> --></td>
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