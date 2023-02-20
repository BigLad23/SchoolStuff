<?php
if(isset($message)) echo "<hr>". $message."<hr>";
require "./views/partials/head.php";
?>

<div class= "main">
    <h1>Sign up</h1>

    <div class= "container-fluid" id= "formwrapper">
      <form method = "post" action="/index.php?action=register">

        <label for = "username">Username:</label><br>
        <input type = "text" name="username" required><br>

        <label for = "email">Email:</label><br>
        <input type = "email" name="email" required><br>

        <label for = "password">Password:</label><br>
        <input type = "password" name = "password" required><br>

        <label for = "password2">Confirm password:</label><br>
        <input type = "password" name = "password2" required><br>

        <div class= "container-fluid" id= "submitwrapper">
          <input type = "submit" id="submit" value = "SIGN UP"><br>
        </div>
      </form>
    </div>
</div>

<?php
require "./views/partials/end.php";
?>