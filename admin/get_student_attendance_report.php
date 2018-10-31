<?php
include("../session_validate.php");
include("dbconnect.php"); 
$db->connect(); 
$course_id=$_REQUEST["course_id"];
$syear=$_REQUEST["syear"];
$months=array("Select Month","Jan","Feb","March","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec");
$month=$_REQUEST["month"];
$year=$_REQUEST["year"];
$days = getDays($month,$year);
?>   
<div class="card-header align-items-center">
                                 <h3 class="h4 float-left">
                                    Attendance Sheet of Students : <?php echo $months[$month]." ".$year; ?>
									</h3>
									<form class="form-inline float-right" action="#">
													&nbsp;
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
                                             <th>Student Name</th>
                                             <th>Roll Number</th>
<?php

	     	for($i=1;$i<=$days;$i++)
			{
?>		
                <th class="text-center"><?php echo $i; ?></th>
<?php
	       }
?>
                                          </tr>
                                       </thead>
                                       <tbody>
                                       <?php

$sql="select * from students where course_id='$course_id' and current_year='$syear' and academic_year='".$_SESSION["academic_year"]."'";
$res=$db->query($sql);
while($row=$db->fetch_array($res))
{
   
?>
                                          <tr>
                                             <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
                                             <td><?php echo $row["roll_number"]; ?></td>
                                             <?php
	  $present=0;
	 $numdays=0;
	     	for($i=1;$i<=$days;$i++)
			{
			  $adate=$i."-".$month."-".$year;
				$cdate=date('j-n-Y');
			

				if(strtotime($adate)<=strtotime($cdate))
				{
				$numdays++;
			    $sql1="select * from student_attendances where student_id='".$row["student_id"]."' and attendance_date='$i-$month-$year' and course_id='$course_id' and year='$syear'";
				 $res1=$db->query($sql1);
				 if($row1=$db->fetch_array($res1))
				 {	
				 $attendance_status=$row1["attendance_status"];	
				 if($attendance_status=="Present")
				 {		
				  $present++; 
				  ?> 
  			
                                             <td class="text-center">
                                                <i class="fa fa-check text-success"></i>
                                             </td>
                                       
                                       
                                       <?php
                                         }
                                         else if($attendance_status=="Absent")
                                         {
                                         ?> 
    			
                                             <td class="text-center">
                                                <i class="fa fa-times text-danger"></i>
                                             </td>
                                       
                                       
                                       <?php
                                         }
                                         
                                         
                                          }
                                       else
                                       {
                                       
                                       ?>     
                                             <td class="text-center">
                                                -
                                             </td>
                                        
                                        <?php 
                                          }
                                         
                                       }
                                       else
                                       {
                                       ?>     
                                             <td class="text-center">
                                                -
                                             </td>
                                        
                                        <?php 
                                          }
                                        }
                                        ?>    
                                          </tr>
                                           <?php
                                         }
                                         ?>
                                       </tbody>
                                    </table>
                </div>
              </div>                                    
<?php 

//--------------------------------------------------------------------------------------------------------------------------------------------

//Function

//Function to return only date field from date

function getDateDay($x){

	$day = (int)substr($x,8,2);

	return $day;

}

//--------------------------------------------------------------------------------------------------------------------------------------------

function greaterDate($start_date,$end_date)
{
  $start = strtotime($start_date);
  $end = strtotime($end_date);
  if ($start-$end > 0)
    return 1;
  else
   return 0;
}

?>
<?php

//Function to get the no of days of a selected month and year...

function getDays($m,$y)

{

	if(($m==1)||($m==3)||($m==5)||($m==7)||($m==8)||($m==10)||($m==12))

        return 31;

    else if(($m==4)||($m==6)||($m==9)||($m==11))

        return 30;

    else if(($y%4==0)){

         if(($y%100==0)&&($y%400!=0)) // As all the centuries are not leap ears except divisible by 400

             return 28;

         else

             return 29;

    }else

		return 28;

}

?>                                    