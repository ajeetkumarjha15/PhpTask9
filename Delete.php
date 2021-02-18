<?php
include "Database.php";
// sql to delete a record

if(isset($_POST['submit'])){
  $ID = $_POST['id'];

$sql = "DELETE FROM Registration_Table WHERE `id`= '$ID'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: display.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
}
?>