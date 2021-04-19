
<?php 
$firstname = $_POST['user_firstname'];
$name = $_POST['user_name'];
$sujet = $_POST['user_sujet'];
$email = $_POST['user_email'];
$telephone = $_POST['user_telephone'];
$message = $_POST['user_message'];

echo "Merci " . $firstname ." ". $name . " de nous avoir contacté à propos de " . $sujet. PHP_EOL;

echo "Un de nos conseiller vous contactera soit à l’adresse " . $email . " ou par téléphone au " . $telephone . " dans les plus brefs délais pour traiter votre demande :" . PHP_EOL;

echo $message;
