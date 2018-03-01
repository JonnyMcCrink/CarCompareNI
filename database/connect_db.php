<?php
//This file is used across all over PHP files as an includes.
//It makes the connection to the database, if the connection fails it will output an error message instead.

$servername = "localhost";
$username = "jmccrink";
$password = "";
$dbname = "carcompareni";

//$username = "B00656761";
//$password = "fMkaNS7Z";
//$dbname = "b00656761";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>