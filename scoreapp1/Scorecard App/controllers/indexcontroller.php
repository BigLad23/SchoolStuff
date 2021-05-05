<?php
//require "./helpers/helper.php";

function indexcontroller()
{
=======
require "./database/models/usermodel.php";
require "./helpers/helper.php";
require "./views/index.view.php";

function indexcontroller()
{
    $users = getAllUsers();
    //var_dump($users);
}