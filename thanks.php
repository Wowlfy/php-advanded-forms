<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_map('trim', $_POST);

    $errors = [];

    if (empty($data['user_firstname'])) {
        $errors[] = 'Le prénom est obligatoire';
    }
    if (empty($data['user_name'])) {
        $errors[] = '⚠Le nom est obligatoire';
    }
    if (empty($data['user_email'])) {
        $errors[] = '⚠L\'Email est obligatoire';
    }
    if (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = '⚠Mauvais format d\'email';
    }
    if (empty($data['user_message'])) {
        $errors[] = 'Un message est obligatoire';
    }
    if (empty($data['user_sujet'])) {
        $errors[] = 'Un sujet est obligatoire';
    }
    if (empty($data['user_telephone'])) {
        $errors[] = 'le numero de telephone est obligatoire';
    }
    if (empty($errors)) {
        $firstname = $_POST['user_firstname'];
        $name = $_POST['user_name'];
        $sujet = $_POST['user_sujet'];
        $email = $_POST['user_email'];
        $telephone = $_POST['user_telephone'];
        $message = $_POST['user_message'];

        echo "Merci " . $firstname . " " . $name . " de nous avoir contacté à propos de " . $sujet . PHP_EOL;

        echo "Un de nos conseiller vous contactera soit à l’adresse " . $email . " ou par téléphone au " . $telephone . " dans les plus brefs délais pour traiter votre demande :" . PHP_EOL;

        echo $message;
    }
}
?>
<?php if (!empty($errors)) : ?>
    <ul class="error">
        <?php foreach ($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>