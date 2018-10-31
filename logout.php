<?php
session_start();
unset($_SESSION['vsims_username']);
unset($_SESSION['vsims_user_id']);
unset($_SESSION["role_id"]);
session_destroy();
header("location:index.php");
?>