<?php
include("../session_validate.php");
include("dbconnect.php");
$db->connect();
$sql="SHOW FIELDS FROM students";
$res=$db->query($sql);
while($row=mysqli_fetch_array($res))
{
   echo "\$data['".$row[0]."']=\$_POST['".$row[0]."'];"."<br>";
}
?>