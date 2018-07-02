<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'us-cdbr-iron-east-04.cleardb.net');
define('DB_USERNAME', 'b3b6d5d1e98004');
define('DB_PASSWORD', '30536bc2');
define('DB_NAME', 'heroku_c3aabcc7808faa7');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection.
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
