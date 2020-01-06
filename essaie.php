<!DOCTYPE html>
<html lang="fr">

    <head>
<meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>LA CALCULATRICE</title>
    </head>

    <body>
        <h1> LA CALCULATRICE</h1>
        <?php
        if (isset($_GET['op1'])) {
            $op1 = $_GET['op1'];
        } else {
            $op1 = 0;
        }
        if (isset($_GET['op2'])) {
            $op2 = $_GET['op2'];
        } else {
            $op2 = 0;
        }
        if (isset($_GET['operation'])) {
            $operation = $_GET['operation'];
        } else {

            $operation = null;
        }
        //$operation=$_GET['operation'];

        switch ($operation) { // on indique sur quelle variable on travaille
            case "add":
                $res = $op1 + $op2;
                echo $op1 . "+" . $op2 . " = " . $res;
                break;
            case "mult":
                $res = $op1 * $op2;
                echo $op1 . "*" . $op2 . " = " . $res;
                break;
            case "sub":
                $res = $op1 - $op2;
                echo $op1 . "-" . $op2 . " = " . $res;
                break;
            case "div":
                if ($op2 != 0) {
                    $res = $op1 / $op2;
                } else {
                    $res = "Div 0 !";
                }

                echo $op1 . "/" . $op2 . " = " . $res;
                break;
            default:
                echo "Entrer valeurs";
        }
        ?>
        <card>
        <form method="get" action="#">
            <label>Calculatrice</label> :
            <input type="number" name="op1" value="<?php if (isset($_GET['operation'])) {
            echo $res;
        }
        ?>" id="op1">
            <select name="operation">
                <option value="add">Add</option>
                <option value="mult">Multiplicate</option>
                <option value="sub">Substract</option>
                <option value="div">Divide</option>
            </select> 
            <input type="number" name="op2" id="op2">
            <br/>
            <input type="submit" value="Envoyez">
        </form>
        </card>
    </body>
</html>