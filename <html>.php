<html>
<?php
require 'header.php';


// Insert into Database
if (isset($_POST['Username']) && isset($_POST['Password'])){
$username = $_POST['Username'];
$password = $_POST['Password'];
$confirm = $_POST['Confirm'];
$firstname = $_POST['FirstName'];
$surname = $_POST['Surname'];
$ad1 = $_POST['AddressLine1'];
$ad2 = $_POST['AddressLine2'];
$city = $_POST['City'];
$telephone = $_POST['Telephone'];
$mobile = $_POST['Mobile'];
if (!is_numeric($mobile) || strlen($mobile) !== 10) {
$fmsg = "Mobile number should be numeric and 10 characters in length.";
}
if ($password !== $confirm) {
$fmsg = "Password and confirmation do not match.";
}


// Check if the username already exists
$sql = "SELECT * FROM Users WHERE Username = '$username'";
$uniqueusername = mysqli_query($conn, $sql);
if (mysqli_num_rows($uniqueusername) > 0) {
$fmsg = "Username already exists. Choose a different one.";
}
if (!isset($fmsg)) {
$sql = "INSERT INTO Users (Username, Password, Firstname, Surname, AddressLine1,
AddressLine2, City, Telephone, Mobile ) VALUES ('$username', '$password', '$firstname', '$surname',
'$ad1', '$ad2', '$city', '$telephone', '$mobile')";
if (mysqli_query($conn, $sql)) {
echo "<center><h3>New record created successfully!<br/>Click here to <a
href='login.php'>Login</a></h3></center>";
}
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
}
?>





<head>
<meta name="robots" content="noindex" />
</head>
<body>
<div class="container">
<form class="form-signin" method="POST">
<?php if(isset($smsg)){ ?><div role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<h2>Please Register</h2>
<div class="input-group">
<span>Username:</span>
<input type="text" name="Username" placeholder="Username" required>
</div>
<div class="input-group">
<span>Password:</span>
<input type="password" name="Password" id="inputPassword" placeholder="Password"
required>
</div>
<div class="input-group">
<label for="Confirm" class="sr-only">Confirm Password:</label>
<input type="password" name="Confirm" id="Confirm" placeholder="Confirm Password"
required>
</div>
<div class="input-group">
<span>First Name:</span>
<input type="text" name="FirstName" placeholder="First Name" required>
</div>
<div class="input-group">
<span>Surname:</span>
<input type="text" name="Surname" placeholder="Surname" required>
</div>
<div class="input-group">
<span>Address Line 1:</span>
<input type="text" name="AddressLine1" placeholder="Address Line 1" required>
</div>
<div class="input-group">
<span>Address Line 2:</span>
<input type="text" name="AddressLine2" placeholder="Address Line 2">
</div>
<div class="input-group">
<span>City:</span>
<input type="text" name="City" placeholder="City" required>
</div>
<div class="input-group">
<span>Telephone:</span>
<input type="text" name="Telephone" placeholder="Telephone">
</div>
<div class="input-group">
<span>Mobile:</span>
<input type="text" name="Mobile" placeholder="Mobile" required>
</div>
<button type="submit">Register</button>
</form>
</div>
<?php require 'footer.php'; ?>
</body>
</html>