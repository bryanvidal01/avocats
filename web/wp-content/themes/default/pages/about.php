<?php
/* Template Name: À propos */
get_header();
?>



<div class="hero about">
    <img src="<?= get_template_directory_uri(); ?>/medias/hero-about.jpg" data-scroll data-scroll-speed="-1" class="img-hero" alt="">

    <div class="content-hero">
        <p>À propos</p>
        <div class="title-h1" >
            <i>Une équipe</i><br/>
            dédiée à<br/>
            <i>votre défenses</i>
        </div>
    </div>
</div>



<?php if( have_rows('contenu') ):

    while ( have_rows('contenu') ) : the_row();

        lsdGetTemplatePart('content-general', 'strate', get_row_layout(), '');

    endwhile;

endif; ?>


<?php
get_footer();
