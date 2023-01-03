<?php
get_header();
?>
<div class="hero-single-competence container-gutters">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <a href="<?php echo get_post_type_archive_link('expertises'); ?>" class="button">
                    <?= __('retour', 'cresc'); ?>
                </a>
            </div>
            <div class="col-sm-8 mx-auto text-center">
                <?= get_field('post_competence_title'); ?>
            </div>
        </div>
    </div>
</div>


<?php if( have_rows('post_competence_content') ):

    while ( have_rows('post_competence_content') ) : the_row();

        lsdGetTemplatePart('content-single-expertise', 'strate', get_row_layout(), '');

    endwhile;

endif; ?>



<div class="strate-slider-competences">

    <div class="container-items-competences">
    </div>
    <section class="slider-section">
        <div class="introduction-section hidden-xs">
            Voir aussi
        </div>
        <div class="scroll-X">
            <div class="swiper-wrapper">
            <?php

            $args = array(
                'post_type' => 'expertises',
                'post__not_in' => array(get_the_id()),
                'orderby'        => 'rand',
                'posts_per_page' => -1,

            );

            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();

                    $post_competence_image = get_field('post_competence_image');

                    if($post_competence_image){
                        $post_competence_image_url = getImageArray($post_competence_image, '320_460');
                    }
                ?>

                    <a href="<?= get_the_permalink(); ?>" class="card-slider-section swiper-slide">
                        <?php if($post_competence_image_url): ?>
                        <img src="<?= $post_competence_image_url['url']; ?>" alt="">
                        <?php endif; ?>
                        <div class="content-card">
                            <div class="title-h4">
                                <?= get_the_title(); ?>
                            </div>
                            <p class="discover-card">
                                <?= __('DÉCOUVRIR', 'cresc'); ?>
                            </p>
                        </div>
                    </a>


                <?php }
            }
            wp_reset_postdata();
            ?>
            </div>
        </div>

        <a href="<?php echo get_post_type_archive_link('expertises'); ?>" class="button all-know-cta">
            <?= __('Tous nos savoir-faire', 'cresc'); ?>
        </a>
    </section>
</div>

<?php
get_footer();
