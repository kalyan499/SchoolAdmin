<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                     <h2 class="no-margin-bottom">Amount Handover Details</h2>
                  </div>
               </header>
               <!-- Dashboard Counts Section-->
               <section class="tables">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="card">
                              <div class="card-header align-items-center">
                                 <div class="card-comps pull-right text-right">
								 <a href="cash_handover_details_form.php" class="btn btn-primary">Add New</a>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive">
                                    					  
                                    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
                                       <thead>
                                          <tr>
                                             <th scope="col">S.No</th>
                                             <th scope="col">From Date</th>
                                             <th scope="col">To Date</th>
                                             <th scope="col">Amount</th>
                                             <th scope="col">Hand Over Date</th>
                                             <th scope="col">Hand Over By</th>
                                             <th scope="col">2000/-</th>
                                             <th scope="col">1000/-</th>
                                             <th scope="col">500/-</th>
                                             <th scope="col">200/-</th>
                                             <th scope="col">100/-</th>
                                             <th scope="col">50/-</th>
                                             <th scope="col">20/-</th>
                                             <th scope="col">10/-</th>
                                             <th scope="col">Total</th>
                                             <th scope="col">Approval Status</th>
                                             <th scope="col">Actions</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php include("dbconnect.php");
                                             $db->connect();
                                             $sn=1;
                                             $sql="select * from cash_handover_details";
                                             $res=$db->query($sql);
                                             while($row=$db->fetch_array($res))
                                             {
                                             ?>
                                          <tr>
                                             <td><?php echo $sn++; ?></td>
                                             <td><?php echo $row["from_date"]; ?></td>
                                             <td><?php echo $row["to_date"]; ?></td>
                                             <td><?php echo $row["amount"]; ?></td>
                                             <td><?php echo $row["hand_over_date"]; ?></td>
                                             <td><?php echo $row["hand_over_by"]; ?></td>
                                             <td><?php echo $row["two_thousand"]; ?></td>
                                             <td><?php echo $row["thousand"]; ?></td>
                                             <td><?php echo $row["five_hundred"]; ?></td>
                                             <td><?php echo $row["two_hundred"]; ?></td>
                                             <td><?php echo $row["hundred"]; ?></td>
                                             <td><?php echo $row["fifty"]; ?></td>
                                             <td><?php echo $row["twenty"]; ?></td>
                                             <td><?php echo $row["ten"]; ?></td>
                                             <td><?php echo $row["total"]; ?></td>
                                             <td><?php echo $row["approval_status"]; ?></td>
                                             <td class="hidden-sm hidden-xs btn-group"><a href="cash_handover_details_edit.php?cash_handover_id=<?php echo $row["cash_handover_id"]; ?>" class="btn btn-sm btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a><a href="#"  class="btn btn-sm btn-danger" onClick="calert('Are you sure you want to delete this?','cash_handover_details_delete.php?cid=<?php echo $row["cash_handover_id"]; ?>')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a></td>
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
    