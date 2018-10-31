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
							<a class="nav-link active" href="attendances_management.php"><i class="os-icon picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i><span>Students</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="employeeAttendance.php"><i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i><span>Employees</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="studentAttendanceReport.php"><i class="os-icon picons-thin-icon-thin-0386_graph_line_chart_statistics"></i><span>Student Attendance Report</span></a>
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
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="control-label" for="selectMonth">Select Date</label>
                                    <div class="input-group mb-3 date">
                                       <input type="text" class="form-control date-picker" id="pDate" placeholder="Date" aria-label="Date" aria-describedby="date_pick" name="attendance_date" value="<?php echo date('j-n-Y'); ?>">											 
                                       <span class="input-group-addon" id="date_pick"><i class="fa fa-calendar fa-lg"></i></span>											 
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="control-label" for="sessionYear">&nbsp;</label><br>
                                    <button class="btn btn-primary" type="button"  onClick="getatt()">
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
                           <div class="card">
                              <div class="card-header align-items-center">
                                 <h3 class="h4 float-left">
                                    Attendance  :  
									</h3>
									
                                 
                               <div class="clearfix"></div>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive"  id="att">
                                    
                                 </div>
                              </div>
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
  var course_id=document.getElementById("course_id").value;
  var year=document.getElementById("year").value;

   var adate=document.getElementById("pDate").value;
   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("att").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "get_student_attendance.php?adate="+adate+"&course_id="+course_id+"&year="+year, true);
  xhttp.send();
}
</script>

  </body>

</html>