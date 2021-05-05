<?php
function postadminlogincontroller ()
{
    if (isset ($_POST ["username"], $_POST ["password"])) 
    {
        $username = sanit ($_POST ["username"]);
        $password = sanit ($_POST ["password"]);

        $ok = loginAdmin ($username, $password);

        if ($ok)
        {
            $admin = getAdminByUsername ($username);
            $id = $admin[0]["user_id"];
            $isadmin = $admin[0]["isadmin"];
            $ip = $_SERVER ["REMOTE ADDR"];

            $_SESSION ["user_id"] = $id;
            $_SESSION ["isadmin"] = $isadmin;
            $_SESSION ["ip"] = $ip;

            require "../views/admin.view.php";           
        }
        else
        {
            $message = "Wrong username or password";
            require ""; // <------- Nelli, lisää tähän sun login view!
        }
    }
    else
    {
        $message = "Fill out all the fields";
        require ""; // <------- Nelli, lisää tähän sun login view!
    }
}
?>