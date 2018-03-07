<?php
    require_once('functions.php');
    require_once('sentences.php');
?>
<!doctype html>

<html lang="en">

<style>
table { border: 1px solid black; border-collapse: collapse; }
td { width:35px; height:35px; text-align: center; border: 1px solid black;}
</style>
</style>
    <head>
        <meta charset="utf-8">
        <title>PHP: Letter Histogram</title>
    </head>

    <body>
        <h2>Exercise 5</h2>
        <?= letterHistogram($nouns, $verbs, $objects) ?>

    </body>

</html>