<?php
// import
include 'errormessage.php';
// création d'un tableau pour stocker les erreurs s'il y en a
$errorLog = [];
// création et déclaration des variables
$lastname = '';
$firstname = '';
$birthDate = '';
$address = '';
$email = '';
$countryChoice = '';
$nationChoice = '';
$phoneNumber = '';
$numberANPE = '';
$numberBadge = '';
$codecademyLink = '';
$areaHero = '';
$areaHack = '';
$areaExp = '';
$studyLevel = '';

$lastnameErrorMessage = null;
$firstnameErrorMessage = null;
$birthDateErrorMessage = null;
$addressErrorMessage = null;
$emailErrorMessage = null;
$countryChoiceErrorMessage = null;
$nationChoiceErrorMessage = null;
$phoneNumberErrorMessage = null;
$numberANPEErrorMessage = null;
$numberBadgeErrorMessage = null;
$codecademyLinkErrorMessage = null;
$areaHeroErrorMessage = null;
$areaHackErrorMessage = null;
$areaExpErrorMessage = null;
$studyLevelErrorMessage = null;
// vérification si le formulation a été rempli sur chaque input, s'il est rempli on attribut une variable à chaque information ue l'on a envoyé
// et on passe cette information sous htmlspecialchars, sinon on envoi une erreur dans un tableau qui correspond à l'information qui n'a pas été envoyé
!empty($_POST['lastname']) ? $lastname = htmlspecialchars($_POST['lastname']) : array_push($errorLog, 1) && $lastnameErrorMessage = $errorLogMessage[1];
!empty($_POST['firstname']) ? $firstname = htmlspecialchars($_POST['firstname']) : array_push($errorLog, 2) && $firstnameErrorMessage = $errorLogMessage[2];
!empty($_POST['birthDate']) ? $birthDate = htmlspecialchars($_POST['birthDate']) : array_push($errorLog, 3) && $birthDateErrorMessage = $errorLogMessage[3];
!empty($_POST['address']) ? $address = htmlspecialchars($_POST['address']) : array_push($errorLog, 4) && $addressErrorMessage = $errorLogMessage[4];
!empty($_POST['email']) ? $email = htmlspecialchars($_POST['email']) : array_push($errorLog, 5) && $emailErrorMessage = $errorLogMessage[5];
!empty($_POST['countryChoice']) ? $countryChoice = htmlspecialchars($_POST['countryChoice']) : array_push($errorLog, 6) && $countryChoiceErrorMessage = $errorLogMessage[6];
!empty($_POST['nationChoice']) ? $nationChoice = htmlspecialchars($_POST['nationChoice']) : array_push($errorLog, 7) && $nationChoiceErrorMessage = $errorLogMessage[7];
!empty($_POST['phoneNumber']) ? $phoneNumber = htmlspecialchars($_POST['phoneNumber']) : array_push($errorLog, 8) && $phoneNumberErrorMessage = $errorLogMessage[8];
!empty($_POST['numberANPE']) ? $numberANPE = htmlspecialchars($_POST['numberANPE']) : array_push($errorLog, 9) && $numberANPEErrorMessage = $errorLogMessage[9];
!empty($_POST['numberBadge']) ? $numberBadge = htmlspecialchars($_POST['numberBadge']) : array_push($errorLog, 10) && $numberBadgeErrorMessage = $errorLogMessage[10];
!empty($_POST['codecademyLink']) ? $codecademyLink = htmlspecialchars($_POST['codecademyLink']) : array_push($errorLog, 11) && $codecademyLinkErrorMessage = $errorLogMessage[11];
!empty($_POST['areaHero']) ? $areaHero = htmlspecialchars($_POST['areaHero']) : array_push($errorLog, 12) && $areaHeroErrorMessage = $errorLogMessage[12];
!empty($_POST['areaHack']) ? $areaHack = htmlspecialchars($_POST['areaHack']) : array_push($errorLog, 13) && $areaHackErrorMessage = $errorLogMessage[13];
!empty($_POST['areaExp']) ? $areaExp = htmlspecialchars($_POST['areaExp']) : array_push($errorLog, 14) && $areaExpErrorMessage = $errorLogMessage[14];
!empty($_POST['studyLevel']) ? $studyLevel = htmlspecialchars($_POST['studyLevel']) : array_push($errorLog, 15) && $studyLevelErrorMessage = $errorLogMessage[15];

// Si le champs n'est pas vide on le teste avec une regex qui lui correspond, si c'est faux une erreur est ajouté dans le tableau d'erreur
if (!in_array(1, $errorLog)) {
    preg_match($regexName, $lastname) ?: array_push($errorLog, 201) && $lastnameErrorMessage = $errorLogMessage[201];
}
if (!in_array(2, $errorLog)) {
    preg_match($regexName, $firstname) ?: array_push($errorLog, 202) && $firstnameErrorMessage = $errorLogMessage[202];
}
if (!in_array(3, $errorLog)) {
    preg_match($regexDate, $birthDate) ?: array_push($errorLog, 203) && $birthDateErrorMessage = $errorLogMessage[203];
}
if (!in_array(4, $errorLog)) {
    preg_match($regexAddress, $address) ?: array_push($errorLog, 204) && $addressErrorMessage = $errorLogMessage[204];
}
if (!in_array(5, $errorLog)) {
    preg_match($regexMail, $email) ?: array_push($errorLog, 205) && $emailErrorMessage = $errorLogMessage[205];
}
if (!in_array(8, $errorLog)) {
    preg_match($regexPhoneNumber, $phoneNumber) ?: array_push($errorLog, 208) && $phoneNumberErrorMessage = $errorLogMessage[208];
}
if (!in_array(9, $errorLog)) {
    preg_match($regexText, $numberANPE) ?: array_push($errorLog, 209) && $numberANPEErrorMessage = $errorLogMessage[209];
}
if (!in_array(10, $errorLog)) {
    preg_match($regexPhoneNumber, $numberBadge) ?: array_push($errorLog, 210) && $numberBadgeErrorMessage = $errorLogMessage[210];
}
if (!in_array(11, $errorLog)) {
    preg_match($regexURL, $codecademyLink) ?: array_push($errorLog, 211) && $codecademyLinkErrorMessage = $errorLogMessage[211];
}
if (!in_array(12, $errorLog)) {
    preg_match($regexText, $areaHero) ?: array_push($errorLog, 212) && $areaHeroErrorMessage = $errorLogMessage[212];
}
if (!in_array(13, $errorLog)) {
    preg_match($regexText, $areaHack) ?: array_push($errorLog, 213) && $areaHackErrorMessage = $errorLogMessage[213];
}
if (!in_array(14, $errorLog)) {
    preg_match($regexText, $areaExp) ?: array_push($errorLog, 214) && $areaExpErrorMessage = $errorLogMessage[214];
}
if (!in_array(15, $errorLog)) {
    preg_match($regexText, $studyLevel) ?: array_push($errorLog, 215) && $studyLevelErrorMessage = $errorLogMessage[215];
}
?>