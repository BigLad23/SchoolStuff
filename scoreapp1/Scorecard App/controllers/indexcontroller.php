<?php
function indexcontroller()
{   
    $users = getAllUsers();
    //var_dump($users);
    require "./views/index.view.php";
}
?>