<?php
// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Your database connection credentials
$servername = "127.0.0.1";
$username = "root";
$password_db = "Archive1703";
$dbname = "loginAntique_DB";

// Create a new MySQLi instance
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();

// Check if the login was successful
if ($result->num_rows == 1) {
    // Login successful, redirect to a success page
    header("Location: landing page\landingtest.html");
} else {
    // Login failed, redirect back to the login form with an error message
    header("Location: login.html?error=1");
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
