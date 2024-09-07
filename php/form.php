<?php
//super global variables
// $_GET, $_POST,$_SERVER,$_COOKIE, $_SESSION
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $x = $_POST["num1"];
    $n = $_POST["num2"];

   $res=pow($x,$n);
   echo "Result: ".$res;
  
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
// write a server-side script to calculate X^n  using the data from the two text box
  <form action="form.php" method="post" >

X:<input type="number" name="num1"><br>
N:<input type="number" name="num2"><br>
<input type="submit" value="submit">

  </form>
</body>
</html>