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
<script type="text/javascript">
function getatt()
{
   var month=document.getElementById("month").value;
   var year=document.getElementById("year").value;
   var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("att").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "get_emp_attendance_report.php?month="+month+"&year="+year, true);
  xhttp.send();
}
</script>
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
							<a class="nav-link" href="studentAttendanceReport.php"><i class="os-icon picons-thin-icon-thin-0386_graph_line_chart_statistics"></i><span>Student Attendance Report</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link active" href="employeeAttendanceReport.php"><i class="os-icon picons-thin-icon-thin-0386_graph_line_chart_statistics"></i><span>Employee Attendance report</span></a>
							</li>
							</ul>
                    </div>
                </div>
<?php
$months=array("Select Month","Jan","Feb","March","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");

                        $month=date('n');
$year=date('Y');
$days = getDays($month,$year);
                        ?>
         <!-- Page Content -->

<section class="dashboard-counts no-padding-bottom">
                  <div class="container-fluid">
                     <div class="bg-white has-shadow">
                        <form class="form-horizontal student-entry" role="form">
                           <div class="xs-p-10"></div>
                           <div class="row">
                               
                               
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
                                   <select id="year" name="year" class="form-control" required="">

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
                        
                           <div class="card" id="att">
                              <div class="card-header align-items-center">
                                 <h3 class="h4 float-left">
                                    Attendance Sheet of Employees : <?php echo $months[$month]." ".$year; ?>
									</h3>
									<form class="form-inline float-right" action="#">
													&nbsp;
													 <a href="#" class="btn btn-sm btn-default text-success" title="Export to  Excel"  onClick ="$('#att').tableExport({type:'excel',escape:'false'});"><i class="fa fa-file-excel-o"></i></a>&nbsp;
                                                        <a href="#" class="btn btn-sm btn-default text-danger" title="Export to  PDF"  onClick ="$('#att').tableExport({type:'pdf',escape:'false'});"><i class="fa fa-file-pdf-o"></i></a>&nbsp;
                                                        <button class="btn btn-sm btn-default"  onClick="divp('att')"><i class="fa fa-print"></i></button>
													</form>
                                 
                               <div class="clearfix"></div>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                       <thead>
                                          <tr>
                                             <th>Employee Name</th>
                                             <?php
	     	for($i=1;$i<=$days;$i++)
			{
    ?>			
                                             <th class="text-center"><?php echo $i; ?></th>
	<?php
	       }
	?>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php
include("dbconnect.php"); 
$up=false;
$db->connect(); 
$sql="select * from employees e,designations d,departments q where e.designation_id=d.designation_id and e.department_id=q.department_id";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
   
?>
                                          <tr>
                                             <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
                                             <?php
	  $present=0;
	 $numdays=0;
	     	for($i=1;$i<=$days;$i++)
			{
			  $adate=$i."-".$month."-".$year;
				$cdate=date('j-n-Y');
			

				if(strtotime($adate)<=strtotime($cdate))
				{
				    
				$numdays++;
			    $sql1="select * from employee_attendances where employee_id='".$row["employee_id"]."' and attendance_date='$i-$month-$year'";
				 $res1=$db->query($sql1);
				 if($row1=$db->fetch_array($res1))
				 {	
				 $attendance_status=$row1["attendance_status"];	
				 if($attendance_status=="Present")
				 {		
				  $present++; 
				  ?> 
  			
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                       
                                       
                                       <?php
                                         }
                                         else if($attendance_status=="Absent")
                                         {
                                         ?> 
    			
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                       
                                       
                                       <?php
                                         }
                                         else if($attendance_status=="Late")
                                         {
                                         ?> 
 		
                                             <td class="text-center">
                                                <i class="fa fa-check text-warning"></i>
                                             </td>
                                       
                                       
                                       <?php
                                         }
                                         
                                          }
                                       else
                                       {
                                            $sqlh="select * from yearly_holidays where holiday_day='$i' and holiday_month='$month'";
				 $resh=$db->query($sqlh);
				 
				 if($rowh=$db->fetch_array($resh))
				 {
				 ?>     
                                             <td class="text-center text-success">
                                               H
                                             </td>
                                        
                                        <?php 
				 }
				 else
				 {
                                      $sqlh="select * from custom_holidays where holiday_date='$i-$month-$year'";
				 $resh=$db->query($sqlh);
				 
				 if($rowh=$db->fetch_array($resh))
				 {
				 ?>     
                                             <td class="text-center text-success">
                                               H
                                             </td>
                                        
                                        <?php 
				 }
				 else
				 {
				     $sqlh="select * from employee_leave_requests elr,leave_types lt where elr.leave_type_id=lt.leave_type_id and
str_to_date(from_date, '%d-%m-%Y')<=str_to_date('$i-$month-$year', '%d-%m-%Y') and str_to_date(to_date, '%d-%m-%Y')>=str_to_date('$i-$month-$year', '%d-%m-%Y') and employee_id='".$row["employee_id"]."' and leave_status='approved'";
$resh=$db->query($sqlh);
if($rowh=$db->fetch_array($resh))
{
?>
<td class="text-center text-success">
<?php
$words = explode(" ",$rowh["leave_type"]);
$acronym = "";

foreach ($words as $w) {
  $acronym .= $w[0];
}
 echo $acronym; ?>
</td>
<?php
}
else
{
                                       ?>     
                                             <td class="text-center">
                                                -
                                             </td>
                                        
                                        <?php 
                                                 }
                                               }
                                             }
                                          }
                                         
                                       }
                                       else
                                       {
                                       ?>     
                                             <td class="text-center">
                                                -
                                             </td>
                                        
                                        <?php 
                                          }
                                        }
                                        ?>    
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
                  </div>
               </section>

         <!- End Page Content -->
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
          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>

  <?php include("scripts.php"); ?>
<script type="text/javascript" src="../vendor/tableExport.jquery.plugin-master/tableExport.js"></script>
<script type="text/javascript" src="../vendor/tableExport.jquery.plugin-master/jquery.base64.js"></script>
<script type="text/javascript" src="../vendor/tableExport.jquery.plugin-master/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="../vendor/tableExport.jquery.plugin-master/jspdf/jspdf.js"></script>
<script type="text/javascript" src="../vendor/tableExport.jquery.plugin-master/jspdf/libs/base64.js"></script>
  <script type="text/javascript">
  function  divp(id)
  {
var html="<html>";
html+="<head></head><body><h2>Ruman School of Nursing Employee Attendance Report</h2>";
   html+= document.getElementById(id).innerHTML;
   html+="</body></html>";
   var printWin = window.open('','','left=0,top=0,width=1200,height=800,toolbar=1,resizable,scrollbars=yes,status=1,fullscreen=1,zoomlevel=100');
   printWin.document.write(html);
   printWin.focus();
   printWin.print();
  }


  </script>
  </body>

</html>