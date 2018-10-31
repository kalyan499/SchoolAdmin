<?php
error_reporting(0);
include("dbconnect.php");
$db->connect();
?>
<div class="col-md-3">
<div class="form-group">
<label class="control-label" for="previous_school_affiliation">Previous School Affiliation<span class="mdfield">*</span></label>
<select class="form-control" id="previous_school_affiliation" name="previous_school_affiliation" required>

 <option value="">Select Previous School Affiliation</option>
  <option>ICSE</option>
                                          <option>CBSE</option>
                                          <option>STATE</option>
										  <option>Other</option>
</select>
  </div>
</div>
 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="transfer_certificate_number">Transfer Certificate No</label>
                                       <input type="text" id="transfer_certificate_number" name="transfer_certificate_number" required="required" class="form-control" placeholder="Transfer Cirtificate No" >
                                    </div>
                                 </div>
								   <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label">Transfer Certificate Date <span class="mdfield">*</span></label>
                                       <div class="input-group date">
<!-- <input  id="date_of_birth" name="date_of_birth" type="text"  placeholder="dd-mm-yyyy" class="form-control dateofbirth" required="required"> -->
                                          <input  id="transfer_certificate_date" name="transfer_certificate_date" type="text"  placeholder="dd-mm-yyyy" class="form-control" required="required">
                                          <span class="input-group-addon">
                                          <i class="fa fa-calendar bigger-110"></i>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_name">Previous School Name</label>
        <input type="text" id="previous_school_name" name="previous_school_name" class="form-control" placeholder="Previous School Name">
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_type">Previous School Type</label>
<select class="form-control" id="previous_school_type" name="previous_school_type" required>

 <option value="">Select Previous School Type</option>
   <option value="93" title="Javahar Navodaya Vidyalaya">Javahar Navodaya Vidyalaya</option>
                                                                        <option value="92" title="Kendriya Vidyalay / Central Schools">Kendriya Vidyalay / Central Schools</option>
                                                                        <option value="94" title="Sainik Schools">Sainik Schools</option>
                                                                        <option value="90" title="Social Welfare Department Schools">Social Welfare Department Schools</option>
                                                                        <option value="91" title="Ministry of Labor">Ministry of Labor</option>
                                                                        <option value="0" title="All Management">All Management</option>
                                                                        <option value="1" title="Department of Education">Department of Education</option>
                                                                        <option value="2" title="Tribal Welfare Department Schools">Tribal Welfare Department Schools</option>
                                                                        <option value="3" title="Local body">Local body</option>
                                                                        <option value="4" title="Pvt. Aided">Pvt. Aided</option>
                                                                        <option value="5" title="Pvt. Unaided">Pvt. Unaided</option>
                                                                        <option value="6" title="Others State Govt. Managed Schools">Others State Govt. Managed Schools</option>
                                                                        <option value="95" title="Railway Schools">Railway Schools</option>
                                                                        <option value="8" title="Un-Recognised">Un-Recognised</option>
                                                                        <option value="97" title="Madarsa recognized (by Wakf board/Madarsa Board)">Madarsa recognized (by Wakf board/Madarsa Board)</option>
                                                                        <option value="98" title="Madarsa unrecognized">Madarsa unrecognized</option>
                                                                        <option value="96" title="Central Tibatin Schools">Central Tibatin Schools</option>
</select>
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_address">Previous School Address</label>
        <input type="text" id="previous_school_address" name="previous_school_address"   class="form-control" placeholder="Previous School Address">
</div>
</div>
<div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="previous_school_district_id">District</label>
                                       <select id="previous_school_district_id" name="previous_school_district_id" required="required" class="form-control" onChange="selpschooldistrict()">
									   <option value="">Select District</option>
									   <option value="0">Not In List</option>
									   <?php
$sqlr="select * from districts";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["district_id"]; ?>"><?php echo $rowr["district_name"]; ?></option>
<?php
}
?>
									   </select>
                                    </div>
                                 </div>
								 <div class="col-md-3">
                                    <div class="form-group">
                                       <label class="control-label" for="pschooltaluk_id">Taluk</label>
									   <div id="taluks">
                                       <select id="previous_school_taluk_id" name="previous_school_taluk_id" required="required" class="form-control">
									   <option value="">Select Taluk</option>
									   <option value="0">Not In List</option>
									   <?php
$sqlr="select * from taluks";
$resr=$db->query($sqlr);
while($rowr=$db->fetch_array($resr))
{
?>
<option value="<?php echo $rowr["taluk_id"]; ?>"><?php echo $rowr["taluk_name"]; ?></option>
<?php
}
?>
									   </select>
									   </div>
                                    </div>
                                 </div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_city">City/Village/Town</label>
        <input type="text" id="previous_school_city" name="previous_school_city"   class="form-control" placeholder="Previous School City/Village/Town">
</div>
</div>
<div class="col-md-3">
   <div class="form-group">
     <label class="control-label" for="previous_school_pincode">Pincode</label>
        <input type="text" id="previous_school_pincode" name="previous_school_pincode"   class="form-control" placeholder="Previous School Pincode">
</div>
</div>								 