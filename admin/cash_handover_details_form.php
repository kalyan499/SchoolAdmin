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
                     <h2 class="no-margin-bottom">Add New Cash Handover Details</h2>
                  </div>
               </header>
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
calctot();
var amount=document.getElementById("amount").value;
var tot=document.getElementById("total").value;
if(amount!=tot)
{ 
bootbox.alert("Pleas Recheck. Hadover Amount and Total Amount not same");
return false;
}
else if(amount<=0)
{ 
bootbox.alert("Pleas Recheck. Hadover Amount cant be less than or equals to zero");
return false;
}
else
  return true;
}
</script>	
               <!-- Dashboard Counts Section-->
               <section class="tables">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-12" >
						<div class="card">
                        <div class="card-body">
						 <div class="container-fluid">
                           <?php include("dbconnect.php"); 
                              $db->connect(); ?>
                           <form method="post" action="cash_handover_details_insert.php" id="formID" class="form-horizontal"  onSubmit="return chkamt()">
						   <div class="row">
							<div class="col-md-6">
								<div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="from_date">From Date:</label>
                                 <div class="col-sm-7">
                                 <div class="input-group date">
                                    <input name="from_date" type="text" class="form-control" id="from_date" placeholder="From Date:" required>
                                    <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                 </div>
                              </div>
							  </div>
							  <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="to_date">To Date:</label>
                                 <div class="col-sm-7">
                                 <div class="input-group date">
                                    <input type="text" id="to_date" name="to_date" class="form-control" placeholder="To Date:" required>
                                    <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                 </div>
                              </div>
							  </div>
							  <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="amount">Amount:</label>
                                 <div class="col-sm-7">
                                    <input name="amount" type="number" min="0" class="form-control" id="amount" value="0" placeholder="Amount" required>
                                 </div>
                              </div>
							  <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="hand_over_date">Hand Over Date:</label>
                                 <div class="col-sm-7">
                                 <div class="input-group date">
                                    <input type="text" id="hand_over_date" name="hand_over_date" class="form-control" placeholder="Hand Over Date" required value="<?php echo date('d-m-Y'); ?>">
                                    <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                 </div>
                              </div>
							  </div>
							  <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="hand_over_by">Hand Over By:</label>
                                 <div class="col-sm-7">
                                    <input type="text" id="hand_over_by" name="hand_over_by" class="form-control" placeholder="Hand Over By" required>
                                 </div>
                              </div>
							  
								
							</div>
							<div class="col-md-6">
							<div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="two_thousand">2000/-:</label>
                                 <div class="col-sm-7">
                                    <input name="two_thousand" type="number" min="0" class="form-control" id="two_thousand" value="0" placeholder="Two Thousands" required onBlur="calctot()">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="thousand">1000/-:</label>
                                 <div class="col-sm-7">
                                    <input name="thousand" type="number" min="0" class="form-control" id="thousand" value="0" placeholder="Thousands" required onBlur="calctot()">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="five_hundred">500/-:</label>
                                 <div class="col-sm-7">
                                    <input name="five_hundred" type="number" min="0" class="form-control" id="five_hundred" value="0" placeholder="Five Hundreds" required onBlur="calctot()">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="two_hundred">200/-:</label>
                                 <div class="col-sm-7">
                                    <input name="two_hundred" type="number" min="0" class="form-control" id="two_hundred" value="0" placeholder="Two Hundreds" required onBlur="calctot()">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="hundred">100/-:</label>
                                 <div class="col-sm-7">
                                    <input name="hundred" type="number" class="form-control" id="hundred" value="0" placeholder="Hundreds" required onBlur="calctot()">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="fifty">50/-:</label>
                                 <div class="col-sm-7">
                                    <input name="fifty" type="number" min="0" class="form-control" id="fifty" value="0" placeholder="Fiftys" required onBlur="calctot()">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="twenty">20/-:</label>
                                 <div class="col-sm-7">
                                    <input name="twenty" type="number" min="0" class="form-control" id="twenty" value="0" placeholder="Twentys" required onBlur="calctot()">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="ten">10/-:</label>
                                 <div class="col-sm-7">
                                    <input name="ten" type="number" min="0" class="form-control" id="ten" value="0" placeholder="Tens" required onBlur="calctot()">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-sm-4 form-control-label no-padding-right" for="total">Total:</label>
                                 <div class="col-sm-7">
                                    <input name="total" type="number" min="0" class="form-control" id="total" value="0" placeholder="Total:" required>
                                 </div>
                              </div>
							</div>
						   </div>
                              
                              <div class="form-actions row">
                                 <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-check bigger-110"></i> Submit</button>
                                    <button type="reset" class="btn btn-cancel"><i class="ace-icon fa fa-undo bigger-110"></i> Reset</button>
                                    <a href="cash_handover_details_view.php" class="btn btn-default"><i class="fa fa-angle-left bigger-110"></i> Cancel</a>
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