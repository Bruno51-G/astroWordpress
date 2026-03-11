<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?= get_stylesheet_uri() ?>">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">
    <img class="logo" src="<?= get_stylesheet_directory_uri() ?>/img/logo.png">
    <p class="logoTitre"><?php bloginfo('name'); ?></p>
</header>

<main>

<!-- FIN DU HEADER -->
