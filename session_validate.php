<?php
session_start();
if(!isset($_SESSION['vsims_username']) || $_SESSION['vsims_username']=="" || !isset($_SESSION['academic_year']))
{
?>
<script type="text/javascript">
alert("Session Expired");
document.location="../index.php";
</script>
<?php

}
?>