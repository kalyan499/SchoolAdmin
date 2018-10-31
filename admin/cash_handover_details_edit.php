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
                     <h2 class="no-margin-bottom">Cash Handover Details Edit</h2>
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
									     <script type="text/javascript">
function calctot()
{

var two_thousand=parseInt(document.getElementById("two_thousand").value)*2000;
var thousand=parseInt(document.getElementById("thousand").value)*1000;
	var five_hundred=parseInt(document.getElementById("five_hundred").value)*500;
	var two_hundred=parseInt(document.getElementById("two_hundred").value)*200;
	var hundred=parseInt(document.getElementById("hundred").value)*100;
	var fifty=parseInt(document.getElementById("fifty").value)*50;
	var twenty=parseInt(document.getElementById("twenty").value)*20;
	var ten=parseInt(document.getElementById("ten").value)*10;
var tot=two_thousand+thousand+five_hundred+two_hundred+hundred+fifty+twenty+ten;
document.getElementById("total").value=tot;
}
function chkamt()
{
var amount=document.getElementById("amount").value;
var tot=document.getElementById("total").value;
if(amount!=tot)
{ 
bootbox.alert("Pleas Recheck. Hadover Amount and Total Amount not same");
return false;
}
else
  return true;
}
</script>	
                           <?php
                              include("dbconnect.php");
                              $db->connect();
                              $cash_handover_id=$_REQUEST["cash_handover_id"];
                              $sql="select * from cash_handover_details where cash_handover_id='$cash_handover_id'";
                              $res=$db->query($sql);
                              
                              			$row=$db->fetch_array($res);
                              ?>
                           <?php include("val.php"); ?>
                           <form method="post" action="cash_handover_details_update.php" id="formID"  class="form-horizontal">
                              <input name="cash_handover_id" type="hidden" value="<?php echo $row['cash_handover_id']; ?>">
                             <div class="row">
							<div class="col-md-6">
								<div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="from_date">From Date:</label>
                                 <div class="col-sm-7">
									<div class="input-group date">
                                    <input name="from_date" type="text" class="form-control" id="from_date" placeholder="From Date:" required value="<?php echo $row['from_date']; ?>">
                                    <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                 </div>
								 
                                   <!-- <input name="from_date" type="date" class="form-control" id="from_date" placeholder="From Date:" required > -->
                                 </div>
                              </div>
							  <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="to_date">To Date:</label>
                                 <div class="col-sm-7">
								 <div class="input-group date">
                                    <input type="text" class="form-control" id="to_date" name="to_date" placeholder="From Date:" required  value="<?php echo $row['to_date']; ?>">
                                    <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                 </div>
                                  <!--  <input type="date" id="to_date" name="to_date" class="form-control" placeholder="To Date:" required> -->
                                 </div>
                              </div>
							  <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="amount">Amount:</label>
                                 <div class="col-sm-7">
                                    <input name="amount" type="number" class="form-control" id="amount" placeholder="Amount" required value="<?php echo $row['amount']; ?>">
                                 </div>
                              </div>
							  <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="hand_over_date">Hand Over Date:</label>
                                 <div class="col-sm-7">
								 <div class="input-group date">
                                    <input type="text" class="form-control" id="hand_over_date" name="hand_over_date" placeholder="Hand Over Date" required  value="<?php echo $row['hand_over_date']; ?>">
                                    <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                 </div>
                                   <!-- <input type="date" id="hand_over_date" name="hand_over_date" class="form-control" placeholder="Hand Over Date" required > -->
                                 </div>
                              </div>
							  <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="hand_over_by">Hand Over By:</label>
                                 <div class="col-sm-7">
                                    <input type="text" id="hand_over_by" name="hand_over_by" class="form-control" placeholder="Hand Over By" required value="<?php echo $row['hand_over_by']; ?>">
                                 </div>
                              </div>
							  
								
							</div>
							<div class="col-md-6">
							<div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="two_thousand">2000/-:</label>
                                 <div class="col-sm-7">
                                    <input name="two_thousand" type="text" class="form-control" id="two_thousand" placeholder="Two Thousands" required onBlur="calctot()" value="<?php echo $row['two_thousand']; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="thousand">1000/-:</label>
                                 <div class="col-sm-7">
                                    <input name="thousand" type="text" class="form-control" id="thousand" placeholder="Thousands" required onBlur="calctot()" value="<?php echo $row['thousand']; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="five_hundred">500/-:</label>
                                 <div class="col-sm-7">
                                    <input name="five_hundred" type="text" class="form-control" id="five_hundred" placeholder="Five Hundreds" required onBlur="calctot()" value="<?php echo $row['five_hundred']; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="two_hundred">200/-:</label>
                                 <div class="col-sm-7">
                                    <input name="two_hundred" type="text" class="form-control" id="two_hundred" placeholder="Two Hundreds" required onBlur="calctot()" value="<?php echo $row['two_hundred']; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="hundred">100/-:</label>
                                 <div class="col-sm-7">
                                    <input name="hundred" type="text" class="form-control" id="hundred" placeholder="Hundreds" required onBlur="calctot()" value="<?php echo $row['hundred']; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="fifty">50/-:</label>
                                 <div class="col-sm-7">
                                    <input name="fifty" type="text" class="form-control" id="fifty" placeholder="Fiftys" required onBlur="calctot()" value="<?php echo $row['fifty']; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="twenty">20/-:</label>
                                 <div class="col-sm-7">
                                    <input name="twenty" type="text" class="form-control" id="twenty" placeholder="Twentys" required onBlur="calctot()" value="<?php echo $row['twenty']; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="ten">10/-:</label>
                                 <div class="col-sm-7">
                                    <input name="ten" type="text" class="form-control" id="ten" placeholder="Tens" required onBlur="calctot()" value="<?php echo $row['ten']; ?>">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="total">Total:</label>
                                 <div class="col-sm-7">
                                    <input name="total" type="text" class="form-control" id="total" placeholder="Total:" required value="<?php echo $row['total']; ?>">
                                 </div>
                              </div>
							</div>
						   </div>
                              
                              <div class="form-actions row">
                                 <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>
                                    <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button>
                                    <a href="cash_handover_details_view.php" class="btn btn-cancel"><i class="fa fa-undo bigger-110"></i> Cancel</a>
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