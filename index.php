<?php

    include "check.php";

    if(isset($_POST['username']) && isset($_POST['password'])) {
        return CheckData::checkLogin('home.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
    <table>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password"></td>
        </tr>
        
        <tr>
           <td><input type="submit" name="submit" value="Login"></td>
        </tr>
      </table>
    </form>
</body>
</html>
