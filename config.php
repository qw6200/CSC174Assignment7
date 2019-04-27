<?php
$servername = "66.147.242.186";
$username = "urcscon3_atlant2";
$password = "coffee1N";

// Create connection
$link = new mysqli($servername, $username, $password);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
//echo "Connected successfully";

?>
