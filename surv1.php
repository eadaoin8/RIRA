<html>
<script src="../RIRA/survey.js"></script>
  <?php
  // Database connection details
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "RIRA";

  // Connect to the database
  $conn = new mysqli($servername, $username, $password, $dbname);

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
</html>