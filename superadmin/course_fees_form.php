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

          <!-- Page Header-->

          <header class="page-header">

            <div class="container-fluid">

              <h2 class="no-margin-bottom">Add New Course Fees</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

         <section class="dashboard-counts no-padding-bottom">

            <div class="container-fluid">

              <div class="row bg-white has-shadow">

               <div class="col-lg-12" >
			   <div class="card">

                    <div class="card-header align-items-center">

                      <div class="card-comps pull-right">
<?php
if(isset($_SESSION["vsims_msg"]))
{
?>
<h5><?php echo $_SESSION["vsims_msg"]; ?></h5>
<?php
unset($_SESSION["vsims_msg"]);
}
?>	
						
						</div>

					  <div class="clearfix"></div>

                    </div>

                    <div class="card-body">

                      <div class="table-responsive">
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
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("cfees").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "getcfees.php?course_id="+course_id+"&year="+year, true);
  xhttp.send();
}
</script>			   
<?php include("dbconnect.php"); 
$db->connect(); ?>

<div class="form-group row">
<label class="col-sm-3 form-control-label no-padding-right" for="course_id">Course:</label>

	   <div class="col-sm-9">

	   <select id="course_id" name="course_id" class="col-xs-10 col-sm-5 form-control" required onChange="selcourse()">

	   <option value="">Select Course:</option>
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
<label class="col-sm-3 form-control-label no-padding-right" for="year">Year:</label>

	   <div class="col-sm-9" id="syear">

    Select Course
	</div>
</div>
<div id="cfees">
Select Course & Year
</div>

<?php $db->close(); ?>
</div>

                    </div>

                  </div>

                </div> 

              </div>

            </div>

          </section>

          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>

  <?php include("scripts.php"); ?>

  </body>

</html>