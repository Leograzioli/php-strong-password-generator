<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <h2>your password is:
            <?php
            echo $_SESSION["pw-lenght"];
            ?>
        </h2>
        <a href="index.php">return to home</a>
    </div>

</body>

</html>