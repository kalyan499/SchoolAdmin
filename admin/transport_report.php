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


         

          <!-- Dashboard Counts Section-->
<?php
include("dbconnect.php"); 
$db->connect(); 

?>						
                      <!-- End Page Navigation Tabs Header--> 
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
              <a class="nav-link" href="admission_report.php">Admission Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student_fees_report.php">Student Fees Report</a>
            </li> 
			 <li class="nav-item">
              <a class="nav-link" href="hostel_report.php">Hostel Report</a>
            </li> 
			 <li class="nav-item">
              <a class="nav-link active" href="transport_report.php">Transport Report</a>
            </li> 
			
           </ul>
         </div>
        </div>
      <div class="tab-pane active" id="stu_lists">
      

	  <div class="row xs-mt-20">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" for="stuClass">Grade Section</label>
                                                             <select class="form-control" id="course_id" name="course_id"  onChange="selcourse()">
                                                  
                                          <option value="">Select Grade Section</option>
                                          <option value="all">All Grade Sections</option>
										<?php
                                           $sqlr="select * from courses";
                                           $resr=$db->query($sqlr);
                                           while($rowr=$db->fetch_array($resr))
                                           {
                                        ?>
                                         <option value="<?php echo $rowr["course_id"]; ?>" ><?php echo $rowr["course_name"]; ?></option>
                                        <?php
                                            }
                                       ?>
                                       </select>                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" for="stuSection">Current Grade</label>
                                                            <div id="syear">
                                       <select class="form-control" id="year" name="year">
                                          <option value="">Select Grade</option>
                                          
                                       </select>
									   </div>
                                                        </div>
                                                    </div>
													 
													 <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label" for="stuSection">Academic Year</label>
                                                            <select class="form-control" id="academic_year" name="academic_year">
                                                                <option value="">Select Academic Year</option>
																<?php
																$year=date('Y')+1;
																$eyear=$year;
																while($year>$eyear-5)
																{
																?>
																<option><?php echo ($year-1)."-".$year--;  ?></option>
																<?php
																 }
																?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                        <div class="form-group btns">
                                                            <label class="control-label" for="stuSection">.</label>
                                                            <br/>
                                                            <button class="btn btn-primary" onClick="getstudenttreport()">Generate</button>
                                                         
                                                        </div>
                                                    </div>
                                        
										<div id="treport" class="col-md-12">
										
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
 <script type="text/javascript" src="../vendor/tableExport.jquery.plugin-master/tableExport.js"></script>
<script type="text/javascript" src="../vendor/tableExport.jquery.plugin-master/jquery.base64.js"></script>
<script type="text/javascript" src="../vendor/tableExport.jquery.plugin-master/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="../vendor/tableExport.jquery.plugin-master/jspdf/jspdf.js"></script>
<script type="text/javascript" src="../vendor/tableExport.jquery.plugin-master/jspdf/libs/base64.js"></script>
  <script type="text/javascript">
  function  divp(id)
  {
var html="<html>";
html+="<head></head><body><h2>Sofica College of Nursing Fees Report</h2>";
   html+= document.getElementById(id).innerHTML;
   html+="</body></html>";
   var printWin = window.open('','','left=0,top=0,width=1200,height=800,toolbar=1,resizable,scrollbars=yes,status=1,fullscreen=1,zoomlevel=100');
   printWin.document.write(html);
   printWin.focus();
   printWin.print();
  }
  function getstudenttreport() {
  var xhttp = new XMLHttpRequest();
  var course_id=document.getElementById("course_id").value;
   var year=document.getElementById("year").value;
 
	  var academic_year=document.getElementById("academic_year").value;
	  
		
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("treport").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "getstreport.php?course_id="+course_id+"&year="+year+"&academic_year="+academic_year, true);
  xhttp.send();
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
  xhttp.open("GET", "getryears.php?course_id="+course_id, true);
  xhttp.send();
}

  </script>
  
    <script>
        $(document).ready(function() {

            $('.input-daterange').datepicker({
                todayHighlight: true
            });


            /*
         	$('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true,
            toggleActive: true
         });*/

        });
    </script>
  </body>

</html>