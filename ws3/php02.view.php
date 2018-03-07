<?php
    require_once('html_helpers.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Forms: Submit to same file | WS #3 | AINET</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Exercise 2</h1>
    <p>Go to <a href="index.html">index</a></p>
    <hr>
    <form action="php02.php" method="get">
        <div>
            <label>Lines</label>
            <input type="number" min="1" max="100" id="lines_ID" name="lines">
        </div>
        <div>
            <label>Columns</label>
            <input type="number" min="1" max="100" id="columns_ID" name="columns">
        </div>
        <div>
            <input type="submit">
        </div>
    </form> 
    <hr>
    <ul class="shortcuts">
        <li><a href="?lines=4&columns=4">4 x 4</a></li>
        <li><a href="?lines=5&columns=10">5 x 10</a></li>
        <li><a href="?lines=10&columns=10">10 x 10</a></li>
    </ul>
    <hr>
        <!-- XXXXX Add php code to "draw" (call times_table_view) the numbers table -->
</body>
</html>
