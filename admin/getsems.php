<?php
$year=$_REQUEST["year"];
$sems=$year*2;
?>
<select class="form-control" id="current_sem" name="current_sem">
<option value="">Select Sem</option>                                         
<option><?php echo $sems-1; ?></option>
<option><?php echo $sems; ?></option>
</select>