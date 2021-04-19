
<form action="" method="POST" novalidate>
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
        header('Location: thanks.php');
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
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name" value="<?= $data['user_name'] ?? '' ?>">
    </div>
    <div>
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="user_firstname" value="<?= $data['user_firstname'] ?? '' ?>">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="email" name="user_email" value="<?= $data['user_email'] ?? '' ?>">
    </div>
    <div>
        <label for="telephone">Telephone :</label>
        <input type="text" id="telephone" name="user_telephone" value="<?= $data['user_telephone'] ?? '' ?>">
    </div>
    <div>
        <label for="sujet">Sujet :</label>
        <select type="sujet" id="sujet" name="user_sujet" value="<?= $data['user_sujet'] ?? '' ?>">
        <option value="choisi" selected></option>
        <option value="covid19">Covid19</option>
        <option value="covid20">Covid20</option>
        <option value="illuminati">Illuminati</option>
        <option value="pyramides">Pyramides</option>
        <option value="OVNI">OVNI</option>
        <option value="reptilien">Les reptiliens</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message" value="<?= $data['user_message'] ?? '' ?>"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>