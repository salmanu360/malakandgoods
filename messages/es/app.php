<?php 

$atif = include 'atif.php';
$salman = include 'salman.php';
$ali = include 'ali.php';
$sujjad = include 'sujjad.php';
$value = [
     'Login'=>'Iniciar sesión', 
     'Please fill out the following fields to login'=>'Por favor complete los siguientes campos para iniciar sesión',
     'Username'=>'nombre de usuario',
     'Password'=>'contraseña',
     'Confirm Password'=>'Confirmar contraseña',
     'First Name'=>'Nombre de pila',
     'Last Name'=>'Apellido',
     'Mobile Number'=>'Número de teléfono móvil',
     'Email'=>'correo electrónico',
     'Email Address'=>'dirección de correo electrónico',
     'Signup'=>'Regístrate',
     'Please fill out the following fields to signup'=>'Por favor, rellene los siguientes campos para registrarse',
     'Thank you for registration. Please check your inbox for verification email.'=>'Gracias por el registro. Por favor, compruebe su bandeja de entrada para el correo electrónico de verificación.',
     'Incorrect username or password.'=>'Nombre de usuario o contraseña incorrecta.',
     'I\'m not a robot'=>'No soy un robot',
     'Setup Account'=>'Configurar la cuenta',
     'Department'=>'Departamento',
     'Reporting Manager'=>'Gerente de informes',
     'Update Password'=>'Actualiza contraseña',
     'Confirm New Password'=>'Confirmar nueva contraseña',
     'New Password'=>'Nueva contraseña',
     'Current Password'=>'contraseña actual',
     'Update Your Password'=>'Actualice su contraseña',
     'Current password cannot be blank'=>'La contraseña actual no puede estar en blanco',
     'Successfully password has been updated. You will logoff in 60 sec.'=>'
La contraseña se ha actualizado correctamente. Se desconectará en 60 segundos.',
  'Change Password'=>'ÄCambia la contraseña',
  'Status'=>'Estado',
 'Profile Info'=>'Información de perfil',
     'Cancel'=>'Cancelar',
     'Active'=>'Activo',
     'Inactive'=>'Inactivo',
     'Action'=>'Acción',
     'Select value'=>'Selecciona valor',
     /*ali translation starts*/
     'Follow the link below to reset your password'=>'Siga el enlace de abajo para restablecer su contraseña',
     'Hello'=>'Hola',
//by salman
     'Send Grid'=>'Send Grid',
    'Send Grid User Name'=>'Enviar Grid Nombre de usuario',
    'Send Grid Password'=>'Enviar Grid Password',
    'Send Grid API Key'=>'Enviar Grid API Key',
    'Save'=>'Salvar',
    'Back to App Listing'=>'Volver a la lista de aplicaciones',
    'Send Grid successfully created'=>'Enviar Grid creado con éxito',

    'Log Report'=>'Informe de registro',
    'Date'=>'Fecha',
    'IP Address'=>'Dirección IP',
    'Browser'=>'Navegador',
    'Time Stamp'=>'Sello de tiempo',
    'Back to Member Listing'=>'Volver a la lista de miembros',
    'Middle Name'=>'Segundo nombre',
    'Update Your Profile'=>'Actualiza tu perfil',
    'Update Profile'=>'Actualización del perfil',
    'Successfully profile updated in the system'=>'Perfil actualizado con éxito en el sistema.',
];

return array_merge($value,$atif,$salman,$ali,$sujjad);