<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

get_header();
?>
    <div class="container-gutters container-not-found text-center">
        <div class="title-h1">
            404
        </div>
        <div class="title-h4">
            La page demandée n'existe pas
        </div>
        <a href="<?= get_site_url(); ?>" class="button">Retour à la page d'accueil</a>
    </div>

<?php
get_footer();
