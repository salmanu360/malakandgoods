<?php 
$atif = include 'atif.php';
$salman = include 'salman.php';
$ali = include 'ali.php';
$sujjad = include 'sujjad.php';

$value = [
     'Login'=>'S\'identifier',
     'Please fill out the following fields to login'=>'Veuillez remplir les champs suivants pour vous connecter',
     'Username'=>'Nom d\'utilisateur',
     'Password'=>'mot de passe',
     'Confirm Password'=>'Confirmez le mot de passe',
     'First Name'=>'Prénom',
     'Last Name'=>'Nom de famille',
     'Mobile Number'=>'Numéro de portable',
     'Email'=>'Email',
     'Email Address'=>'adresse électronique',
     'Signup'=>'S\'inscrire',
     'Please fill out the following fields to signup'=>'Veuillez remplir les champs suivants pour vous inscrire',
     'Thank you for registration. Please check your inbox for verification email.'=>'Merci pour votre inscription. Veuillez vérifier votre boîte de réception pour le courrier électronique de vérification.',
     'Incorrect username or password.'=>'Identifiant ou mot de passe incorrect.',
     'I\'m not a robot'=>'Je ne suis pas un robot',

     'Setup Account'=>'Mettre en place compte',

     'Department'=>'département',
     'Reporting Manager'=>'Gestionnaire de rapports',
     'Update Password'=>'Mettre à jour le mot de passe',
     'Confirm New Password'=>'
Confirmer le nouveau mot de passe',
     'New Password'=>'nouveau mot de passe',
     'Current Password'=>'Mot de passe actuel',
     'Update Your Password'=>'Mettez à jour votre mot de passe',
     'Change Password'=>'Changer le mot de passe',
     'Current password cannot be blank'=>'Le mot de passe actuel ne peut pas être vide',
     'Successfully password has been updated. You will logoff in 60 sec.'=>'
Avec succès, le mot de passe a été mis à jour. Vous vous déconnecterez en 60 secondes.',
 'Status'=>'statut',
 'Profile Info'=>'Informations de profil',
     // sujjad translation starts
     'Cancel'=>'Annuler',
     'Active'=>'Actif',
     'Inactive'=>'Inactif',
     'Action'=>'la activité',
     'Select value'=>'Sélectionnez une valeur',
     /*ali translation starts*/
     'Follow the link below to reset your password'=>'Suivez le lien ci-dessous pour réinitialiser votre mot de passe',
     'Hello'=>'Bonjour',

// by salman
    'Send Grid'=>'Envoyer une grille',
    'Send Grid User Name'=>'Envoyer le nom dutilisateur de la grille',
    'Send Grid Password'=>'Envoyer le mot de passe de la grille',
    'Send Grid API Key'=>'Envoyer la clé de lAPI de grille',
    'Save'=>'sauvegarder',
    'Back to App Listing'=>'Retour à la liste des applications',
    'Send Grid successfully created'=>'Envoyer la grille créée avec succès',

    'Log Report'=>'Journal de bord',
    'Date'=>'Rendez-vous amoureux',
    'IP Address'=>'Adresse IP',
    'Browser'=>'Navigateur',
    'Time Stamp'=>'Horodatage',
    'Back to Member Listing'=>'Retour à la liste des membres',
    'Middle Name'=>'Deuxième nom',
    'Update Your Profile'=>'Mettre à jour votre profil',
    'Update Profile'=>'Mettre à jour le profil',
    'Successfully profile updated in the system'=>'Profil mis à jour avec succès dans le système',
];

return array_merge($value,$atif,$salman,$ali,$sujjad);
