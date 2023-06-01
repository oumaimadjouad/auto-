<?php

                      // host       user  pass name database
$conn = mysqli_connect("localhost","root","","auto");


if(!$conn){
    echo "erreur de connexion";
}



function clear($input)
{
    $input = trim($input);// "     Hello     "
    $input = htmlspecialchars($input,ENT_QUOTES,'UTF-8');// " ' "
    $input = strip_tags($input); // < > 
    return $input ;
}   