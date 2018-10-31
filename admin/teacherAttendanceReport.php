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
							<a class="nav-link " href="attendances_management.php"><i class="os-icon picons-thin-icon-thin-0729_student_degree_science_university_school_graduate"></i><span>Students</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="teacherAttendance.php"><i class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></i><span>Teachers</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="studentAttendanceReport.php"><i class="os-icon picons-thin-icon-thin-0386_graph_line_chart_statistics"></i><span>Student Attendance Report</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link active" href="teacherAttendanceReport.php"><i class="os-icon picons-thin-icon-thin-0386_graph_line_chart_statistics"></i><span>Teacher attendance report</span></a>
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
                                    <label class="control-label" for="selectMonth">Select Month</label>
                                    <div class="input-group mb-3 date">
                                       <input type="text" class="form-control date-picker" id="pDate" placeholder="Date" aria-label="Date" aria-describedby="date_pick">											 
                                       <span class="input-group-addon" id="date_pick"><i class="fa fa-calendar fa-lg"></i></span>											 
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="control-label" for="sessionYear">&nbsp;</label><br>
                                    <button class="btn btn-primary" type="button">
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
                                    Attendance Sheet of Teachers : April 2017 
									</h3>
									<form class="form-inline float-right" action="#">
													 <input type="text" placeholder="Search" class="form-control form-control-sm">&nbsp;
													 <a href="#" class="btn btn-sm btn-default text-success" title="Export to  Excel"><i class="fa fa-file-excel-o"></i></a>&nbsp;
                                                        <a href="#" class="btn btn-sm btn-default text-danger" title="Export to  PDF"><i class="fa fa-file-pdf-o"></i></a>&nbsp;
                                                        <button class="btn btn-sm btn-default" onclick="javascript:window.print()"><i class="fa fa-print"></i></button>
													</form>
                                 
                               <div class="clearfix"></div>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                       <thead>
                                          <tr>
                                             <th>Teacher Name</th>
                                             <th class="text-center">1</th>
                                             <th class="text-center">2</th>
                                             <th class="text-center">3</th>
                                             <th class="text-center">4</th>
                                             <th class="text-center">5</th>
                                             <th class="text-center">6</th>
                                             <th class="text-center">7</th>
                                             <th class="text-center">8</th>
                                             <th class="text-center">9</th>
                                             <th class="text-center">10</th>
                                             <th class="text-center">11</th>
                                             <th class="text-center">12</th>
                                             <th class="text-center">13</th>
                                             <th class="text-center">14</th>
                                             <th class="text-center">15</th>
                                             <th class="text-center">16</th>
                                             <th class="text-center">17</th>
                                             <th class="text-center">18</th>
                                             <th class="text-center">19</th>
                                             <th class="text-center">20</th>
                                             <th class="text-center">21</th>
                                             <th class="text-center">22</th>
                                             <th class="text-center">23</th>
                                             <th class="text-center">24</th>
                                             <th class="text-center">25</th>
                                             <th class="text-center">26</th>
                                             <th class="text-center">27</th>
                                             <th class="text-center">28</th>
                                             <th class="text-center">29</th>
                                             <th class="text-center">30</th>
                                             <th class="text-center">31</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Ali</td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Akshata</td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Vinay</td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Rajesh</td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                          </tr>
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

          <!-- Page Footer-->

         <?php include("footer.php"); ?>

        </div>

      </div>

    </div>

  <?php include("scripts.php"); ?>

  </body>

</html>