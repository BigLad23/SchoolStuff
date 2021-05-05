<?php


function sanit($word)
{
    $word = trim($word); //poistaa tyhjät välilyönnit
    $word = filter_var($word,FILTER_SANITIZE_STRING);
    return $word;
}
