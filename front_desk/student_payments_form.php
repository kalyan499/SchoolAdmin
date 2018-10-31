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



          <!-- Dashboard Counts Section-->

<?php include("dbconnect.php"); 
$db->connect(); ?>
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Payment Information</h2>
            </div>
          </header>
      <section class="dashboard-counts">
                    <div class="container-fluid">
                        <div class=" bg-white has-shadow">

                    
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="ptb-20"><?php
if(isset($_SESSION["vsims_msg"]))
{
?>
<h5><?php echo $_SESSION["vsims_msg"]; ?></h5>
<?php
unset($_SESSION["vsims_msg"]);
}
?>	</h4>
                                    </div>
                                </div>

                                <!-- #section:elements.form -->
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
                                            <label class="control-label" for="stuClass">Course</label>
                                           <select id="course_id" name="course_id" class="form-control" required onBlur="selcourse()">

	   <option value="">Select Course</option>
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
									<div class="col-md-3">
										<div class="form-group">
                                            <label class="control-label" for="stuClass">Year</label>
                                           <div id="syear">
                                       <select class="form-control" id="year" name="year" onChange="selyear()">
                                          <option value="">Select Sem</option>
                                          <?php
										     $year=1;
											 while($year<=4)
											 {
										  ?>
										  <option><?php echo $year++; ?></option>
										  <?php
										     }
										  ?>
                                       </select>
									   </div>
                                        </div>							
									</div>
									<div class="col-md-3">
									<div class="form-group">
                                            <label class="control-label" for="stuId">Reg No/Student Name</label>
											<div id="student">
											Select Course & Year
											</div>
                                        </div>
									</div>
									
									
									
								</div>
								
								
									<div  id="sfees">
									</div>
										
										



                        </div>
                    </div>
                </section>
          <!-- Page Footer-->
<?php $db->close(); ?>
         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>
<script type="text/javascript">
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
      document.getElementById("student").innerHTML=
      this.responseText;
    }
  };
 xhttp.open("GET", "getstudents.php?course_id="+course_id+"&year="+year, true);
  xhttp.send();
}
function selstudent() {
  var xhttp = new XMLHttpRequest();
  var student_id=document.getElementById("student_id").value;
    var course_id=document.getElementById("course_id").value;
var year=document.getElementById("year").value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("sfees").innerHTML=
      this.responseText;
    }
  };
 xhttp.open("GET", "getsfees.php?student_id="+student_id+"&course_id="+course_id+"&year="+year, true);
  xhttp.send();
}
function calcbal(ftid)
{
  var fees=parseInt(document.getElementById("fees"+ftid).innerHTML);
   var feespaid=parseInt(document.getElementById("feespaid"+ftid).innerHTML);
   var fees_paid=parseInt(document.getElementById("paid_amount"+ftid).value);
    document.getElementById("bal"+ftid).innerHTML=fees-feespaid-fees_paid;
  calctot();
}
function calctot()
{
   var pays=document.getElementsByClassName("pay");
   var bals=document.getElementsByClassName("bal");
   var tot_pay=0;
   var tot_bal=0;
   for (i = 0; i < pays.length; i++) {
      tot_pay+=parseInt(pays[i].value);
    tot_bal+=parseInt(bals[i].innerHTML);
    }
	document.getElementById("totp").innerHTML=tot_pay;
		document.getElementById("totb").innerHTML=tot_bal;
}
</script>

  <?php include("scripts.php"); ?>

  </body>

</html>