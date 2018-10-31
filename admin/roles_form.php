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
				<a class="nav-link" href="users_form.php"><i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i>Users List</a>
				</li> 
				<li class="nav-item">
				<a class="nav-link active" href="roles_form.php"><i class="os-icon picons-thin-icon-thin-0705_user_profile_security_password_permissions"></i> User Roles</a>
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
      
	
	  <br>
	  <br>
<?php include("dbconnect.php"); 
$db->connect();
global $row;
$a="insert";
if(isset($_REQUEST["rid"]) && $_REQUEST["rid"]!="")
{
$a="update";

$role_id=$_REQUEST["rid"];
$sql="select * from roles where role_id='$role_id'";
$res=$db->query($sql);
$row=$db->fetch_array($res);
}
 ?>
<form method="post" action="roles_insert.php" id="formID" class="form-horizontal">
<input name="a" type="hidden" value="<?php echo $a; ?>">
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="name">Name:</label>

	   <div class="col-sm-9">

    <input type="text" id="name" name="name" class="col-xs-10 col-sm-5 form-control" placeholder="Name:" required  value="<?php echo $row['name']; ?>">

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
<th scope="col">Name</th>

<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php 
$sn=1;
$sql="select * from roles";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
?>
<tr>
<td><?php echo $sn++; ?></td>
<td><?php echo $row["name"]; ?></td>

<td class="hidden-sm hidden-xs btn-group"><a href="roles_form.php?rid=<?php echo $row["role_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="roles_delete.php?role_id=<?php echo $row["role_id"]; ?>"  class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete this?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
</tr>
<?php
}
?>
</tbody>
</table>

	  
	  
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