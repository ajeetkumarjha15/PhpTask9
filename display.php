<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update table</title>
</head>
<body>
<h1> You are now logged in</h1>
    <h2><a href = "Logout.php" title = "logout" >Logout</a></h2>
    <table border = "2">
        <tr>
            <th>Id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>DateOfBirth</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Mobile_No</th>
            <th>Country</th>
            <th>City</th>
            <th colspan = "2" align = "center">Operations</th>
        </tr>
    

<?php
    error_reporting(0);  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Cedcoss";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    mysqli_report(MYSQLI_REPORT_ERROR);

    $query="SELECT * FROM Registration_Table";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    $result = $conn->query($que);
      
    if($total !=0){
        
        while($result = mysqli_fetch_assoc($data)){
            echo "
            <tr> 
            <td>".$result['id']."</td>
            <td>".$result['firstname']."</td>
            <td>".$result['lastname']."</td>
            <td>".$result['DateOfBirth']."</td>
            <td>".$result['email']."</td>
            <td>".$result['mobile_no']."</td>
            <td>".$result['gender']."</td>
            <td>".$result['country']."</td>
            <td>".$result['city']."</td>

            <td><button><a href = 'Update.php? id= $result[id]'>Update</a></button></td>

            <td><button><a href = 'Delete.php? id = $result[id] '>Delete</a></button></td>

            </tr>
            ";
        }
    }

    else{
        echo "No Records Found";
    }
?>
</table>
</body>
</html>