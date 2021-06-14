<?php

define('DB_SERVER', 'localhost'); //server address
define('DB_USERNAME', 'root'); //database username
define('DB_PASSWORD', ''); //server password - if any
define('DB_NAME', 'chatstrym'); //database name
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if (!$conn) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>