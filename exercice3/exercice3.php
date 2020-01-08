
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
                                  <?php
include 'function.php';
?>
                        <?php
        function showArray($array) {

            ?>
            <div>
                <p><?= $array['name'] . ' ' . $array['firstname'] . ' ' ?></p>
                <p><img src=" <?= $array['portrait']; ?>" height = "400px"  width = "350px" /></p>
            </div> <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>