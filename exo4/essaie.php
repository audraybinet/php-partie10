<?php
$result = 0;
$number1 = 0;
$number2 = 0;
// Verification des nombres et changement de leur valeur
(!empty($_POST['number1']) && is_numeric($_POST['number1']))? $number1 = $_POST['number1'] : $number1 = $number1;
(!empty($_POST['number2']) && is_numeric($_POST['number2']))? $number2 = $_POST['number2'] : $number2 = $number2;
// Si on envoi une requete on execute le code
if(!empty($_POST)){
        // addition
    if (isset($_POST['addition'])){
        $result = $number1 + $number2;
    }
        // soustraction
    if(isset($_POST['soustraction'])){
        $result = $number1 - $number2;
    }
        // multiplication
    if(isset($_POST['multiplication'])){
        $result = $number1 * $number2;
    }
        // division
    if(isset($_POST['division'])){
        $result = $number1 / $number2;
    }
        // reset
    if(isset($_POST['reset'])){
        $result = 0;
        $number1 = 0;
        $number2 = 0;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>LA CALCULATRICE</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <h1> LA CALCULATRICE</h1>
        <div class="container">
            <div class ="row justify-content-center">
                <div class="card">
                    <img class="card-img-top" src="ca.jpg" alt="ca">
  <form action="index.php" method="post">
      <input type="text" name="number1" value="<?= $number1; ?>"/>
      <input type="text" name="number2" value="<?= $number2; ?>"/>
      <input type="submit" name="addition" value="+"/>
      <input type="submit" name="soustraction" value="-"/>
      <input type="submit" name="multiplication" value="*"/>
      <input type="submit" name="division" value="/"/>
      <input type="submit" name="reset" value="C"/>
    </form>
    <p>Résultat : <?= $result; ?></p>
                </div>
            </div>
        </div>
    </body>
</html>