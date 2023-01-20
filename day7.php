<!DOCTYPE html>
<html lang="en">
<head>
   <title>Calcultor.php</title>
</head>
<body>
<!-- 1st div start -->
<div align='center' style=" background-color:skyblue; width: 1;">
<h3>
<form action="day7.php" method="post"> <!-- set "form" to get input from webpage -->
<label>  
    <!-- Input for Number 1 -->
Enter Value 1 <input type="text" name="value1" placeholder="Enter Values Here!"><br>
    <!-- Input for Number 2 -->
Enter Value 2 <input type="text" name="value2" placeholder="Enter Values Here!"><br>
<!-- Set option button for operation perform -->
Select an Operator: 
<select name="opt"> 
    <option>-Select operator-</option>
    <option>+</option>
    <option>-</option>
    <option>/</option>
    <option>*</option>
</select><br>
<!-- Calulate input button -->
<input type="submit" name="op" value="Calculate Now!" id="">
</label>
</form>
</h3>
</div><!-- 1st div close -->

</body>
</html>

<!-- PHP Code -->
<?php
function day7_calcultor()// calculate function is start here
{
    if (isset($_POST['op'])) { // if user press calculte button then this statement will run.
        //intialize values
        $day7_num1 = $_POST['value1'];
        $day7_num2 = $_POST['value2'];
        $oprnd = $_POST['opt'];
        //sum operation performs here
        if ($oprnd == "+") {
            $ans = $day7_num1 + $day7_num2;
            echo "<h3><center>Your Answer is $ans</center><h3>";
        } 
       //sbtraction operation performs here
        else if ($oprnd == "-") {
            $ans = $day7_num1 - $day7_num2;
            echo "<h3><center>Your Answer is $ans</center><h3>";
        } 
        //Multiplication operation performs here
        else if ($oprnd == "*") {
            $ans = $day7_num1 * $day7_num2;
            echo "<h3><center>Your Answer is $ans</center><h3>";
        } 
        //multiplication operation performs here
        else if ($oprnd == "/") {
            $ans = $day7_num1 / $day7_num2;
            echo "<h3><center>Your Answer is $ans</center><h3>";
        } 
        // if you enter empty value then this function will perform
        else if ($oprnd == "-Select operator-") {
            echo "<script>alert('Empty Values!Enter Values for calculation')</script>";
        echo "<script>location.href='calculator.php'</script>";
        }
    }
}

day7_calcultor();// function calling

?>

