<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>WpBrigade login Page</title>
</head>
<body>
    <center>   <!-- centre the page  -->
    <form action="welcome.php" method="post">   <!-- action is conect the files "login" and wlecome page each other and post, when we get data from user this variable will hide your data on url bar and access data from other page-->
        <h1>WPBrigade Login</h1>
       <h3>Username <input type="text" name="email"></h3> <!-- take input as a text -->
       <h3>Password <input type="password" name="pwd"></h3> <!-- take input as a password -->
       <h2> <input type="submit" name="login" value="Login"></h2>
    </form>
    </center>
</body>
</html> 

