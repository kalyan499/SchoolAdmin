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
        <!-- Dashboard Counts Section-->
        <?php include("dbconnect.php");
        $db->connect(); ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Payment Information</h2>
            </div>
          </header>
          <section class="dashboard-counts">
            <div class="container-fluid">
              <div class=" bg-white has-shadow">
                
                <div class="row">
                  <div class="col-md-12">
                    <h4 class="ptb-20"> </h4>
                  </div>
                </div>
                <!-- #section:elements.form -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="control-label" for="stuClass">Grade Section</label>
                      <select id="course_id" name="course_id" class="form-control" required onBlur="selcourse()">
                        <option value="">Select Grade Section</option>
                        <?php
                        $sqlr="select * from courses";
                        $resr=$db->query($sqlr);
                        while($rowr=$db->fetch_array($resr))
                        {
                        ?>
                        <option value="<?php echo $rowr["course_id"]; ?>"><?php echo $rowr["course_name"]; ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="control-label" for="stuClass">Grade</label>
                      <div id="syear">
                        <select class="form-control" id="year" name="year" onChange="selyear()">
                          <option value="">Select Grade</option>
                          
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label class="control-label" for="stuId">Reg No/Student Name</label>
                      <div id="student">
                        Select Grade Section & Grade
                      </div>
                    </div>
                  </div>
                  </div>
                <div  id="sfees">
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <?php $db->close(); ?>
          <?php include("footer.php"); ?>
        </div>
      </div>
    </div>
    <?php include("scripts.php"); ?>
    <script type="text/javascript">
    function selPaymentMode()
    {
    var pmode=document.getElementById("stuModeofPayment").value;
    if(pmode=="")
    {
    document.getElementById("pdetails").style="display:none;";
    }
    else if(pmode=="Cash")
    {
    document.getElementById("stuDdentry").required=false;
    document.getElementById("pdetails").style="display:none;";
    }
    else if(pmode=="Cheque")
    {
    document.getElementById("payment_details").innerHTML="Cheque No.";
    document.getElementById("stuDdentry").placeholder="Cheque No.";
    document.getElementById("pdetails").style="display:block;";
    }
    else if(pmode=="DD")
    {
    document.getElementById("payment_details").innerHTML="DD Number";
    document.getElementById("stuDdentry").placeholder="DD Number";
    document.getElementById("pdetails").style="display:block;";
    }
    else if(pmode=="Online Transfer")
    {
    document.getElementById("payment_details").innerHTML="Tranfser Code";
    document.getElementById("stuDdentry").placeholder="Tranfser Code";
    document.getElementById("pdetails").style="display:block;";
    }
    
    }
    </script>
    <script type="text/javascript">
    function chkamt()
    {
    
    var tpay=parseInt(document.getElementById("totp").innerHTML);
    if(tpay==0)
    {
    bootbox.alert("No payment added");
    return false;
    }
    else
    {
    return true;
    }
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
    xhttp.open("GET", "getyears.php?course_id="+course_id, true);
    xhttp.send();
    }
    function selyear() {
    var xhttp = new XMLHttpRequest();
    var course_id=document.getElementById("course_id").value;
    var year=document.getElementById("year").value;
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("student").innerHTML=
    this.responseText;
    }
    };
    xhttp.open("GET", "getstudents.php?course_id="+course_id+"&year="+year, true);
    xhttp.send();
    }
    function selstudent() {
    var xhttp = new XMLHttpRequest();
    var student_id=document.getElementById("student_id").value;
    var course_id=document.getElementById("course_id").value;
    var year=document.getElementById("year").value;
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("sfees").innerHTML=
    this.responseText;
    }
    };
    xhttp.open("GET", "getsfees.php?student_id="+student_id+"&course_id="+course_id+"&year="+year, true);
    xhttp.send();
    }
    function calcbal(ftid)
    {var feespaid=0;
    var fees=parseInt(document.getElementById("fees"+ftid).innerHTML);
    if(document.getElementById("feespaid"+ftid).innerHTML!="")
    feespaid=parseInt(document.getElementById("feespaid"+ftid).innerHTML);
    var fees_paid=parseInt(document.getElementById("paid_amount"+ftid).value);
    var bal=fees-feespaid;
    if(fees_paid>bal)
    {
    alert("Current Payment Can not be greater than balance");
      document.getElementById("paid_amount"+ftid).value="0";
      document.getElementById("bal"+ftid).innerHTML=fees-feespaid;
    }
    else
    {
    document.getElementById("bal"+ftid).innerHTML=fees-feespaid-fees_paid;
    calctot();
    }
    }
    function calctot()
    {
    var tfees=parseInt(document.getElementById("totfees").innerHTML);
    var pt=parseInt(document.getElementById("totpt").innerHTML);
    var pays=document.getElementsByClassName("pay");
    var bals=document.getElementsByClassName("bal");
    var tot_pay=0;
    var tot_bal=0;
    for (i = 0; i < pays.length; i++) {
    tot_pay+=parseInt(pays[i].value);
    tot_bal+=parseInt(bals[i].innerHTML);
    }
      document.getElementById("totp").innerHTML=tot_pay;
        document.getElementById("totb").innerHTML=tfees-pt-tot_pay;
    }
    </script>
  </body>
</html>