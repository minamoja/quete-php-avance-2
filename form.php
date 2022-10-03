<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // nettoyage et validation des données soumises via le formulaire 
        if (!isset($_POST['user_name']) || trim($_POST['user_name']) === '')
            $errors[] = "Le nom est obligatoire";
        if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
            $errors[] = "Le prénom est obligatoire";
        if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL))
            $errors[] = "il faut un email valide";
        if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '')
            $errors[] = "Le téléphone est obligatoire";
        if (!isset($_POST['user_subject']) || trim($_POST['user_subject']) === '')
            $errors[] = "La date de naissance est obligatoire";

        if (empty($errors)) {
            // traitement du formulaire
            // puis redirection
            header('Location: thanks.php');
        }
    }

    ?>

    <form action="thanks.php" method="post">

        <div class="input1">
            <label for="nom">Nom :</label>
            <input required type="text" id="nom" name="user_name">
        </div>

        <div class="input2">
            <label for="prenom">Prénom :</label>
            <input required type="text" id="prenom" name="user_firstname">
        </div>

        <div>
            <label for="courriel">Courriel :</label>
            <input required type="email" id="courriel" name="user_email">
        </div>

        <div>
            <label for="phone">Téléphone :</label>
            <input required type="text" id="phone" name="user_phone">
        </div>

        <div>
            <label for="subject-select">Choisissez un sujet:</label>
            <select required name="user_subject" id="subject-select">
                <option value="">--Merci de choisir un sujet--</option>
                <option value="help">besoin d'aide</option>
                <option value="sos">besoin d'aide d'urgence</option>
                <option value="bof">votre site est mal fichu</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea required id="message" name="user_message"></textarea>
        </div>

        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>

    </form>

    <?php

    //echo  $_POST['user_name'];

    ?>

</body>

</html>