<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", "initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Enregistrement</title>
</head>
<body>
    <h1>Merci <?= $firstName ?> pour votre message</h1>
    <p>Nous avons bien reçu votre message (<em><?= $message ?> </em>)</p>
    <p>Nous vous recontacterons bientôt sur votre boîte <strong><?= $email ?> </strong></p>

    <?php if ($age > 18) : ?>
        <p>Vous êtes majeur</p>
    <?php else : ?>
        <p>Vous êtes mineur</p>
    <?php endif ?>

    <ul>
        <?php foreach ($prenoms as $prenom) : ?>
        <li>Prénom : <?= $prenom ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>