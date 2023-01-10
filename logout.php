<?php
session_start();

if(isset($_SESSION['email'])){

session_destroy();  //here session will distory if isset function retrun true
//there are two type to open the new page(tab)
// you can use javascript or header(function)
/* echo "<script>location.href='login.php'</script>"; */  
header("location:login.php");  // open login page when you logout
}
else{
   
/* echo "<script> location.href='login.php'</script>"; */
header("location:login.php");// open login page

}
?>