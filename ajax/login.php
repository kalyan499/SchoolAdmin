<?php
session_start();
error_reporting(0);
require('../vins_database_class/config.inc.php');
$db->connect();
//get the posted values
$user_name = $_POST['username'];
$password = $_POST['password'];

//now validating the username and password
$sql = "SELECT * FROM users WHERE username='".$user_name."' AND password='".md5($password)."'";
$result = $db->query($sql);
sleep(1);
if(mysqli_num_rows($result)>0)
{
	$row = $db->fetch_array($result);
	//Creating session as login details are valid
	$_SESSION['vsims_username'] = $row['username'];
	$_SESSION['vsims_user_id'] = $row['user_id'];
	//$_SESSION['type'] = $row['type'];
	//$type=$row['type'];
	$role_id=$row['role_id'];
	$_SESSION["role_id"]=$role_id;
    //$_SESSION['msg'] = 'Welcome back...';
	//$_SESSION['err'] = '0';
	$sql="select * from school_settings";
	$res=$db->query($sql);
	$row=$db->fetch_array($res);
	$_SESSION["academic_year"]=$row["academic_year"];
	if($role_id==1)
	{
	$home="../superadmin/home.php";
	}
	else if($role_id==2)
	{
	$home="../admin/home.php";
	}
	else if($role_id==3)
	{
	$home="../cashier/home.php";
	}
	else if($role_id==4)
	{
	$home="../front_desk/home.php";
	}
	else if($role_id==5)
	{
	$home="../employee/home.php";
	}
	else if($role_id==6)
	{
	$home="../student/home.php";
	}
        header("location:$home");
}else
{
?>
<script type="text/javascript">
alert("Invalid User");
history.back();
</script>
<?php
}
?>