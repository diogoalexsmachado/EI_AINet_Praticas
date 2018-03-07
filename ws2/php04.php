<?php
    require_once('functions.php');
    require_once('sentences.php');
?>
<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP: Mistery sentence</title>
    </head>

    <body>
        <h2>Exercise 4</h2>
        <?= mistery_sentence($nouns, $verbs, $objects);?>

    </body>

</html>