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
		<link href="../css/editor.css" type="text/css" rel="stylesheet"/>
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
							<h2 class="no-margin-bottom">SMS - Management</h2>
						</div>
					</header>
					
					<!-- Dashboard Counts Section-->
					
					<!-- End Page Navigation Tabs Header-->
					<div class="container-fluid  body-content">
						
						<!-- Letters -->
						
						<div class="row" style="margin-top:15px;">
							<div class="col-lg-12">
								
								<div class="card xs-p-10">
									<div class="card-body">
										<ul class="nav nav-tabs" id="myTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" id="parents-tab" data-toggle="tab" href="#parents" role="tab" aria-controls="parents" aria-selected="true">Parents</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="staff-tab" data-toggle="tab" href="#staff" role="tab" aria-controls="staff" aria-selected="false">Staff</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="custom-tab" data-toggle="tab" href="#custom" role="tab" aria-controls="custom" aria-selected="false">Custom </a>
											</li>
										</ul>
										<div class="tab-content" id="myTabContent">
											<!-- Parents -->
											<div class="tab-pane custom-padding fade show active" id="parents" role="tabpanel" aria-labelledby="home-tab">
												<form class="form-horizontal">
													
													<div class="i-checks">
														<input  name="selectAllGrades" id="selGrades" type="checkbox" class="checkbox-template">
														<label for="selGrades"><h4> Select all Grades</h4></label>
													</div>
													<div class="form-group row">
														
														<!-- Pre-Primary Section -->
														<div class="col-sm-3">
															
															<div class="form-group">
																
																<div class="i-checks primary_header">
																	<input   name="pPrimary" id="spPsection" type="checkbox" class="checkbox-template">
																	<label for="spPsection"><b>Pre-Primary Section</b></label>
																</div>
																
																
																<div class="phBody kk">
																	<div class="i-checks">
																		<input   name="pPrimary" id="spNursery" type="checkbox" class="checkbox-template">
																		<label data-toggle="collapse" data-target="#clsNursery" aria-expanded="false" aria-controls="clsNursery">Nursery</label>
																	</div>
																	<div id="clsNursery" aria-expanded="false" class="collapse">
																		<div class="xs-p-10">
																			<div class="i-checks chkBoxes bBottomline">
																				<input   name="nurserySection" id="nSectionA" type="checkbox" class="checkbox-template">
																				<label for="nSectionA">Section A</label> <a href="javascript:;"  class="text-right" data-toggle="modal" data-target="#listView">List View</a>
																			</div>
																			<div class="i-checks chkBoxes">
																				<input   name="nurserySection" id="nSectionB" type="checkbox" class="checkbox-template">
																				<label for="nSectionB">Section B</label>
																			</div>
																		</div>
																	</div>
																	<div class="i-checks">
																		<input   name="pPrimary" id="spLKG" type="checkbox" class="checkbox-template">
																		<label for="spLKG"  data-toggle="collapse" data-target="#clsLKG" aria-expanded="false" aria-controls="clsLKG">L.K.G</label>
																	</div>
																	<div id="clsLKG" aria-expanded="false" class="collapse">
																		<div class="xs-p-10">
																			<div class="i-checks chkBoxes bBottomline">
																				<input   name="lkgSection" id="lkgSectionA" type="checkbox" class="checkbox-template">
																				<label for="lkgSectionA">Section A</label> <a href="javascript:;"  class="text-right" data-toggle="modal" data-target="#listView">List View</a>
																			</div>
																			<div class="i-checks chkBoxes">
																				<input   name="lkgSection" id="lkgSectionB" type="checkbox" class="checkbox-template">
																				<label for="lkgSectionB">Section B</label>
																				<a href="javascript:;"  class="text-right" data-toggle="modal" data-target="#listView">List View</a>
																			</div>
																		</div>
																	</div>
																	<div class="i-checks">
																		<input   name="pPrimary" id="spUKG" type="checkbox" class="checkbox-template">
																		<label for="spUKG" data-toggle="collapse" data-target="#clsUKG" aria-expanded="false" aria-controls="clsUKG">U.K.G</label>
																	</div>
																	<div id="clsUKG" aria-expanded="false" class="collapse">
																		<div class="xs-p-10">
																			<div class="i-checks chkBoxes bBottomline">
																				<input   name="ukgSection" id="ukgSectionA" type="checkbox" class="checkbox-template">
																				<label for="ukgSectionA">Section A</label> <a href="javascript:;"  class="text-right" data-toggle="modal" data-target="#listView">List View</a>
																			</div>
																			<div class="i-checks chkBoxes">
																				<input   name="ukgSection" id="ukgSectionB" type="checkbox" class="checkbox-template">
																				<label for="ukgSectionB">Section B</label>
																				<a href="javascript:;"  class="text-right" data-toggle="modal" data-target="#listView">List View</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- Primary Section -->
														<div class="col-sm-3">
															
															<div class="form-group">
																
																<div class="i-checks primary_header">
																	<input   name="pSection" id="sPsection" type="checkbox" class="checkbox-template">
																	<label for="sPsection"><b>Primary Section</b></label>
																</div>
																<div class="phBody">
																	<div class="i-checks">
																		<input   name="pSection" id="sGrad1" type="checkbox" class="checkbox-template">
																		<label for="sGrad1">Grade I</label>
																	</div>
																	<div class="i-checks">
																		<input   name="pSection" id="sGrad2" type="checkbox" class="checkbox-template">
																		<label for="sGrad2">Grade II</label>
																	</div>
																	<div class="i-checks">
																		<input   name="pSection" id="sGrad3" type="checkbox" class="checkbox-template">
																		<label for="sGrad3">Grade III</label>
																	</div>
																	<div class="i-checks">
																		<input   name="pSection" id="sGrad4" type="checkbox" class="checkbox-template">
																		<label for="sGrad4">Grade IV</label>
																	</div>
																</div>
															</div>
														</div>
														
														<!-- Middle Section -->
														<div class="col-sm-3">
															
															<div class="form-group">
																
																<div class="i-checks primary_header">
																	<input   name="mSection" id="mSectionall" type="checkbox" class="checkbox-template">
																	<label for="mSectionall"><b>Middle Section</b></label>
																</div>
																<div class="phBody">
																	<div class="i-checks">
																		<input   name="mSection" id="sGrad5" type="checkbox" class="checkbox-template">
																		<label for="sGrad5">Grade V</label>
																	</div>
																	<div class="i-checks">
																		<input   name="mSection" id="sGrad6" type="checkbox" class="checkbox-template">
																		<label for="sGrad6">Grade VI</label>
																	</div>
																	<div class="i-checks">
																		<input   name="mSection" id="sGrad7" type="checkbox" class="checkbox-template">
																		<label for="sGrad7">Grade VII</label>
																	</div>
																</div>
															</div>
														</div>
														
														<!-- Higher Section -->
														<div class="col-sm-3">
															
															<div class="form-group">
																
																<div class="i-checks primary_header">
																	<input   name="hSection" id="hSectionAll" type="checkbox" class="checkbox-template">
																	<label for="hSectionAll"><b>Higher Section</b></label>
																</div>
																<div class="phBody">
																	<div class="i-checks">
																		<input   name="hSection" id="hGrade8" type="checkbox" class="checkbox-template">
																		<label for="hGrade8">Grade VIII</label>
																	</div>
																	<div class="i-checks">
																		<input   name="hSection" id="hGrade9" type="checkbox" class="checkbox-template">
																		<label for="hGrade9">Grade IX</label>
																	</div>
																	<div class="i-checks">
																		<input   name="hSection" id="hGrade10" type="checkbox" class="checkbox-template">
																		<label for="hGrade10">Grade X</label>
																	</div>
																</div>
															</div>
														</div>
														
													</div>
													<div class="form-group row">
														<label class="col-sm-3 form-control-label no-padding-right" for="txt_Content">Message Content :</label>
														<div class="col-sm-4">
															<textarea class="form-control" rows="5" id="txt_Content" style="height:90px"> </textarea>
															
															
														</div>
													</div>
													
													
													
													<div class="row">
														<div class="col-sm-3 offset-3">
															<button class="btn btn-primary"><i class="fa fa-comments-o"></i> Send Message </button>
														</div>
													</div>
													
													
												</form>
											</div>
											<div class="tab-pane custom-padding fade" id="staff" role="tabpanel" aria-labelledby="profile-tab">
												
												<form class="form-horizontal">
													<div class="i-checks">
														<input  name="selectAllStaff" id="selStaff" type="checkbox" class="checkbox-template">
														<label for="selStaff"><h4> Select all Staff</h4></label>
													</div>
													<div class="form-group row">
														
														<!-- Teaching Section -->
														<div class="col-sm-3">
															<div class="form-group">
																<div class="i-checks chkBoxes primary_header">
																	<input   name="staffSection" id="staffTeaching" type="checkbox" class="checkbox-template">
																	<label for="staffTeaching">Teaching</label>
																	<a href="javascript:;"  class="text-right" data-toggle="modal" data-target="#StafflistView">List View</a>
																</div>
															</div>
														</div>
														<!-- Teaching Section -->
														<div class="col-sm-3">
															<div class="form-group">
																<div class="i-checks chkBoxes primary_header">
																	<input   name="staffSection" id="staffTransport" type="checkbox" class="checkbox-template">
																	<label for="staffTransport">Transport</label>
																	<a href="javascript:;"  class="text-right" data-toggle="modal" data-target="#StafflistView">List View</a>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
														</div>
														<div class="col-sm-3">
														</div>
														<!-- Non Teaching Section -->
														<div class="col-sm-3">
															<div class="form-group">
																<div class="i-checks chkBoxes primary_header">
																	<input   name="staffSection" id="staffnonTeaching" type="checkbox" class="checkbox-template">
																	<label for="staffnonTeaching">Non Teaching</label>
																	<a href="javascript:;"  class="text-right" data-toggle="modal" data-target="#StafflistView">List View</a>
																</div>
															</div>
														</div>
														
														<!-- Administration Section -->
														<div class="col-sm-3">
															<div class="form-group">
																<div class="i-checks chkBoxes primary_header">
																	<input   name="staffSection" id="staffAdmin" type="checkbox" class="checkbox-template">
																	<label for="staffAdmin">Administration</label>
																	<a href="javascript:;"  class="text-right" data-toggle="modal" data-target="#StafflistView">List View</a>
																</div>
															</div>
														</div>
														<div class="col-sm-3">
														</div><div class="col-sm-3">
													</div>
													<!-- Support Section -->
													<div class="col-sm-3">
														<div class="form-group">
															<div class="i-checks chkBoxes primary_header">
																<input   name="staffSection" id="staffSupport" type="checkbox" class="checkbox-template">
																<label for="staffSupport">Support</label>
																<a href="javascript:;"  class="text-right" data-toggle="modal" data-target="#StafflistView">List View</a>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 form-control-label no-padding-right" for="txt_Content">Message Content :</label>
													<div class="col-sm-4">
														<textarea class="form-control" id="txt_Content" rows="5" style="height:90px"> </textarea>
													</div>
												</div>
												
												
												
												<div class="row">
													<div class="col-sm-3 offset-3">
														<button class="btn btn-primary"><i class="fa fa-comments-o"></i> Send Message </button>
													</div>
												</div>
												
												
											</form>
										</div>
										<div class="tab-pane custom-padding fade" id="custom" role="tabpanel" aria-labelledby="contact-tab">
											
											<form class="form-horizontal">
												<h4>Custom SMS</h4>
												
												<div class="form-group row">
													<label class="col-sm-3 form-control-label no-padding-right" for="txtMobileNo">Enter Mobile No.. :</label>
													<div class="col-sm-4">
														<input type="text" id="txtMobileNo" class="form-control" placeholder="Mobile Number">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-3 form-control-label no-padding-right" for="txt_Content">Message Content :</label>
													<div class="col-sm-4">
														<textarea class="form-control" rows="5" id="txt_Content" style="height:90px"> </textarea>
													</div>
												</div>
												
												
												
												<div class="row">
													<div class="col-sm-3 offset-3">
														<button class="btn btn-primary"><i class="fa fa-comments-o"></i> Send Message </button>
													</div>
												</div>
												
												
											</form>
										</div>
									</div>
									
									
									
									
									
								</div>
							</div>
							
						</div>
					</div>
					
					
					
				</div>
				
				
				
				<!-- The Modal Parents -->
				<div class="modal" id="listView">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Nursery - A Section List</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">
								<input type="text" class="form-control" placeholder="Search Student or Parents">
								
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>
												
												<div class="i-checks">
													<input   name="selectAllrows" id="selectAllrows" type="checkbox" checked="true" class="checkbox-template">
													<label for="selectAllrows"> Select All</label>
												</div>
											</th>
											<th>
												Roll No
											</th>
											<th>
												Student Name
											</th>
											<th>
												Parents Name
											</th>
											<th>
												
												Mobile Number
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="i-checks">
													<input   name="sel1" id="sel1" type="checkbox" checked="true" class="checkbox-template">
													
												</div>
											</td>
											<td>
												1
											</td>
											<td>
												Rabbani
											</td>
											<td>
												Saleem
											</td>
											<td>9916918882</td>
										</tr>
										<tr>
											<td>
												<div class="i-checks">
													<input   name="sel1" id="sel1" type="checkbox" checked="true" class="checkbox-template">
													
												</div>
											</td>
											<td>
												2
											</td>
											<td>
												Komal
											</td>
											<td>
												Rajesh
											</td>
											<td>999999999</td>
										</tr>
										<tr>
											<td>
												<div class="i-checks">
													<input   name="sel1" id="sel1" type="checkbox" checked="true" class="checkbox-template">
													
												</div>
											</td>
											<td>
												3
											</td>
											<td>
												Saleem
											</td>
											<td>
												Fazdul
											</td>
											<td>9934939549</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
							</div>
						</div>
					</div>
				</div>
				<!-- The Modal Staff -->
				<div class="modal" id="StafflistView">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Nursery - A Section List</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<!-- Modal body -->
							<div class="modal-body">
								<input type="text" class="form-control" placeholder="Search Employee">
								
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>
												
												<div class="i-checks">
													<input   name="selectAllrows" id="selectAllrows" type="checkbox" checked="true" class="checkbox-template">
													<label for="selectAllrows"> Select All</label>
												</div>
											</th>
											<th>
												Employee No
											</th>
											
											<th>
												Employee Name
											</th>
											<th>
												
												Mobile Number
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="i-checks">
													<input   name="sel1" id="sel1" type="checkbox" checked="true" class="checkbox-template">
													
												</div>
											</td>
											<td>
												1
											</td>
											<td>
												Rabbani
											</td>
											
											<td>9916918882</td>
										</tr>
										<tr>
											<td>
												<div class="i-checks">
													<input   name="sel1" id="sel1" type="checkbox" checked="true" class="checkbox-template">
													
												</div>
											</td>
											<td>
												2
											</td>
											<td>
												Komal
											</td>
											
											<td>999999999</td>
										</tr>
										<tr>
											<td>
												<div class="i-checks">
													<input   name="sel1" id="sel1" type="checkbox" checked="true" class="checkbox-template">
													
												</div>
											</td>
											<td>
												3
											</td>
											<td>
												Saleem
											</td>
											
											<td>9934939549</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Page Footer-->
				<?php include("footer.php"); ?>
			</div>
		</div>
	</div>
	<?php include("scripts1.php"); ?>
	
	
	<script type="text/javascript">
	
	$('#spPsection').click(function() {
	if ($(this).is(':checked')) {
	$('.phBody.kk  input').attr('checked', true);
	} else {
	$('.phBody.kk input').attr('checked', false);
	}
	});
	
	</script>
</body>
</html>