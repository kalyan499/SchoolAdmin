<?php

include("../session_validate.php");

include("dbconnect.php");
$db->connect();
$opwd=$_POST["opwd"];
$npwd=$_POST["npwd"];
$cpwd=$_POST["cpwd"];
$username=$_SESSION['vsims_username'];
if($npwd!=$cpwd)
{
 $db->close();
$_SESSION["vsims_msg"]="Passwords Not Matching";
 header("location:change_password.php");
}
else
{
$sql="select * from users where username='$username' and password='".md5($opwd)."'";
$res=$db->query($sql);
if(!$row=mysqli_fetch_array($res))
{
 $db->close();
$_SESSION["vsims_msg"]="Wrong Current Password";
 header("location:change_password.php");
}
else
{
$data["password"]=md5($npwd);

$db->query_update("users",$data,"username='$username'");
$_SESSION["vsims_msg"]="Password Updated Successfully";

 $db->close();

 header("location:change_password.php");
 }
 }
?>