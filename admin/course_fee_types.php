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
              <a class="nav-link " href="courses_view.php">Grade Sections List</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="grades_view.php">Grade List</a> <!-- <a class="nav-link" href="#stu_lists">Grade List</a> -->
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="fee_types_view.php">Fee Types</a>
            </li> 
             <li class="nav-item">
              <a class="nav-link active" href="course_fee_types.php">Grade Fee Types</a>
            </li>
<li class="nav-item">
              <a class="nav-link" href="course_fees_form.php">Grade Fees</a>
            </li>
           </ul>
         </div>
        </div>
      <div class="tab-pane active" id="stu_lists">
      
	 
	  <br>
	  <br>
					  <?php include("dbconnect.php"); 
$db->connect();

 ?>
 <script type="text/javascript">
 function sall(call)
{
  if(call.checked)
  {
    var ftc = document.getElementsByClassName("ftcheck");
  var i;
for (i = 0; i < ftc.length; i++) {
    ftc[i].checked = true;
    }
  }
  else
  {
    var ftc = document.getElementsByClassName("ftcheck");
  var i;
for (i = 0; i < ftc.length; i++) {
    ftc[i].checked = false;
    }
  }
  
}

function sall1(call)
{
  if(call.checked)
  {
    var ftc = document.getElementsByClassName("ftcheck1");
  var i;
for (i = 0; i < ftc.length; i++) {
    ftc[i].checked = true;
    }
  }
  else
  {
    var ftc = document.getElementsByClassName("ftcheck1");
  var i;
for (i = 0; i < ftc.length; i++) {
    ftc[i].checked = false;
    }
  }
  
}

 function selcourse() {

  var xhttp = new XMLHttpRequest();
  var course_id=document.getElementById("course_id").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
  
      document.getElementById("feetypes").innerHTML =
      this.responseText;
      
    }
  };
  xhttp.open("GET", "getcfeetypes.php?course_id="+course_id, true);
  xhttp.send();
}
 </script>
<form method="post" action="course_fee_types_insert.php" id="formID" class="form-horizontal">
<input name="a" type="hidden" value="<?php echo $a; ?>">

<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="course_id">Grade Section:</label>

	   <div class="col-sm-9">

	   <select id="course_id" name="course_id" class="col-xs-10 col-sm-5 form-control" required onChange="selcourse()">

	   <option value="">Select Grade Section:</option>
<?php
$sqlr="select * from courses";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["course_id"]; ?>"><?php echo $rowr["course_name"]; ?></option>
<?php
}
?>
</select>

	   </div>
</div>
 <div class="table-responsive">
<div id="feetypes">
</div>

 </div>
 <br /> <br />
<div class="form-actions row"> <div class="col-sm-3 offset-sm-9 text-right">

  <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>

   <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button></div>

  </div>

</form>

	  
	  
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