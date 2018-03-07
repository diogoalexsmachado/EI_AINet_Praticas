<?php
function times_table_view($lines = 10, $cols = 10, $operation = '*')
{
    $html = "\n<table>";
    $html.= "\n<thead>";
    $html.= "\n<tr>\n    ";
    $html.= "<th>$operation</th> ";
    for ($i=1; $i<= $cols; $i++) {
        $html.= "<th>$i</th>";
    }
    $html.= "\n</tr>";
    $html.= "\n</thead>";
    $html.= "\n<tbody>";
    for ($i=1; $i<= $lines; $i++) {
        $html.= "\n<tr>\n    ";
        $html.= "<th>$i</th> ";
        for ($j=1; $j<= $cols; $j++) {
            $html.= (($i === $j) ? "<td class='diag'>" : "<td>");
            $html.= compute($i, $j, $operation);
            $html.= "</td>";
        }
        $html.= "\n</tr>";
    }
    $html.= "\n</tbody>";
    $html.= "\n</table>";
    return $html;
}

function compute($operand1, $operand2, $operator)
{
    switch ($operator) {
        case '*':
            return $operand1 * $operand2;
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '/':
            return round($operand1 / $operand2, 2);
        default:
            return 0;
    }
}
