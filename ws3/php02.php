    <?php
    /*
    if (empty($_GET['lines'])){ $lines = ''; } 
    else { $lines = $_GET['lines']; }

    if (empty($_GET['columns'])){ $columns = ''; } 
    else { $columns = $_GET['columns']; }
    reduzido para isto: */

    $lines = $_GET['lines'] ?? '';
    $columns = $_GET['columns'] ?? '';

    require_once('php02.view.php');