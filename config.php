<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'luzviminda');

/* Attempt to connect to MySQL database */
// $mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
// if ($mysqli === false) {
//     die("ERROR: Could not connect. " . $mysqli->connect_error);
// }

$servername = "fdb1029.awardspace.net";
$db_username = "4316349_luzviminda"; //xampp default
$db_password = "Luzviminda123!";  //xampp default
$database = "4316349_luzviminda"; //name of database

 // CREATE CONNECTION
 $conn = mysqli_connect($servername, $db_username, $db_password, $database);
    
 // CHECK CONNECTION
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

?>
