<?php
require_once('html_helpers.php');

// ?? Null coalescing operator
$lines = $_GET['lines'] ?? '';
$columns = $_GET['columns'] ?? '';
$operation = $_GET['operation'] ?? '*';
$errors = [];

if (empty($_GET)) {
    include('php05.view.php');
    exit(0);
}

if (!filter_var($lines, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range"=> 20]])) {
    $errors['lines'] = 'Invalid number of lines.';
}

if (!filter_var($columns, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range"=> 20]])) {
    $errors['columns'] = 'Invalid number of columns.';
}

if (!in_array($operation, ['+', '-', '*', '/'])) {
    $errors['operation'] = 'Invalid operation.';
}

include('php05.view.php');