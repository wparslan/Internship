<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currencey Converter</title>
</head>
<body>

    <!-- form start here --><h2>
   <form  action="" method="post">
    <!-- table start from here -->
    <table width="600" align="center" bgcolor="LightGray">
  
 <!-- 1st tr start -->
        <tr align="center">
    <td colspan="4"><h2>Currency Convertor</h2></td>
</tr><!-- 1 tr end -->

<!-- 2 tr start -->
<tr>
<td align="right"><b>Enter Amount:</b></td>
<td><input type="number" name="amount" placeholder="Enter Amount!" required></td>
</tr><!-- 2 tr end -->

<!-- 3 tr start -->
<tr>
    <td align="right"><b>Currency From:</b></td>
    <td>
        <select name="from">
        <option>USD</option>
        <option>AUD</option>
        <option>INR</option>
        <option>POUND</option>
        <option>EURO</option>
        <option>PKR</option>
        </select>
    </td>
</tr>
<!-- 3 tr end -->

<!-- 4 tr start -->
<tr>
    <td align="right"><b>Currency to:</b></td>
    <td>
        <select name="to">
        <option>PKR</option>
        <option>EURO</option>
        <option>USD</option>
        <option>AUD</option>
        <option>INR</option>
        <option>POUND</option>
        </select>
    </td>
</tr>
<!-- 4 tr end -->

<!-- 5 TR start -->
<tr>
    <td align="center">
        <td colspan="4"><input type="submit" name="convertor" value="Convert Currency"></td>
    </td>
</tr> 
<!-- 5 TR end -->

    </table><!-- table end here -->
   </form><!-- form end here -->
   </h2>
  
</body>
</html>

