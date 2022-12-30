<?php
/* Template Name: À propos */
get_header();
?>



<div class="hero about">
    <img src="<?= get_template_directory_uri(); ?>/medias/hero-about.jpg" data-scroll data-scroll-speed="-1" class="img-hero" alt="">

    <div class="content-hero">
        <p>À propos</p>
        <div class="title-h1" >
            “la réussite appartient<br/>
            <i>à tout le monde.</i> C’est au travail d’équipe <i>qu’en revient </i>le mérite.”<br/>
        </div>
        <p style="margin-top: 2vw">
            Franck PICCARD
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
