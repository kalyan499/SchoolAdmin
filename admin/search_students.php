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
<?php include("../session_validate.php"); ?>

      <div class="page-content d-flex align-items-stretch"> 

        <!-- Side Navbar -->

<?php //include("sidebar.php"); ?>

        <div class="content-inner">
  
     <script type="text/javascript">    
function insertValue(s_id,s_name)
{
	window.opener.document.getElementById('sibling_id').value=s_id;
	window.opener.document.getElementById('sibling_name').value=s_name;
	window.close();
}
</script>
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
     
      <div class="tab-pane active" id="stu_lists">
      
	  <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="example">
                                                <thead>
              <tr>
   <th>Select</th>
                                                        <th>Roll No</th>
                                                        <th>Admission Date</th>
														<th>Name</th>
                                                        <th>Gender</th>
                                                        <th>Parent/Gaurdian Name</th>
                                                        <th>Grade Section</th>
                                                        <th>Grade</th>
														<th>RTE</th>
                                                        <th>Address</th>
                                                        <th>Date of birth</th>
                                                        <th>Mobile No</th>
                                                        <th>E-mail id</th>
														
                                                     
                                                    </tr>
                                                </thead>

                                                <tbody>
												<?php
												$sn=1;
$sql="select * from students s,courses c where s.course_id=c.course_id and academic_year='".$_SESSION["academic_year"]."'";
$res=$db->query($sql);
                                                while($row=$db->fetch_array($res))
                                                {
												?>
                                                    <tr>
                                                    <td><div class="i-checks in-block"><input type="radio" name="sid" id="sid" class="radio-template" value="<?php echo $row["student_id"]; ?>"  onclick="insertValue('<?php echo $row["student_id"] ?>','<?php echo $row["roll_number"]."-".$row["first_name"]." ".$row['last_name']; ?>');"/></div></td>
                                                        <td><?php echo $row["roll_number"]; ?></td>
														<td><?php echo formatADate($row["registration_date"]); ?></td>
                                                        <td>
                                                            <?php echo $row["first_name"]." ".$row["last_name"]; ?>
                                                        </td>
                                                        <td><?php echo $row["gender"]; ?></td>
                                                        <td><?php echo $row["father_name"]; ?></td>
                                                        <td><?php echo $row["course_name"]; ?></td>
                                                        <td><?php echo $row["current_year"]; ?></td>
														  <td><?php echo $row["rte"]; ?></td>
                                                        <td><?php echo $row["address"]; ?></td>
                                                        <td><?php echo $row["date_of_birth"]; ?></td>
                                                        <td><?php echo $row["mobile"]; ?></td>
                                                        <td><?php echo $row["email"]; ?></td>
                                                       
                                                    </tr>
                                                     <?php
													 }
													 ?>
                                                    

                                                </tbody>
                                            </table>
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

         <?php //include("footer.php"); ?>

        </div>

      </div>

    </div>

  <?php include("scripts1.php"); ?>
  
  </body>

</html>
<?php
function formatADate($adate)
{
    $adates=explode(" ",$adate);
	$adate=$adates[0];
	$ad=explode("-",$adate);
	return $ad[2]."-".$ad[1]."-".$ad[0];
}
?>