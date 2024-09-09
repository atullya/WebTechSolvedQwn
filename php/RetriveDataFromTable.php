<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "example"; 

$conn = mysqli_connect($servername, $username, $pass, $dbname);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
$sql="SELECT * FROM STUDENT";

$result=mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
            echo "
            <tr>
            <td>".$row["sid"]."</td>
            <td>".$row["sname"]."</td>
            <td>".$row["age"]."</td>
            <td>".$row["address"]."</td>
            
            </tr>";
        }
       ?>
    </table>
</body>
</html>