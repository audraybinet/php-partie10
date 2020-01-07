<?php
/*****initialisation du tableau d'erreur*****/
$errorLog = [];
/*****création et déclaration des variables*****/
// civilité
$gender = '';
// nom
$lastname = '';
//  prénom
$firstname = '';
// age
$age = '';
// société
$society = '';
/*****FORMULAIRE*****/
//l'utilisateur envoie des données
if(!empty($_POST)){
// vérification pour la civilité
!empty($_POST['gender']) ? $gender = htmlspecialchars($_POST['gender']) : $errorLog['gender'] = 'Veuillez saisir une civilité';
// vérification pour le nom
!empty($_POST['lastname']) ? $lastname = htmlspecialchars($_POST['lastname']) : $errorLog['lastname'] = 'Veuillez saisir un nom';
// vérification pour le prénom 
!empty($_POST['firstname']) ? $firstname = htmlspecialchars($_POST['firstname']) : $errorLog['firstname'] = 'Veuillez saisir un prénom';
// vérification pour l'age 
!empty($_POST['age']) ? $age = htmlspecialchars($_POST['age']) : $errorLog['age'] = 'Veuillez saisir un age';
// vérification pour la société 
!empty($_POST['society']) ? $society = htmlspecialchars($_POST['society']) : $errorLog['society'] = 'Veuillez saisir une société';
}


