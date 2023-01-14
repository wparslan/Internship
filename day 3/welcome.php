<!------------------------php code ------------------------>
<?php
session_start();

if ($_SESSION["status"] != true){ //if you type wrong password this statement will show the login page,, this statement link with "login page's if condition"
    header("Location: login.php"); // this statement link to login page
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Welcome Page</title>
  </head>

  <body>
    <h2 class="mt-2">Hello, Your Email-id is : <?php echo $_SESSION["email_id"] ?></h2>
    <br>
    <form action="welcome.php" method="post">
    <input class="btn btn-primary" type="submit"  name="logout" value="Logout!">
    </form>
    
  </body>
</html>

<!------------------------php code ------------------------>
<?php
if(isset($_POST["logout"])){ // if user click the logout button, session will unset and page will go to login page
    header("Location: logout.php");
}
?>
