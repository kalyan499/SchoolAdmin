<?php
//database server
define('DB_SERVER', 'localhost');

//database login name
define('DB_USER', "chanmountsims");
//database login password
define('DB_PASS', 'Wings456@#');

//database name
define('DB_DATABASE', "mountsims");

require("Database.class.php"); 
$db = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);  

?>