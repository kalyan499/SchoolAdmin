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
<?php include("dbconnect.php"); 
$db->connect(); ?>
        <div class="content-inner">
<div class="os-tabs-w menu-shad">
                    <div class="os-tabs-controls">
							<ul class="nav nav-tabs upper">
							<li class="nav-item">
							<a class="nav-link " href="attendances_management.php"><i class="os-icon picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i><span>Students</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="employeeAttendance.php"><i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i><span>Employees</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link active" href="studentAttendanceReport.php"><i class="os-icon picons-thin-icon-thin-0386_graph_line_chart_statistics"></i><span>Student Attendance Report</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="employeeAttendanceReport.php"><i class="os-icon picons-thin-icon-thin-0386_graph_line_chart_statistics"></i><span>Employee Attendance report</span></a>
							</li>
							</ul>
                    </div>
                </div>


         <!-- Page Content -->

<section class="dashboard-counts no-padding-bottom">
                  <div class="container-fluid">
                     <div class="bg-white has-shadow">
                        <form class="form-horizontal student-entry" role="form">
                           <div class="xs-p-10"></div>
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="form-group">
                                     <label class="control-label" for="stuClass">Grade Section</label>
                                           <select id="course_id" name="course_id" class="form-control" required onBlur="selcourse()">

	   <option value="">Select Grade Section</option>
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
                                    <label class="control-label" for="stuClass">Grade</label>
                                           <div id="syear">
                                       <select class="form-control" id="year" name="year" onChange="selyear()">
                                          <option value="">Select Grade</option>
                                         
                                       </select>
                                       </div>
                                 </div>
                              </div>
                              <?php
$months=array("Select Month","Jan","Feb","March","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");

                        $month=date('n');
$year=date('Y');
$days = getDays($month,$year);
                        ?>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="control-label" for="selectMonth">Select Month</label>
                                   <select id="month" name="month" class="form-control" required="">

	   <option value="">Select Month</option>
	   <?php
	   $i=1;
	   while($i<=12)
	   {
	   ?>
	   <option value="<?php echo $i; ?>" <?php if($month==$i){ echo "selected"; } ?>><?php echo $months[$i]; ?></option>
	   <?php
	   $i++;
	   }
	   
	   ?>
	   </select>
                                 </div>
                              </div>
                               <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="control-label" for="selectMonth">Select Year</label>
                                   <select id="pyear" name="pyear" class="form-control" required="">

	   <option value="">Select Year</option>
	   <?php
	   $year=date('Y');
	   $i=$year;
	   while($i>=$year-4)
	   {
	   ?>
	   <option value="<?php echo $i; ?>" <?php if($year==$i){ echo "selected"; } ?>><?php echo $i; ?></option>
	   <?php
	   $i--;
	   }
	   
	   ?>
	   </select>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="control-label" for="sessionYear">&nbsp;</label><br>
                                    <button class="btn btn-primary" type="button"   onClick="getatt()">
                                 <i class="fa fa-check bigger-110"></i>
                                 Generate
                                 </button>
                                 </div>
                              </div>
                           </div>
                          
                           <div class="clearfix"></div>
                        </form>
                     </div>
                  </div>
               </section>
			   
               <section class="tables">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="card"  id="att">
                              
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </section>

         <!- End Page Content -->

          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>
<?php 

//--------------------------------------------------------------------------------------------------------------------------------------------

//Function

//Function to return only date field from date

function getDateDay($x){

	$day = (int)substr($x,8,2);

	return $day;

}

//--------------------------------------------------------------------------------------------------------------------------------------------

function greaterDate($start_date,$end_date)
{
  $start = strtotime($start_date);
  $end = strtotime($end_date);
  if ($start-$end > 0)
    return 1;
  else
   return 0;
}

?>
<?php

//Function to get the no of days of a selected month and year...

function getDays($m,$y)

{

	if(($m==1)||($m==3)||($m==5)||($m==7)||($m==8)||($m==10)||($m==12))

        return 31;

    else if(($m==4)||($m==6)||($m==9)||($m==11))

        return 30;

    else if(($y%4==0)){

         if(($y%100==0)&&($y%400!=0)) // As all the centuries are not leap ears except divisible by 400

             return 28;

         else

             return 29;

    }else

		return 28;

}

?>
  <?php include("scripts.php"); ?>
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
 
}

function getatt()
{
   var month=document.getElementById("month").value;
   var year=document.getElementById("pyear").value;
    var course_id=document.getElementById("course_id").value;
  var syear=document.getElementById("year").value;

   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("att").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "get_student_attendance_report.php?month="+month+"&year="+year+"&course_id="+course_id+"&syear="+syear, true);
  xhttp.send();
}
</script>
  </body>

</html>