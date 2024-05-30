<?php
// Establish database connection
$servername = "clementsjwdata.mysql.db";
$username = "clementsjwdata";
$password = file_get_contents("../../../password.txt");
$database = "clementsjwdata";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve POST data
$username = $_GET['username'];
$password = $_GET['password'];

// Prepare SQL statement to check credentials
$sql = "SELECT * FROM urbexcite_accounts WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Credentials are correct
    session_start();
    $_SESSION['username'] = $username;
    header('Location: index.php');
} else {
    // Credentials are incorrect
    header('Location: login.php');
}

// Close database connection
$conn->close();
?>
