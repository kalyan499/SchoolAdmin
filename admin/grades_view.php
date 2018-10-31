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
              <a class="nav-link" href="courses_view.php">Grade Sections List</a>
            </li>
            <li class="nav-item">
             <a class="nav-link active" href="grades_view.php">Grade List</a> <!-- <a class="nav-link" href="#stu_lists">Grade List</a> -->
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="fee_types_view.php">Fee Types</a>
            </li> 
             <li class="nav-item">
              <a class="nav-link" href="course_fee_types.php">Grade Fee Types</a>
            </li>
<li class="nav-item">
              <a class="nav-link" href="course_fees_form.php">Grade Fees</a>
            </li> 
           </ul>
         </div>
        </div>
      <div class="tab-pane active" id="stu_lists">
      
	  <div class="table-responsive">
	  <br>
	  <br>
<?php
include("dbconnect.php");
$db->connect();

?>				  
  
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
<thead>
<tr>
<th scope="col">S.No</th>
<th scope="col">Grade</th>
<th scope="col">Grade Section</th>
</tr>
</thead>
<tbody>
<?php
$sn=1;
$sql="select * from grades g,courses c where g.course_id=c.course_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["grade_name"]; ?></td>
<td><?php echo $row["course_name"]; ?></td>
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