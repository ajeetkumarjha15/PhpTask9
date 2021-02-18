<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Task8.css">
    <title>Document</title>
</head>
<body>
<div>

<center>
  <h1>Login Form</h1>
  <form id = "form" class = "form" action="Validation.php" method = "POST">

    <label for="email">EMail</label><br>
    <input type="email" id="email" name="email" placeholder="Your email id" required><br><br>

    <label for="password">Password</label><br>
    <input type="password" id="pwd" name="password" placeholder="Your password" required><br><br>

    <button type="submit" id="submit" name="submit" value="Login">Login</button>
</form>
</center>
</div>
</body>
</html>
