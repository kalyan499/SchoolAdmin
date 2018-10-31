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
					<a class="nav-link active" href="users_form.php"><i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i> Users List</a>
					</li> 
				
				

					</ul>
					</div>
					</div>
       		
       	<section>
            <div class="container-fluid ">
				<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
									 <div class="card-body">
                                     
<?php include("dbconnect.php"); 
$db->connect(); ?>
<form method="post" action="users_insert.php" id="formID" class="form-horizontal">

		<div class="form-group row">
		<label class="col-sm-3 form-control-label no-padding-right" for="role_id">Role:</label>
		<div class="col-sm-9">

		<select id="role_id" name="role_id" class="col-xs-10 col-sm-5 form-control" required>
		<option value="">Select Role</option>
		<?php
		$sqlr="select * from roles where role_id=3 or role_id=4";
		$resr=$db->query($sqlr);
		while($rowr=$db->fetch_array($resr))
		{
		?>
		<option value="<?php echo $rowr["role_id"]; ?>"><?php echo $rowr["name"]; ?></option>
		<?php
		}
		?>
		</select>

		</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-3 form-control-label no-padding-right" for="username">Username:</label>
		<div class="col-sm-9">
		<input type="text" id="username" name="username" class="col-xs-10 col-sm-5 form-control" placeholder="Username:" required>
		</div>
		</div>
		
		<div class="form-group row">
		<label class="col-sm-3 form-control-label no-padding-right" for="password">Password:</label>
		<div class="col-sm-9">
		<input type="password" id="password" name="password" class="col-xs-10 col-sm-5 form-control" placeholder="Password:" required>
		</div>
		</div>
		<div class="form-actions"> <div class="col-sm-9 offset-sm-3">
		<button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>
		<button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>
		</div>

</form>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
				<thead>
				<tr>
				<th scope="col">S.No</th>
				<th scope="col">Role</th>
				<th scope="col">Username</th>
				<th scope="col">Actions</th>
				</tr>
				</thead>
				<tbody>
				<?php 

				$sn=1;
				$sql="select * from users t1,roles t2 where t1.role_id=t2.role_id and t1.role_id>2";
				$res=$db->query($sql);
				while($row=$db->fetch_array($res))
				{
				?>
				<tr>
				<td><?php echo $sn++; ?></td>
				<td><?php echo $row["name"]; ?></td>
				<td><?php echo $row["username"]; ?></td>
				<td class="hidden-sm hidden-xs btn-group">
				<a href="#"  class="btn btn-sm btn-danger" onClick="return calert('Are you sure you want to delete this?','users_delete.php?user_id=<?php echo $row["user_id"]; ?>')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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
				 </div>
 <?php 
						   $db->close();
						   ?>
          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>
	</section>
      </div>

    </div>

  <?php include("scripts.php"); ?>
  
  </body>

</html>