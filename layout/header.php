<?php
require_once 'lib/functions.php';
$utilisateur = current_user();
?>
<!doctype html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="...">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aztrek, l'organisateur de voyage pas comme les autres - <?php echo $title; ?></title>
        <link rel="shortcut icon" href="images/favicon.ico">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
              crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
        <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/slippry.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <header class="header">

            <div class="cta-social">
                <ul class="inline-list">
                    <?php if (empty($utilisateur)) : ?>
                        <li>
                            <a href="admin/register.php">
                                <i class="fa fa-user-plus"></i>
                                Créer un compte
                            </a>
                        </li>
                        <li>
                            <a href="admin/login.php">
                                <i class="fa fa-sign-in"></i>
                                Se connecter
                            </a>
                        </li>
                    <?php else: ?>
                        <?php if ($utilisateur["admin"] == 1): ?>
                            <li>
                                <a href="admin/">
                                    <i class="fa fa-cogs"></i>
                                    Administration
                                </a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="admin/logout.php">
                                <i class="fa fa-sign-out"></i>
                                Déconnexion
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php require_once 'layout/nav.php'; ?>

                    </header>
                    <main>