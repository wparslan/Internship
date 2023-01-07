  

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
<?php
 
 #Arithmetic Operators start
 echo "<h1>Arithmetic Operators<br><br></h1>";
 $day1_name = "Zain Bin Tariq";
 echo "My name is " . $day1_name . " & I am php Developer at Wpbrigade";
 
 $day1_num1 = 12;
 $day1_num2 = 24;
 $day1_num3 = 344;
 $sum = $day1_num1 + $day1_num2 + $day1_num3;
 
 echo "<p><br>Sum of num1,num2 and num3 is: </p>" . $sum;
 
 $sub = $day1_num1 - $day1_num2 - $day1_num3;
 echo "<br>Subtraction of num1,num2 and num3 is: " . $sub;
 
 $mod = $day1_num1 % $day1_num3;
 echo "<br>Modulus of num1 and num3 is: " . $mod;
 
 $exp = $day1_num1 ** $day1_num2;
 echo "<br>Exponentiation of num1 and num2 is: " . $exp;
  #Arithmetic Operators end
 
 #Assignment Operators start
 echo "<h1><br><br> Assignment Operators<br></h1>";
 $day1_assignOp = 15;
 $day1_assignOp2 = 18;
 
 echo "<br>  x += y = ". $day1_assignOp += $day1_assignOp2;
 echo "<br>  x *= y = ". $day1_assignOp *= $day1_assignOp2;
 echo "<br>  x %= y = ". $day1_assignOp %= $day1_assignOp2;
 echo "<br>  x .= y = ". $day1_assignOp .= $day1_assignOp2;
 
 $day1_assignOpName = "Zain ";
 $day1_assignOpName2 = "Bin Tariq";
 
 echo "<br>".$day1_assignOpName.=$day1_assignOpName2;
 #Assignment Operators start
 
 # Comparison Operators start
 echo "<h1><br><br>  Comparison Operators<br></h1>";
 
 $day1_CompOp = 12;
 $day1_CompOp2 = 122;
 
 if ($day1_CompOp == $day1_CompOp2){
     echo "<br>This statement is true<br>";
 } 
 else {
     echo "<br>This statement is False<br>";
 }
 
 if ($day1_CompOp === $day1_CompOp2){
     echo "<br>This statement is true<br>";
 }
 else 
 echo "<br>This statement is False<br>";
 
 if ($day1_CompOp != $day1_CompOp2){
     echo "<br>This statement is true<br>";
 }
 else 
 {echo "<br>This statement is False<br>";}
 
 if ($day1_CompOp !== $day1_CompOp2){
     echo "<br>This statement is true<br>";
 }
 else 
 echo "<br>This statement is False<br>";
 
 if ($day1_CompOp <= $day1_CompOp2){
     echo "<br>This statement is true<br>";
 } else {
     echo "<br>This statement is False<br>";
 }
 # Comparison Operators start
 
 #ncrement / Decrement Operators start
 echo "<h1><br><br>Increment / Decrement Operators<br></h1>";
 
 $day1_IncOp = 123;
 ++$day1_IncOp;
 
 echo "<br> $day1_IncOp";
 #ncrement / Decrement Operators end
 
 # Logical Operators start
 echo "<h1><br> Logical Operators<br><br></h1>";
 $Day1_LogiOp1 = 5;
 $Day1_LogiOp2 = 7;
 $Day1_LogiOp3 = 3;
 $a = 54;
 
 if ($Day1_LogiOp1 > $Day1_LogiOp2 and $Day1_LogiOp1 > $Day1_LogiOp3){
     echo  "X is Greater: " . $Day1_LogiOp1; }
     elseif ($Day1_LogiOp2 > $Day1_LogiOp1 and $Day1_LogiOp2 > $Day1_LogiOp3){
     echo "Y is greater: " . $Day1_LogiOp2 ;
     }
     else{
         echo  "Z is greater: " . $Day1_LogiOp3;
     }
 
     # and or not xnor, not equal example
     if ($Day1_LogiOp1 == 5 || $Day1_LogiOp2 == 80) {
         echo "<br>The Or statement is True";
     }
     else{
         echo "<br>The Or statement is False";
     }
 
     if ($Day1_LogiOp1 == 5 xor $Day1_LogiOp2 == 80) {
         echo "<br>The xor statement is True";
     }
     else{
         echo "<br>The xor statement is False";
     }
 
     if ($Day1_LogiOp1!==5){
     echo "<br>the NOT statement is true";
     }
     else{
     echo "<br>not statement is flase";
     }
 #logicl operators end
 ?>
</body>
</html>
