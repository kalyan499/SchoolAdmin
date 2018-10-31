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
                     <h2 class="no-margin-bottom">Third Party Details</h2>
                  </div>
               </header>
                
              
               <!--Dashbaord Fees Collection -->
               <section class="tables">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-12">
						
						 <div class="panel-group" id="newAgent">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 data-toggle="collapse" data-parent="#newAgent" href="#newAgentCollapse" class="panel-title expand mb-0">
                           <div class="right-arrow pull-right">+</div>
                           <a href="#">Add New Agent Details</a>
                        </h4>
                     </div>
                     <div id="newAgentCollapse" class="panel-collapse collapse">
                        <div class="panel-body">
                           <form method="post" action="agents_insert.php" id="formID" class="form-horizontal">
                              <div class="form-group row">
                                 <label class="col-sm-3 form-control-label no-padding-right" for="agent_name">Agent Name:</label>
                                 <div class="col-sm-9">
                                    <input type="text" id="agent_name" name="agent_name" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Name:" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-3 form-control-label no-padding-right" for="agent_address">Agent Address:</label>
                                 <div class="col-sm-9">
                                    <textarea id="agent_address" name="agent_address" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Address:"></textarea>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-3 form-control-label no-padding-right" for="agent_mobile">Agent Mobile:</label>
                                 <div class="col-sm-9">
                                    <input type="text" id="agent_mobile" name="agent_mobile" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Mobile:" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-3 form-control-label no-padding-right" for="agent_email">Agent Email:</label>
                                 <div class="col-sm-9">
                                    <input type="email" id="agent_email" name="agent_email" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Email:" required>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-3 form-control-label no-padding-right" for="agent_place">Agent Place:</label>
                                 <div class="col-sm-9">
                                    <input type="text" id="agent_place" name="agent_place" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Place:" required>
                                 </div>
                              </div>
                              <div class="form-actions">
                                 <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>
                                    <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
						
                           <div class="card">
                              <div class="card-header align-items-center">
                                 <h3 class="h4">
                                    Agents Details
                                    <div class="card-comps pull-right">
                                    </div>
                                    <div class="clearfix"></div>
                                 </h3>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
                                       <thead>
                                          <tr>
                                             <th scope="col">S.No</th>
                                             <th scope="col">Agent Name</th>
                                             <th scope="col">Agent Address</th>
                                             <th scope="col">Agent Mobile</th>
                                             <th scope="col">Agent Email</th>
                                             <th scope="col">Agent Place</th>
                                             <th scope="col">Actions</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php include("dbconnect.php");
                                             $db->connect();
                                             $sn=1;
                                             $sql="select * from agents";
                                             $res=$db->query($sql);
                                             while($row=$db->fetch_array($res))
                                             {
                                             ?>
                                          <tr>
                                             <td><?php echo $sn++; ?></td>
                                             <td><?php echo $row["agent_name"]; ?></td>
                                             <td><?php echo $row["agent_address"]; ?></td>
                                             <td><?php echo $row["agent_mobile"]; ?></td>
                                             <td><?php echo $row["agent_email"]; ?></td>
                                             <td><?php echo $row["agent_place"]; ?></td>
                                             <td class="hidden-sm hidden-xs btn-group">
											 <a href="agents_edit.php?agent_id=<?php echo $row["agent_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
											 <a href="#"  class="btn btn-sm btn-danger" onClick="return calert('Are you sure you want to delete this?','agents_delete.php?agent_id=<?php echo $row["agent_id"]; ?>')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
                                          </tr>
                                          <?php
                                             }
                                             ?>
                                       </tbody>
                                    </table>
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