<?php
$servername = "sql213.byethost18.com";
$username = "b18_14786106";
$password = "cl91freewebhost";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?> 