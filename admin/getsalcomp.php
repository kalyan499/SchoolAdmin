<?php
error_reporting(0);
include("dbconnect.php"); 
$db->connect(); 
$fsal=$_REQUEST["fsal"];
?>
<table class="table table-hover">
                          <thead>
                            <tr>
                              <th>
							  <div class="i-checks">
                              <input id="ctcchkall" type="checkbox" value="" class="checkbox-template" onClick="scchkall()" checked>
                              <label for="ctc1">&nbsp;</label>
							  </div>							
							</th>
                              <th>Pay Type </th>
                              <th>Formula </th>
                              <th>Monthly</th>
							  <th>Annual</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                          $str="";
                          $i=0;
						  $gsal=0;
						  $tot_allowances=0;
						  $tot_deductions=0;
						  $netsal=0;
						  $bsal=0;
                            $sql_heads="select * from salary_heads where head_type='Allowance'";
                            $res_heads=$db->query($sql_heads);
                            while($row_heads=$db->fetch_array($res_heads))
                            {
                               if($i!=0)
                                 $str.=" + ";
                               $i++;
                               $str.=$row_heads["salary_head"];
							   $per=$row_heads["head_percentage"];
							   $perof=(int)$row_heads["percentage_of"];
							   $amt=0;
							   if($perof=="Fixed Salary")
							   {
							        $amt=round($fsal*$per/100);
							   }
							   else if($perof=="Basic Salary")
							   {
							   $amt=round($bsal*$per/100);
							   }
							   if($row_heads["salary_head"]=="Basic Salary")
							     $bsal=$amt;
							  $tot_allowances+=$amt;
                          ?>
                            <tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc2" type="checkbox" name="salary_head_id[]" value="<?php echo $row_heads["salary_head_id"]; ?>" class="checkbox-template scchk" checked>
                              <label for="ctc2">&nbsp;</label>
							  </div>
							  </th>
                              <td><?php echo $row_heads["salary_head"]; ?></td>
							  <td><?php echo $row_heads["percentage_of"]." * ".$row_heads["head_percentage"]."%"; ?> </td>
                          <td><input type="text" class="form-control" required readonly value="<?php echo $amt; ?>" style="text-align:  right;"></td>
                              <td><input type="text" class="form-control" required readonly  value="<?php echo $amt*12; ?>" style="text-align:  right;"></td>
                            </tr>
                           <?php
                           }
						   $gsal=$tot_allowances;
                           ?>
                           <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Gross Salary</td>
							  <td><?php echo $str; ?> </td>
                              <td><input type="text" class="form-control"  required readonly value="<?php echo $gsal; ?>" style="text-align:  right;"></td>
                              <td><input type="text" class="form-control" required readonly  value="<?php echo $gsal*12; ?>" style="text-align:  right;"></td>
                            </tr>
                           <?php
                             $str="";
                          $i=0;
                            $sql_heads="select * from salary_heads where head_type='Deduction'";
                            $res_heads=$db->query($sql_heads);
                            while($row_heads=$db->fetch_array($res_heads))
                            {
							
                            if($i!=0)
                                 $str.=" - ";
                               $i++;
                               $str.=$row_heads["salary_head"];
							      $per=(float)$row_heads["head_percentage"];
							   $perof=$row_heads["percentage_of"];
							   $amt=0;
							   if($perof=="Fixed Salary")
							   {
							        $amt=round($fsal*$per/100);
							   }
							   else if($perof=="Basic Salary")
							   {
							   $amt=round($bsal*$per/100);
							   }
							   else if($perof=="Gross Salary")
							   {
							   $amt=round($gsal*(float)$per/100);
							   }
							   
							  $tot_deductions+=$amt;
                          ?>
                            <tr>
                              <th scope="row">
							  <div class="i-checks">
                              <input id="ctc2" type="checkbox" v name="salary_head_id[]" value="<?php echo $row_heads["salary_head_id"]; ?>" class="checkbox-template scchk" checked  <?php if(($row_heads["salary_head"]=="Employees State Insurance" || $row_heads["salary_head"]=="Provident Fund") && ($fsal>15000 && $fsal<=30000)){ echo "style='visibility:hidden;'"; } ?>>
                              <label for="ctc2">&nbsp;</label>
							  </div>
							  </th>
                              <td><?php echo $row_heads["salary_head"]; ?></td>
							  <td><?php echo $row_heads["percentage_of"]." * ".$row_heads["head_percentage"]."%"; ?> </td>
                              <td><input type="text" class="form-control" required readonly value="<?php echo $amt; ?>" style="text-align:  right;"></td>
                              <td><input type="text" class="form-control" required readonly  value="<?php echo $amt*12; ?>" style="text-align:  right;"></td>
                            </tr>
                           <?php
                           }
                           if($fsal>=15000)
                           {
                           $amt=200;
                           $tot_deductions+=$amt;
                           ?>
                           <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Professional Tax(PT)</td>
							  <td> </td>
                              <td><input type="text" class="form-control" name="ptax" required readonly value="<?php echo $amt; ?>" style="text-align:  right;"></td>
                              <td><input type="text" class="form-control" required readonly  value="<?php echo $amt*12; ?>" style="text-align:  right;"></td>
                            </tr>
                           <?php
                           }
						   $netsal=$gsal-$tot_deductions;
                           ?>
                            <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Total Deductions</td>
							  <td><?php echo $str; ?> </td>
                              <td><input type="text" class="form-control" required  readonly value="<?php echo $tot_deductions; ?>" style="text-align:  right;"></td>
                              <td><input type="text" class="form-control" required  readonly value="<?php echo $tot_deductions*12; ?>" style="text-align:  right;"></td>
                            </tr>
                            <tr>
                              <th scope="row">
							  
							  </th>
                              <td>Net Salary</td>
							  <td>Gross Salary - Total Deductions</td>
                              <td><input type="text" class="form-control" required  readonly value="<?php echo $netsal; ?>" style="text-align:  right;"></td>
                              <td><input type="text" class="form-control" required  readonly value="<?php echo $netsal*12; ?>" style="text-align:  right;"></td>
                            </tr>
                          </tbody>
                        </table>