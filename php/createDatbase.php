<?php
$servername="localhost";
$username="root";
$pass="";

//create connection
$conn=mysqli_connect($servername,$username,$pass);

if(!$conn){
die("Connection failed".mysqli_connect_error());
}

$sql="CREATE DATABASE example";

$result=mysqli_query($conn,$sql);

if($result){
    echo "Database created successfully";
}

?>