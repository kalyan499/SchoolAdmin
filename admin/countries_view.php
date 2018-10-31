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
				<a class="nav-link active" href="countries_view.php"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Main Entries</span></a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="salary_heads_view.php"><i class="os-icon picons-thin-icon-thin-0692_paper_layers"></i><span>Employee Related</span></a>
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
              <a class="nav-link active" href="countries_view.php">Counries List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="states_view.php">States List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="religions_view.php">Religions List</a>
            </li> 
			<li class="nav-item">
              <a class="nav-link" href="castes_view.php">Castes List</a>
            </li> 
			<li class="nav-item">
              <a class="nav-link" href="categories_view.php">Categories List</a>
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
if(isset($_REQUEST["cid"]) && $_REQUEST["cid"]!="")
{
$a="update";

$country_id=$_REQUEST["cid"];
$sql="select * from countries where country_id='$country_id'";
$res=$db->query($sql);

			$row=$db->fetch_array($res);
}
 ?>	  
<form method="post" action="countries_insert.php" id="formID" class="form-horizontal">
<input name="a" type="hidden" value="<?php echo $a; ?>">
<input type="hidden" id="country_id" name="country_id" value="<?php echo $country_id; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="sortname">Short Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="sortname" name="sortname" class="col-xs-10 col-sm-5 form-control" placeholder="Short Name:" required  value="<?php echo $row['sortname']; ?>">

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="country_name">Country Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="country_name" name="country_name" class="col-xs-10 col-sm-5 form-control" placeholder="Country Name:" required  value="<?php echo $row['country_name']; ?>" >

	</div>
</div>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="phonecode">Phonecode:</label>

	   <div class="col-sm-9">

    <input type="text" id="phonecode" name="phonecode" class="col-xs-10 col-sm-5 form-control" placeholder="Phonecode:" required  value="<?php echo $row['phonecode']; ?>">

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
<th scope="col">Short Name</th>
<th scope="col">Country Name</th>
<th scope="col">Phonecode</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php
$sn=1;
$sql="select * from countries";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["sortname"]; ?></td>
<td><?php echo $row["country_name"]; ?></td>
<td><?php echo $row["phonecode"]; ?></td>
<td class="hidden-sm hidden-xs btn-group"><a href="countries_view.php?cid=<?php echo $row["country_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="countries_delete.php?country_id=<?php echo $row["country_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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