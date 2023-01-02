<?php

echo "Arithmetic Operators<br><br>";
$name = "Zain Bin Tariq";
echo "My name is " . $name . " & I am php Developer at Wpbrigade";

$num1 = 12;
$num2 = 24;
$num3 = 344;
$sum = $num1 + $num2 + $num3;

echo "<br>Sum of num1,num2 and num3 is: " . $sum;

$sub = $num1 - $num2 - $num3;
echo "<br>Subtraction of num1,num2 and num3 is: " . $sub;

$mod = $num1 % $num3;
echo "<br>Modulus of num1 and num3 is: " . $mod;

$exp = $num1 ** $num2;
echo "<br>Exponentiation of num1 and num2 is: " . $exp;


echo "<br><br> Assignment Operators<br>";
$x = 15;
$y = 18;

echo "<br>  x += y = ". $x += $y;
echo "<br>  x *= y = ". $x *= $y;
echo "<br>  x %= y = ". $x %= $y;
echo "<br>  x .= y = ". $x .= $y;
$x = "Zain ";
$y = "Bin Tariq";
echo "<br>".$x.=$y;


echo "<br><br>  Comparison Operators<br>";

$a = 12;
$b = 122;
if ($a == $b){
    print "<br>This statement is true<br>";
}
else 
print "<br>This statement is False<br>";

if ($a === $b){
    print "<br>This statement is true<br>";
}
else 
print "<br>This statement is False<br>";

if ($a != $b){
    print "<br>This statement is true<br>";
}
else 
print "<br>This statement is False<br>";

if ($a !== $b){
    print "<br>This statement is true<br>";
}
else 
print "<br>This statement is False<br>";

if ($a <= $b){
    print "<br>This statement is true<br>";
}
else 
print "<br>This statement is False<br>";

echo "<br><br>Increment / Decrement Operators<br>";
$i = 123;
++$i;
echo "<br> $i";

echo "<br> <br> Logical Operators<br><br>";

$x = 5;
$y = 7;
$z = 3;
$a = 54;

if ($x > $y and $x > $z){
    echo  "X is Greater: " . $x; }
    elseif ($y > $x and $y > $z){
    echo "Y is greater: " . $y ;
    }
    else{
        echo  "Z is greater: " . $z;
    }

    
    if ($x == 5 || $y == 80) {
        echo "<br>The Or statement is True";
    }
    else{
        echo "<br>The Or statement is False";
    }

    if ($x == 5 xor $y == 80) {
        echo "<br>The xor statement is True";
    }
    else{
        echo "<br>The xor statement is False";
    }

    if ($x!==5){
    echo "<br>the NOT statement is true";
    }
    else{
    echo "<br>not statement is flase";
    }

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day-1 PHP Tasks
    </title>
</head>
<body>
    
</body>
</html>