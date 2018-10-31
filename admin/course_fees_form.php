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
              <a class="nav-link" href="course_fee_types.php">Grade Fee Types</a>
            </li>
<li class="nav-item">
              <a class="nav-link active" href="course_fees_form.php">Grade Fees</a>
            </li>
           </ul>
         </div>
        </div>
      <div class="tab-pane active" id="stu_lists">
	
	  <br>
	  <br>
<script type="text/javascript">
function call(ftid)
{
  var fees=document.getElementById(ftid).value;

  var cat_fees = document.getElementsByClassName(ftid);
  var i;
for (i = 0; i < cat_fees.length; i++) {
    cat_fees[i].value = fees;
  }
}

function calctot(cid)
{
  var cfees=document.getElementsByClassName("cfees"+cid);

  
  var i;
  var tot_fees=0;
for (i = 0; i < cfees.length; i++) {
    var fees=parseInt(cfees[i].value);
    tot_fees+=fees;
  }
  document.getElementById("tfees"+cid).value=tot_fees;
}

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

function selcourse() {
  var xhttp = new XMLHttpRequest();
  var course_id=document.getElementById("course_id").value;

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("syear").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getyears.php?course_id="+course_id, true);
  xhttp.send();
}
function selyear() {
  var xhttp = new XMLHttpRequest();
  var course_id=document.getElementById("course_id").value;
var year=document.getElementById("year").value;
if(year=="")
return;
var rte="No";
 if(document.getElementById("rtey").checked)
   rte="Yes";
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("cfees").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getcfees.php?course_id="+course_id+"&year="+year+"&rte="+rte, true);
  xhttp.send();
}
</script>			   
<?php include("dbconnect.php"); 
$db->connect(); ?>
<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="course_id">Grade Section:</label>
	   <div class="col-sm-9">
	   <select id="course_id" name="course_id" class="col-xs-10 col-sm-5 form-control" required onChange="selcourse()">
	   <option value="">Select Grade:</option>
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
<div class="form-group row">
 <label class="col-sm-3 form-control-label no-padding-right" for="stuTransportOpted">RTE</label>
 <div class="col-sm-9">
		<div class="i-checks in-block">
		<input id="rtey" type="radio" value="Yes" name="rte" class="radio-template" onClick="selyear()">
		<label for="rte">Yes</label>
		</div>
		<div class="i-checks in-block">
		<input id="rten" type="radio" value="No" name="rte" checked="" class="radio-template tmpend"  onClick="selyear()">
		<label for="stuTransportOpted2">No</label>
		</div>
 </div>
</div>

<div class="form-group row">
	<label class="col-sm-3 form-control-label no-padding-right" for="year">Grade:</label>
	<div class="col-sm-9" id="syear">
	<input name="year" type="hidden" value="">
	Select Grade
	</div>
</div>
<hr />
<div class="row " id="cfees">
<div class="col-md-12 text-center">
<h4>Select <span class="text-info">Grade Section</span> & <span class="text-info">Grade</span></h2>
</div>
</div>
 
	  
	  
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