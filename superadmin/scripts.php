  <!-- JavaScript files-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/jquery-validation/jquery.validate.min.js"></script>
	  <script src="../vendor/data-table/datatables.min.js"></script>
    <!-- Main File-->
    <script src="../js/front.js"></script>
	<script src="../js/bootbox.min.js"></script>
	<?php
if(isset($_SESSION["vsims_msg"]))
{
?>
<script type="text/javascript">
 try {
bootbox.alert('<?php echo $_SESSION["vsims_msg"]; ?>');
}
    catch (ex) {
        console.log(ex.message);
    }
</script>
