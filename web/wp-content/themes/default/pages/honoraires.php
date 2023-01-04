<?php
/* Template Name: Honoraires */
get_header();
?>

<div class="hero about">
    <img src="<?= get_template_directory_uri(); ?>/medias/23.jpg" data-scroll data-scroll-speed="-1" class="img-hero" alt="">

    <div class="content-hero">
        <p>honoraires</p>
        <div class="title-h1" >
            ON S’INQUIÈTE SOUVENT DE CHOSES QUI FINISSENT PAR AVOIR DE BONS RÉSULTATS
        </div>
        <p style="margin-top: 2vw">
            Proverbe turc
        </p>
    </div>
</div>


<?php if( have_rows('contenu') ):

    while ( have_rows('contenu') ) : the_row();

        lsdGetTemplatePart('content-general', 'strate', get_row_layout(), '');

    endwhile;

endif; ?>



<?php
get_footer();
