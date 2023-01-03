<?php
get_header();
?>

<div class="hero about">
    <img src="<?= get_template_directory_uri(); ?>/medias/19.jpg" data-scroll data-scroll-speed="-1" class="img-hero" alt="">

    <div class="content-hero">
        <p>Expertise</p>
        <div class="title-h1" >
            “l’expérience elle-même est un mode de connaissance qui exige le concours de l’entendement”
        </div>
        <p style="margin-top: 2vw; margin-bottom: 0;">
            Emmanuel KANT
        </p>
    </div>
</div>

<div class="container-expertises container-gutters">
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="title-h2">
                nos domaines d’expertise
            </div>
        </div>
    </div>



    <?php
    $args = array(
        'post_type' => 'expertises',
        'posts_per_page' => -1,

    );

    $the_query = new WP_Query( $args );
    $i = 0;
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) { $i++;
            $the_query->the_post();

            $post_competence_image = get_field('post_competence_image');

            if($post_competence_image){
                $post_competence_image_url = getImageArray($post_competence_image, 'full');
            }
            ?>

            <div class="row container-expertise-item">
                <?php if ($i%2 == 1): ?>
                <div class="col-sm-6 hidden-xs">
                    <div class="container-image-expertise">
                        <img src="<?= $post_competence_image_url['url'] ?>" class="image-expertise" alt="">
                    </div>
                </div>
                <?php endif; ?>
                <div class="col-sm-6 visible-xs">
                    <div class="container-image-expertise">
                        <img src="<?= $post_competence_image_url['url'] ?>" class="image-expertise" alt="">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="content-expertise">
                        <div class="title-h2">
                            <?= get_the_title(); ?>
                        </div>
                        <p>
                            <?= get_field('post_competence_short_desc'); ?>
                        </p>
                        <a href="<?= get_permalink(); ?>" class="button">
                            <?= __('Découvrir', 'cresc'); ?>
                        </a>
                    </div>
                </div>
                <?php if ($i%2 != 1): ?>
                    <div class="col-sm-6 hidden-xs">
                        <div class="container-image-expertise">
                            <img src="<?= $post_competence_image_url['url'] ?>" class="image-expertise" alt="">
                        </div>
                    </div>
                <?php endif; ?>
            </div>


        <?php }
    }
    wp_reset_postdata();
    ?>

</div>

<?php
get_footer();
