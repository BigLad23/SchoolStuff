<?php
if(isset($message)) echo "<hr>". $message ."<hr>";
require "./views/partials/head.php";
?>

<div class="main">
  <h1>Sign in</h1>

  <div class= "container-fluid" id= "formwrapper">
    <form method ="post" action="/index.php?action=login">
        <label for="username">Username:</label> <br>
        <input type="text" id="username" name="username" required> <br>

        <label for="password">Password:</label> <br>
        <input type="password" id="password" name="password" required>
      
        <div class= "container-fluid" id= "submitwrapper">
          <input type="submit" id= "submit" value= "LOGIN">
        </div>
    </form>
</div>

<?php
require "./views/partials/end.php";
?>