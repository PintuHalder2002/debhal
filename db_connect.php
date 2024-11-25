<?php

// Database connection
$servername = "localhost";
$username = "u166987057_debhal_user";
$password = "Debhal@bdpass7895";
$dbname = "u166987057_debhal_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>