<!DOCTYPE html>
<html lang="<?= bloginfo('language'); ?>">
<head>
    <title><?= bloginfo('name'); ?></title>
    <meta charset="<?= bloginfo('charset'); ?>">
    <meta name="description" content="<?= bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <main>

    <header class="header">
        <img class="header__image"
            src="<?= get_template_directory_uri() ?>/assets/images/Nam_404.jpg"
            alt="avatar de l'auteur Nam Lee">
        <h1 class="header__title">Nam Lee &#60; dévelopeur web &#62</h1>
    </header>

<section class="error-404">
    <h1>Erreur 404</h1>
    <p>La page demandée n'existe pas.</p>
    <p>Vous pouvez <a href="<?= get_home_url()?>">Retourner à l'accueil</a></p>
</section>

<?php get_footer(); ?>