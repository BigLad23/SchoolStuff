<?php

function sanit($input)
{
    $input = trim($input);
    $input = filter_var($input,FILTER_SANITIZE_STRING);
    return $input;
}

function sanitpassword($password)
{
    $password = password_hash($password,PASSWORD_DEFAULT);
    return $password;
}

?>