<?php 
function rndLetter($length)
{
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pw_array = '';
    $i = 0;
    while ($i < $length) {
        $rnd = rand(0, strlen($letters) - 1);
        $pw_array .= $letters[$rnd];
        $i++;
    }
    return $pw_array;
}
?>