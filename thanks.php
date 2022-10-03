<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thanks</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="answer">
        <p>merci <span><?php echo  $_POST['user_firstname'] . ' ' . $_POST['user_name']; ?> </span>de nous avoir contactés à propos de <span><?php echo  $_POST['user_subject'] ?></span></p> <br>

        <p>Un de nos conseillers vous contactera soit à l'adresse <span><?php echo  $_POST['user_email'] ?></span> ou par téléphone au <span><?php echo  $_POST['user_phone'] ?></span> dans les plus brefs délais pour traiter votre demande :</p><br><br>

        <p><span><?php echo  $_POST['user_message'] ?></span></p>
    </div>


</body>

</html>