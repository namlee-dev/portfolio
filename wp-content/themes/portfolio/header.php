<!DOCTYPE html>
<html lang="<?= bloginfo('language'); ?>">
<head>
    <title><?= bloginfo('name'); ?></title>
    <meta charset="<?= bloginfo('charset'); ?>">
    <meta name="description" content="<?= bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= get_template_directory_uri() ?>/assets/images/Nam.jpg" />
    <?php wp_head(); ?>
</head>
<body>
    <main>

    <header class="header">
        <img class="header__image"
            src="<?= get_template_directory_uri() ?>/assets/images/Nam.jpg"
            alt="avatar de l'auteur Nam Lee">
        <h1 class="header__title">Nam Lee &#60; dévelopeur web &#62</h1>
    </header>