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
    <h1>Exercise 4</h1>
    <p>Go to <a href="index.html">index</a></p>
    <hr>
    <form action="php04.php" method="post" id="form_principal">
        <div>
            <label>Lines</label>
            <input type="number" min="1" max="20" id="lines_ID" name="lines" value='<?= $lines ?>'>
        </div>
        <div>
            <label>Columns</label>
            <input type="number" min="1" max="20" id="columns_ID" name="columns" value='<?= $columns ?>'>
        </div>
        <div>
            <label>Operation</label>
            <select name="operation" id="operationSelect" onchange="changeOperator()">
                <option <?php if ($operation == '*' ) echo 'selected' ; ?> value="*">Multiplication</option>
                <option <?php if ($operation == '+' ) echo 'selected' ; ?> value="+">Addition</option>
                <option <?php if ($operation == '/' ) echo 'selected' ; ?> value="/">Division</option>
                <option <?php if ($operation == '-' ) echo 'selected' ; ?> value="-">Subtraction</option>
            </select>
        </div>
        <div>
            <input type="submit">
        </div>
    </form> 
    <hr>
    <ul class="shortcuts" id="shortcuts">
        <li><a id="f4x4" href="#">4 <b class='operator'></b> 4</a></li>
        <li><a id="f5x10" href="#">5 <b class='operator'></b> 10</a></li>
        <li><a id="f10x10" href="#">10 <b class='operator'></b> 10</a></li>
    </ul>
    <hr>
        <?php
            if($lines>0 && $columns >0){
                echo times_table_view($lines,$columns,$operation);
            }
        ?>

<script type="text/javascript">
    var operation_selected;

    window.onload = function(){
        changeOperator();
    }

    function changeOperator(){
        operation_selected = document.getElementById('operationSelect').value;
        var listOperatorButtons = document.getElementsByClassName("operator");
        for (var i = 0; i < listOperatorButtons.length; i++) {
            listOperatorButtons[i].innerHTML = operation_selected;
        }
        if(operation_selected=="+")
            operation_selected="%2B"; //correção porque o + não entra no link
        document.getElementById('f4x4').href='javascript:autoFill(4,4,"'+operation_selected+'");';
        document.getElementById('f5x10').href='javascript:autoFill(5,10,"'+operation_selected+'");';
        document.getElementById('f10x10').href='javascript:autoFill(10,10,"'+operation_selected+'");';
    }

    function autoFill (lines, columns, operator) {
        document.getElementById('lines_ID').value = lines;
        document.getElementById('columns_ID').value = columns;
        document.getElementById('operationSelect').value = operator;
        document.getElementById('form_principal').submit();
    }
</script>

</body>
</html>
