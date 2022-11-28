<?php
include __DIR__ . "/partials/functions.php";
session_start();

if (!empty($_GET["pw-length"])) {
    $length = rndLetter($_GET["pw-length"]);
    $_SESSION["pw-lenght"] = $length;
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
                <div class="d-flex justify-content-between mb-2">
                    <p for="repeat">Consenti ripetizioni caratteri:</p>
                    <div class=" mt-2 ">
                        <label for="repeat">Si</label>
                        <input type="radio" id="repeat" name="repeat" checked value="si" class="mb-1">
                        <label for="no-repeat">No</label>
                        <input type="radio" id="no-repeat" name="repeat" value="no">
                    </div>

                    
                </div>
                <div class="d-flex justify-content-end">
                    <label for="number" class="me-1">only numbers:</label>
                    <input type="radio" id="number" name="number"  value="number">
                </div>
                <div class="d-flex justify-content-end">
                    <label for="letter" class="me-1">only letters:</label>
                    <input type="radio" id="letter" name="letter" value="letter">
                </div>
                <div class="d-flex justify-content-end">
                    <label for="symbol" class="me-1">only symbols:</label>
                    <input type="radio" id="symbol" name="symbol" value="symbol">
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Send</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>

                    <?php if (!empty($_GET["pw-length"])) { ?>
                        <a href="response.php" class="btn btn-primary">Vedi Password</a>
                    <?php } ?>
                </div>
            </form>

        </div>

    </div>
</body>

</html>