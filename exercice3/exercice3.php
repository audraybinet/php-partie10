
<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" />
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>TP 3</title>
    </head>
    <body>
        <h1>TP 3</h1>
        <h2>Faire une fonction qui permet d'afficher les données des tableaux </h2>
        <div class ="container">
            <div class ="row justify-content-center ">
                <div class="card">
                    <img class="card-img-top" src="Ultravomit.jpg" alt="deco">
                    <div class="card-body">
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <p><?php showArray(${'portrait' . $i}); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>