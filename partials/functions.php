<?php 
function rndLetter($length)
{
    $letters = "" ;
    if(!isset($_GET["number"]) && !isset($_GET["letter"]) && !isset($_GET["symbol"])) {
        $letters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%^&*()_+{}":?><,./;[]=-';
    } else {
        if (isset($_GET["letter"])) {
            $letters .= 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ' ;
        } 
        
        if (isset($_GET["symbol"])) {
            $letters .= "!@#$%^&*()_+{}:?><,./;[]=-";
        } 
        
        if (isset($_GET["number"])) {
            $letters .= "0123456789";
        }
    }
   

    $pw_array = '';
    while (strlen($pw_array) < $length) {
        $rnd = rand(0, strlen($letters) - 1);
        if ($_GET["repeat"] === "no") {
            if(!str_contains($pw_array, $letters[$rnd])) {
                $pw_array .= $letters[$rnd];
            }
        } else {
            $pw_array .= $letters[$rnd];
        }
    }

    return $pw_array;
}
?>