<?php get_header(); ?>

<section>
    <div class="first-line">
        <h1>Portfolio - En cours</h1>
        <a href="#contact"><h2>Contact</h2></a>
    </div>

    <h2 id="realizations">Réalisations</h2>

    <div class="realizations">
        <div class="realization__container">
            <h3>
                <a target="_blank"
                    href="http://18.212.73.95/projet-calbar-disk/">
                    Calbar'Disk
                </a>
            </h3>
            <a target="_blank"
                href="http://18.212.73.95/projet-calbar-disk/">
                <img class="realization__thumbnail"
                        src="<?= get_template_directory_uri(); ?>/assets/images/calbardisk.jpg"
                        alt="miniature du site calbar disk">
            </a>
            <p>Site de réservation en ligne de vinyles d'occasion avec une partie blog (projet de fin de formation, Wordpress avec Custom Template en SASS et Bootstrap, Custom Plugin pour gérer le Custom Post Type et la Custom Table, gestion des cookies - Travail d'équipe en méthode Agile / Scrum)</p>
        </div>

        <div class="realization__container">
            <h3>
                <a target="_blank"
                    href="https://namlee.fr">
                    Nam Lee
                </a>
            </h3>
            <a target="_blank"
                href="https://namlee.fr">
                <img class="realization__thumbnail"
                        src="<?= get_template_directory_uri(); ?>/assets/images/namlee.jpg"
                        alt="miniature du site namlee">
            </a>
            <p>Site sur ma formation de développeur web chez
                <a target="_blank"
                    href="https://oclock.io/">
                    O'Clock
                </a>
            (Bootsrap - MCV - Altorouter -Dispatcher)</p>
        </div>

        <div class="realization__container">
            <h3>
                <a target="_blank"
                    href="https://maillesnam.com">
                    Mailles Nam
                </a>
            </h3>
            <a target="_blank"
                href="https://maillesnam.com">
                <img class="realization__thumbnail"
                    src="<?= get_template_directory_uri(); ?>/assets/images/maillesnam.jpg"
                    alt="miniature du site maillesnam">
            </a>
            <p>Site sur le tricot (WordPress avec Custom Template en SASS et Custom Post Type pour les tutoriels)</p>
        </div>

        <div class="realization__container">
            <h3>
                <a target="_blank"
                    href="https://socks.maillesnam.com/public/">
                    Sock Generator
                </a>
            </h3>
            <a target="_blank"
                href="https://socks.maillesnam.com/public/">
                <img class="realization__thumbnail"
                    src="<?= get_template_directory_uri(); ?>/assets/images/socks.jpg"
                    alt="miniature du site socks">
            </a>
            <p>Site de générateur de patrons de chaussettes qui est en cours d'intégration sur
                <a target="_blank"
                    href="https://maillesnam.com">
                    maillesnam.com
                </a>
            (test@test.com / test)</p>
        </div>
    </div>

    <h2 id="contact">Contact</h2>

    <ul>
        <li>
            <a target="_blank"
                href="mailto:contact@namlee-dev.com">
                contact@namlee-dev.com
            </a>
        </li>
        <li>
            <a target="_blank"
                href="https://www.linkedin.com/in/nam-lee-massenet/">
                via LinkedIn
            </a>
        </li>
        <li>
            <a target="_blank"
                href="https://twitter.com/namlee_dev">
                via Twitter
            </a>
        </li>
        <li>
            <a target="_blank"
                href="https://github.com/namlee-dev">
                via GitHub
            </a>
        </li>
    </ul>
</section>

<?php get_footer(); ?>