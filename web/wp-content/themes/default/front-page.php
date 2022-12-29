<?php
/* Template Name: Frontpage */
get_header();

$page_home_hero_sup_title = get_field('page_home_hero_sup_title');
$page_home_hero_title = get_field('page_home_hero_title');
$page_home_hero_background = get_field('page_home_hero_background');

if($page_home_hero_background){
    $page_home_hero_background = getImageArray($page_home_hero_background, '1920_1080');
}
?>

<div class="hero">
    <?php if($page_home_hero_background): ?>
    <img src="<?= $page_home_hero_background['url']; ?>" data-scroll data-scroll-speed="-1" class="img-hero" alt="">
    <?php endif; ?>

    <div class="content-hero">
        <p><?= $page_home_hero_sup_title ?></p>
        <div class="title-h1" >
            <?= $page_home_hero_title; ?>
        </div>

        <div class="scroll-bottom" data-scroll data-scroll-speed="1">
            <p>Scroll</p>
        </div>
    </div>
</div>


<?php
    $page_home_valeurs_sup_title = get_field('page_home_valeurs_sup_title');
    $page_home_valeurs_title = get_field('page_home_valeurs_title');
    $page_home_valeurs_text = get_field('page_home_valeurs_text');
    $page_home_valeurs_image_1 = get_field('page_home_valeurs_image_1');
    $page_home_valeurs_image_2 = get_field('page_home_valeurs_image_2');

    if($page_home_valeurs_image_1){
        $page_home_valeurs_image_1_url = getImageArray($page_home_valeurs_image_1, '640_800');
    }
    if($page_home_valeurs_image_2){
        $page_home_valeurs_image_2_url = getImageArray($page_home_valeurs_image_2, '640_800');
    }



?>

<div class="section-presentation container-gutters" >
    <div class="deco">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/deco-bloc-1.svg" data-scroll data-scroll-speed="-1" alt="">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="introduction-section">
                    <?= $page_home_valeurs_sup_title; ?>
                </div>
                <?= $page_home_valeurs_title; ?>
            </div>
            <div class="col-sm-6 text-right">
                <img src="<?= $page_home_valeurs_image_1_url['url']; ?>" class="section-presentation-image-1" data-scroll data-scroll-speed="1" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img src="<?= $page_home_valeurs_image_2_url['url']; ?>" class="section-presentation-image-2" data-scroll data-scroll-speed="1" alt="">
            </div>
            <div class="col-sm-5">
                <div class="info-container">
                    <?= $page_home_valeurs_text; ?>
                    <a href="" class="button">
                        Découvrez notre cabinet
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    $page_home_citation_text = get_field('page_home_citation_text');
?>

<div class="section-citation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="title-h2">
                    <?= $page_home_citation_text; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $page_home_key_words = get_field('page_home_key_words'); ?>

<section class="presentation-section">
    <div class="markee title-h1 big js-wording">
        <div class="text-inner visible">
            <?= $page_home_key_words[0]['page_home_key_words_item_title'] ?>
        </div>
    </div>
    <div class="scroll-X">

        <?php
            foreach ($page_home_key_words as $page_home_key_word):
                $page_home_key_words_item_image_1 = $page_home_key_word['page_home_key_words_item_image_1'];
                $page_home_key_words_item_image_2 = $page_home_key_word['page_home_key_words_item_image_2'];
                $page_home_key_words_item_image_3 = $page_home_key_word['page_home_key_words_item_image_3'];

                $page_home_key_words_item_image_1_url = '';
                $page_home_key_words_item_image_2_url = '';
                $page_home_key_words_item_image_3_url = '';

                if($page_home_key_words_item_image_1){
                    $page_home_key_words_item_image_1_url = getImageArray($page_home_key_words_item_image_1, '640_800');
                }
                if($page_home_key_words_item_image_2){
                    $page_home_key_words_item_image_2_url = getImageArray($page_home_key_words_item_image_2, '640_800');
                }
                if($page_home_key_words_item_image_3){
                    $page_home_key_words_item_image_3_url = getImageArray($page_home_key_words_item_image_3, '640_800');
                }

        ?>
            <div class="item-presentation js-scroll-X-subsection" data-title="<?= $page_home_key_word['page_home_key_words_item_title']; ?>">
                <?php if($page_home_key_words_item_image_1_url['url']): ?>
                <div class="image-1">
                    <img src="<?= $page_home_key_words_item_image_1_url['url']; ?>" alt="">
                </div>
                <?php endif; ?>

                <?php if($page_home_key_words_item_image_2_url['url']): ?>
                <div class="image-2">
                    <img src="<?= $page_home_key_words_item_image_2_url['url']; ?>" alt="">
                </div>
                <?php endif; ?>

                <?php if($page_home_key_words_item_image_3_url['url']): ?>
                <div class="image-3">
                    <img src="<?= $page_home_key_words_item_image_3_url['url']; ?>" alt="">
                </div>
                <?php endif; ?>

                <div class="wording-presentation">
                    <?= $page_home_key_word['page_home_key_words_item_description']; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>



<!--
<div class="section-scroll-x">
    <div class="item">
        <div class="image-1">
            <img src="<?= get_template_directory_uri(); ?>/medias/04.jpg" alt="">
        </div>
        <div class="image-2">
            <img src="<?= get_template_directory_uri(); ?>/medias/06.jpg" alt="">
        </div>
        <div class="image-3">
            <img src="<?= get_template_directory_uri(); ?>/medias/05.jpg" alt="">
        </div>
    </div>
</div>-->

