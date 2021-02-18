<?php
     
     session_start();
     error_reporting(0);  
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Cedcoss";
        
     $conn = new mysqli($servername, $username, $password, $dbname);
     
     mysqli_report(MYSQLI_REPORT_ERROR);


    if(isset($_POST['submit'])){
     echo "result"; 
     $firstName = $_POST['firstname'];
     $lastName = $_POST['lastname'];
     $dateOfBirth = $_POST['DateOfBirth'];
     $email = $_POST['email'];
     $pwd = $_POST['password'];
     $mobile = $_POST['mobile_no'];
     $gender = $_POST['gender'];
     $country = $_POST['country'];
     $city = $_POST['city'];

     echo $firstName;

     $sqlupdate = "UPDATE Registration_Table SET `firstname` = '$firstName', `lastname` = '$lastName',`DateOfBirth` = '$dateOfBirth', 
      `email` = '$email',`password` = '$password',`mobile_no` = '$mobile', `gender`='$gender', `country` = '$country'
     ,`city` = '$city' WHERE `id`= '$ID' ";

    if ($conn->query($sqlupdate) == TRUE) {
        header("location: display.php");
       
    } else {
        echo "Error updating record: " . $conn->error;
        
    }
    
}
$sql = "SELECT * from Registration_Table WHERE `id` = '$ID' ";
$result = $conn->query($sql);

            
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Task8.css">
    <title>Updating details</title>
</head>

<body>
    <div style="text-align: center;">
    <center>
        <h2>Update Your Details</h2>
       
        <?php while ($row = $result->fetch_assoc()) {
            
        ?>
    <form method="POST" action="">

    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="firstname" value="<?php echo $row["firstName"]; ?>" required><br><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="lastname" value="<?php echo $row["lastName"]; ?>" required><br><br>

    <label for="lname">Date Of Birth</label><br>
    <input id="dob" type="date" value="bdate" name="bdate" value="<?php echo $row["dateOfBirth"]; ?>" required><br><br>

    <label for="email">EMail</label><br>
    <input type="email" id="email" name="email" value="<?php echo $row["email"]; ?>" required><br><br>

    <label for="password">Password</label><br>
    <input type="password" id="pwd" name="password" value="<?php echo $row["password"]; ?>" required><br><br>

    <label for="mobile">Mobile No</label><br>
    <input type="number" id="mobile" name="mobile" value="<?php echo $row["mobile"]; ?>" required><br><br>

    <label for="gender">Gender</label><br>
    <select id="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select><br><br>

    <label for="country">Country</label><br>
    <select id="country" name="country">
      <option value="india">India</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select><br><br>

    <label for="city">City</label><br>
    <input type="text" id="city" name="city" value="<?php echo $row["city"]; ?>" required><br><br>

    <button type="submit" id="submit" name="submit" value="Register">Updte Details</button>
   
</form>
<?php
        }
        ?>

</center>
</div>


</body>

</html>