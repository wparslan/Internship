<?php
 //declare email as string
$email ="zain.wpbrigade@gmail.com";  
$pwd="123";

session_start();  // creating session

if(isset($_SESSION['email'])){   //  function returns true if the variable exists and is not NULL, otherwise it returns false.

    echo "<h1>WpBrigade</h1>";  

    echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
} 
else {
    if ($_POST['email'] == $email && $_POST['pwd'] == $pwd) { // In this function,if ur email and password are correct than this statement will execute otherwise this statement will not run

        $_SESSION['email'] = $email;  

        echo "<script> location.href='welcome.php'</script>";  // javascript code to open the welcome page
    } 
    else {
        echo "<script>alert('username or paasword incorrect!')</script>"; // if entered password is wrong than this will show

echo "<script> location.href='login.php'</script>";  // when this statement run login page will display 
    }
}
?>