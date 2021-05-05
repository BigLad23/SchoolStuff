<?php
if(isset($message)) echo "<hr>". $message."<hr>";
require "./views/partials/head.php";
require "./views/partials/end.php";
?>

<!DOCTYPE html>
<html lang="fi">
<head>
  <title>Sing in</title>
  <meta charset="utf-8">
</head>
<body>


<div class="container">
  <h2>Sign in</h2>
  <form method ="post">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Log in</button>
  </form>
</div>

</body>
</html>