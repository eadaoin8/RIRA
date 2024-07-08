<?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'RIRA';

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get answer from POST request
$answer = $_POST['answer'];

// Create SQL query to insert data
$sql = "INSERT INTO responses (answer) VALUES ('$answer')";

if (mysqli_query($conn, $sql)) {
  echo "Answer submitted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>
