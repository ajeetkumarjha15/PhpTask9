<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cedcoss";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$ID = $_POST['id'];
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$dateOfBirth = $_POST['bdate'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];
$city = $_POST['city'];

$sql = "INSERT INTO Registration_Table (id, firstname, lastname, DateOfBirth, email, password, mobile_no, gender, country, city)
VALUES ('$ID', '$firstName', '$lastName', '$dateOfBirth', '$email', '$password', '$gender', '$mobile', '$country', '$city')";

if ($conn->query($sql) === TRUE) {
  echo "<h1> Registration sucessful, You can Login Now</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$conn = null;

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="Login.php">LOGIN</a>
</body>
</html>