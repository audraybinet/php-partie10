
<?php
// import
include 'nationalite.php';
include 'pays.php';
include 'regex.php';
include 'control.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>TP1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" />
<link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <h1>FORMULAIRE A REMPLIR</h1>
    <body class="container">
<?php if (count($errorLog) == 0) { /* vérification du tableau, s'il est vide on montre le contenu du formalaire envoyé*/ ?>
            <p><?= $lastname; ?></p>
            <p><?= $firstname; ?></p>
            <p><?= $birthDate; ?></p>
            <p><?= $countryChoice; ?></p>
            <p><?= $nationChoice; ?></p>
            <p><?= $address; ?></p>
            <p><?= $email; ?></p>
            <p><?= $phoneNumber; ?></p>
            <p><?= $studyLevel ?></p>
            <p><?= $numberANPE; ?></p>
            <p><?= $numberBadge; ?></p>
            <p><?= $codecademyLink; ?></p>
            <p><?= $areaHero; ?></p>
            <p><?= $areaHack; ?></p>
            <p><?= $areaExp; ?></p>
<?php } else { /* si le tableau d'erreur n'est pas vide on laisse le formulaire*/ ?>
            <form class="pt-4" action="" method="POST">
                <div class="form-group row">
                    <label for="lastname" class="col-2 col-form-label">Nom</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nom" id="lastname" name="lastname" value="<?= $lastname; ?>" />
                        <?php if(isset($_POST['submit']) && $lastnameErrorMessage != null){ ?> <p class="alert alert-danger"><?= $lastnameErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="firstname" class="col-2 col-form-label">Prénom</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Prénom" id="firstname" name="firstname" value="<?= $firstname; ?>" />
                        <?php if(isset($_POST['submit']) && $firstnameErrorMessage != null){ ?> <p class="alert alert-danger"><?= $firstnameErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="birthDate" class="col-2 col-form-label">Date de naissance</label>
                    <div class="col-10">
                        <input class="form-control" type="date" id="birthDate" name="birthDate" value="<?= $birthDate; ?>" />
                        <?php if(isset($_POST['submit']) && $birthDateErrorMessage != null){ ?> <p class="alert alert-danger"><?= $birthDateErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="countryChoice" class="col-2 col-form-label">Pays de naissance</label>
                    <div class="col-10">
                        <select class="custom-select" id="countryChoice" name="countryChoice">
                        <?php for ($row = 0; $row < sizeof($countryCode); $row++) { ?>
                                <option value="<?= $countryCode[$row][3]; ?>" <?= ($countryCode[$row][3] == $countryChoice)? 'selected' : '' ?> ><?= $countryCode[$row][3]; ?></option>
                        <?php } ?>
                        </select>
                        <?php if(isset($_POST['submit']) && $countryChoiceErrorMessage != null){ ?> <p class="alert alert-danger"><?= $countryChoiceErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nationChoice" class="col-2 col-form-label">Nationalité</label>
                    <div class="col-10">
                        <select class="custom-select" id="nationChoice" name="nationChoice">
                        <?php foreach ($nationnaliteFRfr as $value) { ?>
                                <option value="<?= $value['title']; ?>" <?= ($value['title'] == $nationChoice)? 'selected' : '' ?> ><?= $value['title']; ?></option>
                        <?php } ?>
                        </select>
                        <?php if(isset($_POST['submit']) && $nationChoiceErrorMessage != null){ ?> <p class="alert alert-danger"><?= $nationChoiceErrorMessage; ?></p><?php } ?>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="address" class="col-2 col-form-label">Adresse</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Adresse" id="address" name="address" value="<?= $address; ?>"  />
                        <?php if(isset($_POST['submit']) && $addressErrorMessage != null){ ?> <p class="alert alert-danger"><?= $addressErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input class="form-control" type="mail" placeholder="exemple@exemple.com" id="email" name="email" value="<?= $email; ?>" />
                        <?php if(isset($_POST['submit']) && $emailErrorMessage != null){ ?> <p class="alert alert-danger"><?= $emailErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phoneNumber" class="col-2 col-form-label">Téléphone</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="0600000000" id="phoneNumber" name="phoneNumber" value="<?= $phoneNumber; ?>" />
                        <?php if(isset($_POST['submit']) && $phoneNumberErrorMessage != null){ ?> <p class="alert alert-danger"><?= $phoneNumberErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="studyLevel" class="col-2 col-form-label">Diplôme</label>
                    <div class="col-10">
                        <select class="custom-select" id="studyLevel" name="studyLevel" />
                        <option value="Sans" <?= ($studyLevel == 'Sans')? 'selected' : '' ?>>Sans</option>
                        <option value="Bac" <?= ($studyLevel == 'Bac')? 'selected' : '' ?>>Bac</option>
                        <option value="Bac+2" <?= ($studyLevel == 'Bac+2')? 'selected' : '' ?>>Bac+2</option>
                        <option value="Bac+3" <?= ($studyLevel == 'Bac+3')? 'selected' : '' ?>>Bac+3</option>
                        <option value="Supérieur" <?= ($studyLevel == 'Supérieur')? 'selected' : '' ?>>Supérieur</option>
                        </select>
                        <?php if(isset($_POST['submit']) && $studyLevelErrorMessage != null){ ?> <p class="alert alert-danger"><?= $studyLevelErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="numberANPE" class="col-2 col-form-label">Numéro pôle emploi</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Numéro pôle emploi" id="numberANPE" name="numberANPE" value="<?= $numberANPE; ?>" />
                        <?php if(isset($_POST['submit']) && $numberANPEErrorMessage != null){ ?> <p class="alert alert-danger"><?= $numberANPEErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="numberBadge" class="col-2 col-form-label">Nombre de badge</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nombre de badge" id="numberBadge" name="numberBadge" value="<?= $numberBadge; ?>" />
                        <?php if(isset($_POST['submit']) && $numberBadgeErrorMessage != null){ ?> <p class="alert alert-danger"><?= $numberBadgeErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="codecademyLink" class="col-2 col-form-label">Liens codecademy</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Liens codecademy" id="codecademyLink" name="codecademyLink" value="<?= $codecademyLink; ?>" />
                        <?php if(isset($_POST['submit']) && $codecademyLinkErrorMessage != null){ ?> <p class="alert alert-danger"><?= $codecademyLinkErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="areaHero" class="col-2 col-form-label">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                    <div class="col-10">
                        <textarea class="form-control" id="areaHero" name="areaHero" rows="3" ><?= $areaHero; ?></textarea>
                        <?php if(isset($_POST['submit']) && $areaHeroErrorMessage != null){ ?> <p class="alert alert-danger"><?= $areaHeroErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="areaHack" class="col-2 col-form-label">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <div class="col-10">
                        <textarea class="form-control" id="areaHack" name="areaHack" rows="3" ><?= $areaHack; ?></textarea>
                        <?php if(isset($_POST['submit']) && $areaHackErrorMessage != null){ ?> <p class="alert alert-danger"><?= $areaHackErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="areaExp" class="col-2 col-form-label">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <div class="col-10">
                        <textarea class="form-control" id="areaExp" name="areaExp" rows="3"><?= $areaExp; ?></textarea>
                        <?php if(isset($_POST['submit']) && $areaExpErrorMessage != null){ ?> <p class="alert alert-danger"><?= $areaExpErrorMessage; ?></p><?php } ?>
                    </div>
                </div>
                <div class="row pt-2">
                    <input type="submit" name="submit" class="col btn btn-dark" value="Envoyer" />
                </div>
            </form>
<?php } ?>                   
    </body>
</html>