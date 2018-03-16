    <?php
    $lines = $_GET['lines'] ?? '';
    $columns = $_GET['columns'] ?? '';
    $operation = $_GET['operation'] ?? '';

    filter_var($lines, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range"=> 20]]);

    filter_var($columns, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range"=> 20]]);

    require_once('php05.view.php');