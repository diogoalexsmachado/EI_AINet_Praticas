    <?php
    require_once('php02.view.php');
    require_once('html_helpers.php');
    
    if (empty($_GET['lines'])){ $lines = ''; } 
    else { $lines = $_GET['lines']; }

    if (empty($_GET['columns'])){ $columns = ''; } 
    else { $columns = $_GET['columns']; }

    echo times_table_view($lines,$columns);
    

