<?php
// echo "Hello World";
// print "Hello World1";
// $a=5;
// $floatnum=5.5;
// // $atullya="Apple";
// // const pi=3.71;

// $str="Hello World";
// echo strlen($str);
// echo "<br>";
// echo str_word_count($str);
// echo "<br>";
// echo strrev($str);

// echo "<br>";
// //function

// function getData($num1,$num2){
//   return $num1 + $num2;
// }

// $sum=getData(1,2);

// echo $sum;

//Array


//1 Indexed Array!!
$arr=array("Lion", "and", "Tiger", "live", "in a", "jungle");

print_r($arr);
// echo $arr[1];
// echo "<br>";
// echo $arr[2];


//concat the array elements

echo $arr[0]."".$arr[1]." ".$arr[2]." ".$arr[3]." ".$arr[4]." ".$arr[5]." ";


$numarr=array(1,2,4,5,6,7,8,9,10,11,12);

for($i=0; $i<count($numarr); $i++){
    echo $numarr[$i]." ";
}

//2 Associative array
$assocarr=array("breakfast"=>"egg",
"launch"=>"momo",
"dinner"=>"rice");
echo "<br>";
// echo $arr[0];
echo $assocarr["breakfast"];

//3) Multi-dimensional array

$multi=array(array());

// $multi1=["morning"]["day"];

$product=array("pcode"=>["100","101","102"],
            "pname"=>["Ram","Hari","Shayma"],
            "price"=>["1000","1001","1002"],
            );    
echo"<br>";
            // print_r($product["pcode"][0]) ;
// print_r ($product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table>
    <tr>
       <th><?php echo "Product Code"; ?></th>
        <th><?php echo "Product Name"; ?></th>
        <th><?php echo "Product Price"; ?></th>
    </tr>
    <?php foreach($product["pcode"] as $key => $value){?>
    <tr>
        <td><?php echo $value;?></td>
        <td><?php echo $product["pname"][$key];?></td>
        <td><?php echo $product["price"][$key];?></td>
    </tr>
    <?php }?>
 
   </table>
</body>
</html>