<?php
if(isset($message)) echo "<hr>". $message."<hr>";
require "./views/partials/head.php";
require "./views/partials/end.php";
?>

<!DOCTYPE html>
<html lang="fi">
<head>
  <title>Sign up</title>
  <meta charset="utf-8">
</head>

<body>

<h1>Sign up</h1>

    <div class="container">
        <form method = "post">

        <label for = "username">Username</label><br>
        <input type = "text" class="form-control" name="username"><br>

        <label for = "email">Email</label><br>
        <input type = "text" class="form-control" name="email"><br>

        <label for = "password">Password</label><br>
        <input type = "password" class="form-control" name = "password"><br>

        <label for = "password2">Confirm password</label><br>
        <input type = "password" class="form-control" name = "password2"><br>

        <input type = "submit" class="btn btn-primary" style="margin: 15px" value = "Sign up"><br>

        </form>
    </div>
</html>