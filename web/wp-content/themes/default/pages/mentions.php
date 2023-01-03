<?php
/* Template Name: Mentions */
get_header();
?>

    <div class="hero-single-competence container-gutters">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <a href="<?php echo get_site_url(); ?>" class="button">
                        <?= __('retour', 'cresc'); ?>
                    </a>
                </div>
                <div class="col-sm-8 mx-auto text-center">
                    <h2><?= get_the_title(); ?></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="section-mentions container-gutters">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <?= get_the_content(); ?>
                </div>
            </div>
        </div>
    </div>







<?php
get_footer();
