<?php
/* Template Name: Archive blog */

get_header();
?>
    <div class="hero about">
        <img src="<?= get_template_directory_uri(); ?>/medias/62.jpg" data-scroll data-scroll-speed="-1" class="img-hero" alt="">

        <div class="content-hero">
            <p>Actualités</p>
            <div class="title-h1" >
                l’actualité<br/>
                d’aujourd’hui,<br/>
                c’est l’histoire<br/>
                de demain
            </div>
            <p style="margin-top: 2vw">
                Raymond Queneau
            </p>
        </div>
    </div>

<div class="container-gutters">
    <div class="row">
        <div class="col-sm-3">
            <div class="name-filter" id="filters">Filtrer par</div>
        </div>
        <div class="col-sm-9 text-right">
            <ul class="terms-filter">
            <?php
                $terms = get_terms(
                    array(
                        'taxonomy' => 'category',
                    )
                );
                foreach ($terms as $term){  ?>
                    <li class="<?= (get_queried_object()->term_id == $term->term_id) ? 'active' : ''; ?>">
                        <a href="<?= get_term_link($term->term_id); ?>#filters">
                            <?= $term->name ?>
                        </a>
                    </li>
                <?php }
            ?>


            </ul>
        </div>
    </div>

    <div class="row">
        <?php
        // The Loop
        if ( have_posts() ) {
            while ( have_posts() ) {
                global $post;
                the_post();
                $categories = get_the_category();
                $categorie = reset($categories);
                $authorID = $post->post_author;

                ?>

                <div class="col-sm-4">
                    <a href="<?= get_the_permalink(); ?>" class="article">
                        <div class="article-label">
                            <?= $categorie->name; ?>
                        </div>
                        <div class="article-title legend">
                            <?= get_the_title(); ?>
                        </div>

                        <div class="article-author">
                            <?php echo get_the_author_meta( 'nickname', $authorID ); ?>
                        </div>
                        <div class="article-date">
                            <?= get_the_date('d M Y'); ?>
                        </div>
                    </a>
                </div>

            <?php }
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        the_posts_pagination(); ?>
    </div>
</div>

<?php
get_footer();
