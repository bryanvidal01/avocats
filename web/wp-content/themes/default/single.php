<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header();
global $post;
$categories = get_the_category();
$categorie = reset($categories);
$authorID = $post->post_author;
?>

    <div class="hero-single-competence container-gutters">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <?php
                    $terms = get_terms(
                        array(
                            'taxonomy' => 'category',
                        )
                    );
                    $term = reset($terms);
                    ?>

                    <a href="<?= get_term_link($term->term_id); ?>" class="button">
                        retour
                    </a>
                </div>
                <div class="col-sm-6">
                    <div class="article-label">
                        <?= $categorie->name; ?>
                    </div>
                    <div class="title-h2">
                        <?= get_the_title(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="container-sup-info-blog">
                        <div class="article-author">
                            <?php echo get_the_author_meta( 'nickname', $authorID ); ?>
                        </div>
                        <div class="article-date">
                            <?= get_the_date('d M Y'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-article-blog container-gutters">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7 mx-auto">
                    <?= get_the_content(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="container-sup-info-blog bottom">
                        <div class="article-author">
                            <?php echo get_the_author_meta( 'nickname', $authorID ); ?>
                        </div>
                        <div class="article-date">
                            <?= get_the_date('d M Y'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="title-related">
                        Sur le même <i>sujet</i>
                    </h3>
                </div>
            </div>

            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__not_in' => array( get_the_ID() ),
                    'cat'     => $categorie->term_id

                );

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        global $post;
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
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="<?= get_term_link($term->term_id); ?>" class="button">
                        Voir toutes nos actualités
                    </a>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
