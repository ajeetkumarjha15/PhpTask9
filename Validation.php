<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cedcoss";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   
  die("Connection failed: " . $conn->connect_error);
}

  if(isset($_POST["submit"])){
    
      $email = $_POST["email"];
      $password = $_POST["password"];
      
      $sql = "SELECT * FROM Registration_Table WHERE `email` = '$email' AND `password` = '$password' ";


      $result = $conn->query($sql);

      if($result->num_rows > 0){
         
          echo "Login sucess";
          header("Location: display.php");
      }
      else{
          echo "Incorrect Email or password please try again";
      }
  }

?>