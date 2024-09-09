<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "example"; // We are going to work with the example database

// Create connection
$conn = mysqli_connect($servername, $username, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table
$sql1 = "CREATE TABLE student(
    sid int primary key,
    sname varchar(255),
    age int,
    address varchar(255)
);";

$result1 = mysqli_query($conn, $sql1);
if ($result1) {
    echo "Table created successfully";
}

// Insert multiple rows at once
$sql2 = "INSERT INTO student (sid, sname, age, address) VALUES 
(1, 'Atullya', 21, 'Bafal'), 
(2, 'Atullya1', 22, 'Bafal1'),
(3, 'Atullya2', 23, 'Bafal2');";

$result2 = mysqli_query($conn, $sql2);
if ($result2) {
    echo "Insertion successful";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
