<?php
session_start();

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

if (isset($_GET["pw-length"])) {
    $length = rndLetter($_GET["pw-length"]);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- CSS  -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- custom -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <div class="text-center mt-5">
            <h1 class="mb-2">Strong password generator</h1>
            <h2>Genera una password sicura:</h2>
        </div>

        <div class="wrapper">
            <form action="index.php" method="GET">
                <div class="d-flex justify-content-between">
                    <label for="pw-length">Lunghezza Password:</label>
                    <input type="text" name="pw-length" id="pw-length">
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Send</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
            <?php
            if (isset($_GET["pw-length"])) {
                echo $length;
            }
            ?>
        </div>

    </div>
</body>

</html>