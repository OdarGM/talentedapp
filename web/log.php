<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'ec2-54-243-40-26.compute-1.amazonaws.com');
define('DB_USERNAME', 'surujdrgkqyzxk');
define('DB_PASSWORD', '7579fc29f93ec1538d6baf8683306a6c4fb7b106cb6ba1c15109bd8e75a2012a');
define('DB_NAME', 'd4qss9hg17hij8');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
