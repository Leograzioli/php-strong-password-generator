<?php 
function rndLetter($length)
{
    $letters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%^&*()_+{}":?><,./;[]=-';
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