
<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="example";

$conn=mysqli_connect($servername,$username,$pass,$dbname);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['name'];
$course=$_POST['course'];
$gender=$_POST['gender'];

$sql = "INSERT INTO user (name, course, gender) VALUES ('$name', '$course', '$gender');";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    echo "Success";
} else {
    echo "Error: " . mysqli_error($conn);
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user.php" method="post">
        Name:<input type="text" name="name"></br>
        Select Course:<select name="course">
            <option value="IT">IT</option>
            <option value="CS">CS</option>
            <option value="ME">ME</option>
            <option value="EE">EE</option>
        </select></br>
        Male <input type="radio" name="gender" value="male"> Female <input type="radio" name="gender" value="female"></br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>
