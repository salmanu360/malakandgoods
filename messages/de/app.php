<?php 
$atif = include 'atif.php';
$salman = include 'salman.php';
$ali = include 'ali.php';
$sujjad = include 'sujjad.php';
$value = [
     'Login'=>'Anmeldung', 
     'Please fill out the following fields to login'=>'Bitte füllen Sie die folgenden Felder aus, um sich anzumelden',
     'Username'=>'Nutzername',
     'Password'=>'Passwort',
     'Confirm Password'=>'Passwort bestätigen',
     'First Name'=>'Vorname',
     'Last Name'=>'Nachname',
     'Mobile Number'=>'Handynummer',
     'Email'=>'Email',
     'Email Address'=>'E-Mail-Addresse',
     'Signup'=>'Anmelden',
     'Please fill out the following fields to signup'=>'Bitte füllen Sie die folgenden Felder aus, um sich anzumelden',

    'Thank you for registration. Please check your inbox for verification email.'=>'Vielen Dank für die Anmeldung. Bitte checken Sie Ihren Posteingang auf Bestätigungs-E-Mail.',
    'Incorrect username or password.'=>'Falscher Benutzername oder Passwort.',
    'I\'m not a robot'=>'Ich bin kein Roboter',
    'Setup Account'=>'Einen Account erstellen',
    'Department'=>'Abteilung',
     'Reporting Manager'=>'Berichts-Manager',
     'Update Password'=>'Passwort erneuern',
     'Confirm New Password'=>'Bestätige neues Passwort',
     'New Password'=>'Neues Kennwort',
     'Current Password'=>'derzeitiges Passwort',
     'Update Your Password'=>'Aktualisieren Sie Ihr Passwort',
     'Current password cannot be blank'=>'
Das aktuelle Passwort darf nicht leer sein',
     'Successfully password has been updated. You will logoff in 60 sec.'=>'
Das Passwort wurde erfolgreich aktualisiert. Sie werden in 60 Sekunden abgemeldet.',
 'Change Password'=>'Ändere das Passwort',
  'Status'=>'Status',
 'Profile Info'=>'Profil Information',
    // sujjad translation starts
    'Select value'=>'Wähle Wert',
    'Cancel'=>'Stornieren',
    'Active'=>'Aktiv',
    'Inactive'=>'Inaktiv',
    'Action'=>'Aktion',
    /*ali translation starts*/
    'Follow the link below to reset your password'=>'Folgen Sie dem Link unten, um Ihr Passwort zurückzusetzen',
    'Hello'=>'Hallo',
    //by salman
    'Send Grid'=>'Gitter senden',
    'Send Grid User Name'=>'Senden Sie den Grid-Benutzernamen',
    'Send Grid Password'=>'Senden Sie das Rasterpasswort',
    'Send Grid API Key'=>'Grid-API-Schlüssel senden',
    'Save'=>'sparen',
    'Back to App Listing'=>'Zurück zum App-Listing',
    'Send Grid successfully created'=>'Send Grid erfolgreich erstellt',

    'Log Report'=>'Protokollbericht',
    'Date'=>'Datum',
    'IP Address'=>'IP Adresse',
    'Browser'=>'Browser',
    'Time Stamp'=>'Zeitstempel',
    'Back to Member Listing'=>'Zurück zur Mitgliederliste',
    'Middle Name'=>'Zweiter Vorname',
    'Update Your Profile'=>'Aktualisiere dein Profil',
    'Update Profile'=>'Profil aktualisieren',
    'Successfully profile updated in the system'=>'Profil erfolgreich im System aktualisiert',
];
return array_merge($value,$atif,$salman,$ali,$sujjad);