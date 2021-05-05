<?php


function sanit($word)
{
    $word = trim($word); //poistaa tyhjät välilyönnit
    $word = filter_var($word,FILTER_SANITIZE_STRING);
    return $word;
}


function password_sanit($password)
{
    $password = trim($password);
    $password = password_hash($password,PASSWORD_DEFAULT);
    return $password;
}
