<?php
    require_once('html_helpers.php');
    $lines = $_GET["lines"]?: 10;
    $columns = $_GET["columns"]?:10;
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP: Numbers tables | WS #3 | AINET</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>
        <h1>Numbers Table</h1>
        <?= times_table_view( $lines, $columns) ?>
    </body>
</html>
