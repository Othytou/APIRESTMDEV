<?php
// Database configuration
$host = 'localhost'; // Replace with your database host
$username = 'your_username'; // Replace with your database username
$password = 'your_password'; // Replace with your database password
$database = 'your_database'; // Replace with your database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to execute SQL queries
function executeQuery($sql) {
    global $conn;
    $result = $conn->query($sql);
    return $result;
}

// Close the database connection when done
function closeConnection() {
    global $conn;
    $conn->close();
}
