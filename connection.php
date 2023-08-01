<?php
$servername = "localhost";
$username = "image3d";
$password = "image3d$@#!";
$dbname = "i3dmainnew";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);


// Check connection //checked
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?> 