<!-- php code -->
<?php
//function start
function day7_convertor()
{
    if (isset($_POST['convertor'])) {

        $day7_amount = $_POST['amount'];
        $day7_from = $_POST['from'];
        $day7_to = $_POST['to'];
        //EURO TO PKR
        if ($day7_from == 'EURO' and $day7_to == 'PKR') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 248.80;
            echo "</b></center>";
        }
        //EURO TO USD
        else if ($day7_from == 'EURO' and $day7_to == 'USD') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 1.08;
            echo "</b></center>";
        }
        //EURO TO AUD
        else if ($day7_from == 'EURO' and $day7_to == 'AUD') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 3.89;
            echo "</b></center>";
        }
        //EURO TO INR
        else if ($day7_from == 'EURO' and $day7_to == 'INR') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 87.86;
            echo "</b></center>";
        }
        //EURO TO POUND
        else if ($day7_from == 'EURO' and $day7_to == 'POUND') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.88;
            echo "</b></center>";
        }
        //USD TO PKR
        else if ($day7_from == 'USD' and $day7_to == 'PKR') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 229.85;
            echo "</b></center>";
        }
        //USD TO EURO
        else if ($day7_from == 'USD' and $day7_to == 'EURO') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.92;
            echo "</b></center>";
        }
        //USD TO AUD
        else if ($day7_from == 'USD' and $day7_to == 'AUD') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 1.44;
            echo "</b></center>";
        }
        //USD TO INR
        else if ($day7_from == 'USD' and $day7_to == 'INR') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 81.05;
            echo "</b></center>";
        }
        //USD TO POUND
        else if ($day7_from == 'USD' and $day7_to == 'POUND') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.81;
            echo "</b></center>";
        }
        //AUD TO PKR
        else if ($day7_from == 'AUD' and $day7_to == 'PKR') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 159.98;
            echo "</b></center>";
        }
        //AUD TO EURO
        else if ($day7_from == 'AUD' and $day7_to == 'EURO') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.64;
            echo "</b></center>";
        }
        //AUD TO USD
        else if ($day7_from == 'AUD' and $day7_to == 'USD') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.70;
            echo "</b></center>";
        }
        //AUD TO INR
        else if ($day7_from == 'AUD' and $day7_to == 'INR') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 56.43;
            echo "</b></center>";
        }
        //AUD TO PUND
        else if ($day7_from == 'AUD' and $day7_to == 'POUND') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.56;
            echo "</b></center>";
        }
        //INR TO PKR
        else if ($day7_from == 'INR' and $day7_to == 'PKR') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 2.83;
            echo "</b></center>";
        }
        //INR TO EURO
        else if ($day7_from == 'INR' and $day7_to == 'EURO') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.011;
            echo "</b></center>";
        }
        //INR TO USD
        else if ($day7_from == 'INR' and $day7_to == 'USD') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.012;
            echo "</b></center>";
        }
        //INR TO AUD
        else if ($day7_from == 'INR' and $day7_to == 'AUD') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.018;
            echo "</b></center>";
        }
        //INR TO POUND
        else if ($day7_from == 'INR' and $day7_to == 'POUND') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.0100;
            echo "</b></center>";
        }
        //POUND TO PKR
        else if ($day7_from == 'POUND' and $day7_to == 'PKR') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 284.61;
            echo "</b></center>";
        }
        //POUND TO EURO
        else if ($day7_from == 'POUND' and $day7_to == 'EURO') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 1.14;
            echo "</b></center>";
        }
        //POUND TO USD
        else if ($day7_from == 'POUND' and $day7_to == 'USD') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 1.24;
            echo "</b></center>";
        }
        //POUND INR
        else if ($day7_from == 'POUND' and $day7_to == 'INR') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 100.38;
            echo "</b></center>";
        }
        //POUND TO AUD
        else if ($day7_from == 'POUND' and $day7_to == 'AUD') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 1.78;
            echo "</b></center>";
        }
        //PKR TO EURO
        else if ($day7_from == 'PKR' and $day7_to == 'EURO') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.0040;
            echo "</b></center>";
        }
        //PKR TO USD
        else if ($day7_from == 'PKR' and $day7_to == 'USD') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.0044;
            echo "</b></center>";
        }
        //PKR TO AUD
        else if ($day7_from == 'PKR' and $day7_to == 'AUD') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.0063;
            echo "</b></center>";
        }
        //PKR TO INR
        else if ($day7_from == 'PKR' and $day7_to == 'INR') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.35;
            echo "</b></center>";
        }
        //PKR TO POUND
        else if ($day7_from == 'PKR' and $day7_to == 'POUND') {
            echo "<br><br><center> <b style='background: orange; padding:10px'> Your Balance is : ";
            echo $day7_amount * 0.0035;
            echo "</b></center>";
        }
        //pound to pound
        else if ($day7_from == 'POUND' and $day7_to == 'POUND') {
            echo "<script>alert('Invalid input')</script>";
            echo "<script>location.href='converter.php'</script>";
        }
        //AUD to AUD
        else if ($day7_from == 'AUD' and $day7_to == 'AUD') {
            echo "<script>alert('Invalid input')</script>";
            echo "<script>location.href='converter.php'</script>";
        }
        //PKR to PKR
        else if ($day7_from == 'PKR' and $day7_to == 'PKR') {
            echo "<script>alert('Invalid input')</script>";
            echo "<script>location.href='converter.php'</script>";
        }
        //INR to INR
        else if ($day7_from == 'INR' and $day7_to == 'INR') {
            echo "<script>alert('Invalid input')</script>";
            echo "<script>location.href='converter.php'</script>";
        }
        //EURO to EURO
        else if ($day7_from == 'EURO' and $day7_to == 'EURO') {
            echo "<script>alert('Invalid input')</script>";
            echo "<script>location.href='converter.php'</script>";
        }
        //USD to USD
        else if ($day7_from == 'USD' and $day7_to == 'USD') {
            echo "<script>alert('Invalid input')</script>";
            echo "<script>location.href='converter.php'</script>";
        }
    }//isset statement end
}//function end

day7_convertor(); //function calling

?>