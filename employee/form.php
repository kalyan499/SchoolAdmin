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
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
         <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
               <div class="col-lg-12" >
				<form class="form-horizontal" role="form">
									<!-- #section:elements.form -->
									<div class="form-group row">
										<label class="col-sm-3 form-control-label no-padding-right" for="bookId"> Id No </label>
										<div class="col-sm-9">
											<input type="text" id="bookId" placeholder="Book Id" readonly class="col-xs-10 col-sm-5 form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 form-control-label no-padding-right" for="bookName"> Book Name </label>

										<div class="col-sm-9">
											<input type="text" id="bookName" placeholder="Book Name" class="col-xs-10 col-sm-5 form-control">
										</div>
									</div>
									 
									<div class="form-group row">
										<label class="col-sm-3 form-control-label no-padding-right" for="subject"> Subject </label>

										<div class="col-sm-9">
											<input type="text" id="subject" placeholder="Subject" class="col-xs-10 col-sm-5 form-control">
										</div>
									</div>
									 
									<div class="form-group row">
										<label class="col-sm-3 form-control-label no-padding-right" for="writerName"> writer Name </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Writer Name" id="writerName" class="col-xs-10 col-sm-5 form-control">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-sm-3 form-control-label no-padding-right" for="pubYear"> Published Year </label>
										<div class="col-sm-9">
											<select class="col-xs-10 col-sm-5 form-control" id="pubYear">
												<option>2017</option>
												<option>2016</option>
												<option>2015</option>
											</select>
										</div>
									</div>
									
									<div class="form-group row">
                                            <label class="col-sm-3 form-control-label no-padding-right" for="pDate">Published Date</label>
											<div class="col-sm-9">
                                            <div class="input-group">
                                                <input class="col-xs-10 col-sm-5 form-control date-picker" id="pDate" type="text" data-date-format="dd-mm-yyyy">
                                                <span class="input-group-addon">
												<i class="fa fa-calendar bigger-110"></i>
												</span>
                                            </div>
											</div>
                                     </div>
									 
									<div class="form-group row">
										<label class="col-sm-3 form-control-label no-padding-right" for="classStudents"> Class </label>

										<div class="col-sm-9">
											<select class="col-xs-10 col-sm-5 form-control" id="classStudents">
												<option>Class 1</option>
												<option>Class 2</option>
												<option>Class 3</option>
											</select>
										</div>
									</div>

									 
									<div class="form-group row">       
										<div class="col-sm-9 offset-sm-3">
										<button class="btn btn-primary" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
								</form>
								
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