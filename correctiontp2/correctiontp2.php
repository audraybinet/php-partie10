<?php
// Initialize a default value for all future informations collected through the form.
$firstName = $lastName = $age = $society = $gender = '';
$formSubmitted = false;
// Regex for all kinds of names (must include at least one word).
$regexName = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/";
$errors = [];
// If the server register a post request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formSubmitted = true;
    // Series of controls to verify if all the informations are acquainted as asked and notify user if something went wrong.
    $firstName = trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING));
    if (empty($firstName)) {
        $errors['firstName'] = 'Veuillez renseigner le prénom.';
    } elseif (!preg_match($regexName, $firstName)) {
        $errors['firstName'] = 'Votre prénom contient des caractères non autorisés !';
    }
    $gender = trim(filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING));
    if (empty($gender)) {
        $errors['gender'] = 'Veuillez renseigner votre civilité.';
    } elseif (!preg_match('/woman|man/', $gender)) {
        $errors['gender'] = 'Votre civilité ne correspond à aucunes des propositions du formulaire !';
    }
    //contôle du prénom
    $lastName = trim(filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING));
    if (empty($lastName)) {
        $errors['lastName'] = 'Veuillez renseigner le nom.';
    } elseif (!preg_match($regexName, $lastName)) {
        $errors['lastName'] = 'Votre nom contient des caractères non autorisés !';
    }
    //contôle du nom de la société
    $society = trim(filter_input(INPUT_POST, 'society', FILTER_SANITIZE_STRING));
    if (empty($society)) {
        $errors['society'] = 'Veuillez renseigner le nom de la société.';
    } elseif (!preg_match($regexName, $society)) {
        $errors['society'] = 'Votre nom contient des caractères non autorisés !';
    }
    //contrôle de l'âge
    $age = trim(filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT));
    $options = array('options' => array('min_range' => 16, 'max_range' => 88));
    if (empty($age)) {
        $errors['age'] = 'Veuillez renseigner votre âge.';
    } elseif (!filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT, $options)) {
        $errors['age'] = 'Votre âge n\'est pas correct !';
    }
}
?>
<!-- The values will take the ones registered by the user if that can apply. By default, they will be considered as '', as written upper in the php part. -->
<form method="post" action="index.php" class="formParts" novalidate>
    <div class="form-group row">
        <label for="gender" class="col-form-label col-2">Civilité :</label>
        <select id="gender" name="gender" class="form-control col-8 custom-select">
            <option value="">
                Choisissez
            </option>
            <option value="woman">
                Madame
            </option>
            <option value="man">
                Monsieur
            </option>
        </select>
        <span class="text-danger"><?= ($errors['gender']) ?? '' ?></span>
    </div>
    <div class="form-group row">
        <label for="lastName" class="col-form-label col-2">Nom :</label>
        <input id="lastName" name="lastName" type="text" value="<?= $lastName ?>" class="form-control col-8" placeholder="TOTO">
        <span class="text-danger"><?= ($errors['lastName']) ?? '' ?></span>
    </div>
    <div class="form-group row">
        <label for="firstName" class="col-form-label col-2">Prénom :</label>
        <input id="firstName" name="firstName" type="text" value="<?= $firstName ?>" class="form-control col-8" placeholder="Tata">
        <span class="text-danger"><?= ($errors['firstName']) ?? '' ?></span>
    </div>
    <div class="form-group row">
        <label for="age" class="col-form-label col-2">Âge :</label>
        <input id="age" name="age" type="text" value="<?= $age ?>" class="form-control col-8" placeholder="20">
        <span class="text-danger"><?= ($errors['age']) ?? '' ?></span>
    </div>
    <div class="form-group row">
        <label for="society" class="col-form-label col-2">Société :</label>
        <input id="society" name="society" type="text" value="<?= $society ?>" class="form-control col-8" placeholder="Kicodedur">
        <span class="text-danger"><?= ($errors['society']) ?? '' ?></span>
    </div>
    <div class="form-group row justify-content-center">
        <input type="submit" value="Inscription" class="btn btn-success">
    </div>
</form> 
<?php
// If the $formSubmitted is true and that no errors remain, display the informations registered by the user.
if ($formSubmitted && count($errors) == 0) { ?>
    <p><?= $gender ?></p>
    <p><?= $lastName ?></p>
    <p><?= $firstName ?></p>
    <p><?= $age ?></p>
    <p><?= $society ?></p>
<?php
}
