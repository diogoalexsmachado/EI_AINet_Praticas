<!doctype html>

<style>
table { border: 1px solid black; border-collapse: collapse; }
td { background-color:#F44336; width:35px; height:35px; color: white; text-align: center; border: 1px solid black;}
.equal { background-color:#820909; }
.first { background-color:#ba1616; }
</style>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP: Times table</title>
    </head>

    <body>

        <?php
            include  "functions.php";
            times_table_view();
        ?>

    </body>

</html>