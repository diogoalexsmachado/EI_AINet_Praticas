<?php

// returns the $_POST entry with the specified $name or a $default value if the entry is not found
function input($name, $default = null)
{
    if (array_key_exists($name, $_POST)) {
        return $_POST[$name];
    }

    return $default;
}

function old($name, $default = '')
{
    if (isset($_POST[$name])) {
        return $_POST[$name];
    }

    return $default;
}

// escapes the specified string by applying htmlentities.
function escape($raw)
{
    return htmlentities($raw, ENT_QUOTES, 'UTF-8');
}

function is_selected($current, $expected, $output = 'selected')
{
    if ($current === $expected) {
        return $output;
    }
}

function is_checked($current, $expected)
{
    return is_selected($current, $expected, 'checked');
}

function render_view($viewName, $vars)
{
    // Declares a local variable for each pair inside $vars
    foreach ($vars as $name => $value) {
        $$name = $value;
    }

    include 'src/views/header.view.php';
    include 'src/views/'.str_replace('.', '/', $viewName).'.view.php';
    include 'src/views/footer.view.php';
}

function dd($mixed)
{
    echo '<pre>';
    var_dump($mixed);
    die(1);
}
