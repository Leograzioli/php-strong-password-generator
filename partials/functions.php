<?php 
function rndLetter($length)
{
    $letters = "" ;
    if(!isset($_GET["number"]) && !isset($_GET["letter"]) && !isset($_GET["symbol"])) {
        $letters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%^&*+:?./=';
    } else {
        if (isset($_GET["letter"])) {
            $letters .= 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ' ;
        } 
        
        if (isset($_GET["symbol"])) {
            $letters .= "!@#$%^&*+:?./=";
        } 
        
        if (isset($_GET["number"])) {
            $letters .= "0123456789";
        }
    }
   

    $pw_string = '';
    while (strlen($pw_string) < $length) {
        $rnd = rand(0, strlen($letters) - 1);
        if ($_GET["repeat"] === "no") {
            if(!str_contains($pw_string, $letters[$rnd])) {
                $pw_string .= $letters[$rnd];
            }
        } else {
            $pw_string .= $letters[$rnd];
        }
    }

    return $pw_string;
}
?>