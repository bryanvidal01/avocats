<?php
/* Template Name: Honoraires */
get_header();
?>

<div class="hero about">
    <img src="<?= get_template_directory_uri(); ?>/medias/23.jpg" data-scroll data-scroll-speed="-1" class="img-hero" alt="">

    <div class="content-hero">
        <p>À propos</p>
        <div class="title-h1" >
            le seul intérêt<br/>
            <i>de l’argent</i><br/>
            est son emploi
        </div>
        <p style="margin-top: 2vw">
            Benjamin franklin
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