<?php
    $page_home_citation_2_text = get_field('page_home_citation_2_text');
    $page_home_citation_2_image = get_field('page_home_citation_2_image');

    if($page_home_citation_2_image){
        $page_home_citation_2_image_url = getImageArray($page_home_citation_2_image, '640_800');
    }

?>
<div class="section-citation with-image">
    <?php if($page_home_citation_2_image_url): ?>
    <img src="<?= $page_home_citation_2_image_url['url']; ?>" class="image-bg" data-scroll data-scroll-speed="-1" alt="">
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="title-h2">
                    <?= $page_home_citation_2_text; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$page_home_expertise_sup_title = get_field('page_home_expertise_sup_title');
$page_home_expertise_title = get_field('page_home_expertise_title');
$page_home_expertise_description = get_field('page_home_expertise_description');

?>

<div class="section-know container-gutters">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="introduction-section">
                    <?= $page_home_expertise_sup_title; ?>
                </div>

                    <?= $page_home_expertise_title; ?>

            </div>
            <div class="col-sm-4 offset-2">
                <div class="content-know">
                    <?= $page_home_expertise_description; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="slider-section">
    <div class="scroll-X">

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

                <a href="<?= get_the_permalink(); ?>" class="card-slider-section">
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

    <a href="<?php echo get_post_type_archive_link('expertises'); ?>" class="button all-know-cta">
        <?= __('Tous nos savoir-faire', 'cresc'); ?>
    </a>
</section>


<?php
$page_home_slider_items = get_field('page_home_slider_items');
?>

<div class="section-slider-wins">
    <div class="swiper">
        <div class="button-nav prev-slider">
        </div>
        <div class="button-nav next-slider">
        </div>
        <div class="swiper-wrapper">

            <?php foreach ($page_home_slider_items as $page_home_slider_item):
            $page_home_slider_item_image = $page_home_slider_item['page_home_slider_item_image'];
            $page_home_slider_item_image_url = '';
            if($page_home_slider_item_image){
                $page_home_slider_item_image_url = getImageArray($page_home_slider_item_image, '1920_1080');
            }
            if($page_home_slider_item_image_url['url']): ?>
                <div class="swiper-slide">
                    <img src="<?= $page_home_slider_item_image_url['url'] ?>" alt="">
                </div>
            <?php endif; endforeach; ?>

        </div>
    </div>
</div>

<?php
$page_home_recompense_image = get_field('page_home_recompense_image');
$page_home_recompense_title = get_field('page_home_recompense_title');
$page_home_recompense_description = get_field('page_home_recompense_description');

if($page_home_recompense_image){
    $page_home_recompense_image_url = getImageArray($page_home_recompense_image, 'full');
}
?>

<div class="section-win-book container-gutters">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <?php if($page_home_recompense_image_url): ?>
                <img src="<?= $page_home_recompense_image_url['url']; ?>" width="70%" alt="">
                <?php endif; ?>
            </div>
            <div class="col-sm-3">
                <?= $page_home_recompense_title; ?>
            </div>
            <div class="col-sm-3 offset-2">
                <?= $page_home_recompense_description; ?>

                <a href="" class="button">
                    Lire la suite
                </a>
            </div>
        </div>
    </div>
</div>

<!--
<div class="section-blog container-gutters">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-h2 title-intro">
                    Nos dernières <i>actualités</i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="article">
                    <div class="article-label">
                        La filiation et l’état civil
                    </div>
                    <div class="article-title legend">
                        La conformité des règles de prescription de l’action en contestation de paternité avec l’article 8 de la Convention européenne des droits de l’Homme
                    </div>

                    <div class="article-author">
                        Alice Bouissou
                    </div>
                    <div class="article-date">
                        5 Août 2022
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="article">
                    <div class="article-label">
                        La filiation et l’état civil
                    </div>
                    <div class="article-title legend">
                        La conformité des règles de prescription de l’action en contestation de paternité avec l’article 8 de la Convention européenne des droits de l’Homme
                    </div>

                    <div class="article-author">
                        Alice Bouissou
                    </div>
                    <div class="article-date">
                        5 Août 2022
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="article">
                    <div class="article-label">
                        La filiation et l’état civil
                    </div>
                    <div class="article-title legend">
                        La conformité des règles de prescription de l’action en contestation de paternité avec l’article 8 de la Convention européenne des droits de l’Homme
                    </div>

                    <div class="article-author">
                        Alice Bouissou
                    </div>
                    <div class="article-date">
                        5 Août 2022
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="article">
                    <div class="article-label">
                        La filiation et l’état civil
                    </div>
                    <div class="article-title legend">
                        La conformité des règles de prescription de l’action en contestation de paternité avec l’article 8 de la Convention européenne des droits de l’Homme
                    </div>

                    <div class="article-author">
                        Alice Bouissou
                    </div>
                    <div class="article-date">
                        5 Août 2022
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="article">
                    <div class="article-label">
                        La filiation et l’état civil
                    </div>
                    <div class="article-title legend">
                        La conformité des règles de prescription de l’action en contestation de paternité avec l’article 8 de la Convention européenne des droits de l’Homme
                    </div>

                    <div class="article-author">
                        Alice Bouissou
                    </div>
                    <div class="article-date">
                        5 Août 2022
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="article">
                    <div class="article-label">
                        La filiation et l’état civil
                    </div>
                    <div class="article-title legend">
                        La conformité des règles de prescription de l’action en contestation de paternité avec l’article 8 de la Convention européenne des droits de l’Homme
                    </div>

                    <div class="article-author">
                        Alice Bouissou
                    </div>
                    <div class="article-date">
                        5 Août 2022
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-right">
                <a href="" class="button">
                    Toutes les actualités
                </a>
            </div>
        </div>
    </div>
</div>
-->
<?php
get_footer();
