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
                  <h2 class="no-margin-bottom">Agents Edit</h2>
               </div>
            </header>
            <!-- Dashboard Counts Section-->
            <section class="tables">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-12" >
					 						<div class="card">
                        <div class="card-body">
						 <div class="container-fluid">
					 
                        <?php
                           include("dbconnect.php");
                           $db->connect();
                           $agent_id=$_REQUEST["agent_id"];
                           $sql="select * from agents where agent_id='$agent_id'";
                           $res=$db->query($sql);
                           $row=$db->fetch_array($res);
						   ?>
                        <?php include("val.php"); ?>
                        <form method="post" action="agents_update.php" id="formID"  class="form-horizontal">
                           <input type="hidden" id="agent_id" name="agent_id" value="<?php echo $agent_id; ?>">
                           <div class="form-group row">
                              <label class="col-sm-3 form-control-label no-padding-right" for="agent_name">Agent Name:</label>
                              <div class="col-sm-9">
                                 <input type="text" id="agent_name" name="agent_name" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Name:" value="<?php echo $row['agent_name']; ?>">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 form-control-label no-padding-right" for="agent_address">Agent Address:</label>
                              <div class="col-sm-9">
                                 <textarea id="agent_address" name="agent_address" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Address:"><?php echo $row['agent_address']; ?></textarea>
                                 </div
                              </div>
							  </div>
                              <div class="form-group row">
                                 <label class="col-sm-3 form-control-label no-padding-right" for="agent_mobile">Agent Mobile:</label>
                                 <div class="col-sm-9">
                                    <input type="text" id="agent_mobile" name="agent_mobile" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Mobile:" value="<?php echo $row['agent_mobile']; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-3 form-control-label no-padding-right" for="agent_email">Agent Email:</label>
                                 <div class="col-sm-9">
                                    <input type="email" id="agent_email" name="agent_email" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Email:" value="<?php echo $row['agent_email']; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-3 form-control-label no-padding-right" for="agent_place">Agent Place:</label>
                                 <div class="col-sm-9">
                                    <input type="text" id="agent_place" name="agent_place" class="col-xs-10 col-sm-5 form-control" placeholder="Agent Place:" value="<?php echo $row['agent_place']; ?>">
                                 </div>
                              </div>
                              <div class="form-actions row">
                                 <div class="col-sm-9 offset-3">
								 <button type="submit" class="btn btn-primary">Submit</button>
                                 <button type="reset" class="btn btn-cancel">Reset</button>
								 <a href="agents_view.php" class="btn btn-cancel">Cancel</a>
								 </div>
                              </div>
                        </form>
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