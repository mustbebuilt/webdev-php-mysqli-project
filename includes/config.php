<?php
/* Database credentials */
define("DB_SERVER", "db451334740.db.1and1.com");
define("DB_USERNAME", "dbo451334740");
define("DB_PASSWORD", "sD(wEUz5");
define("DB_NAME", "db451334740");
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>