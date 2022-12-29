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


<div class="section-presentation container-gutters about" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="introduction-section">
                    Notre objectif
                </div>
                <div class="title-h2">
                    “Avocats de la famille car nous <i>croyons que
                        la famille</i>, quelle que soit sa forme, est le Corps <i>intermédiaire entre l’État et l’Individu”</i>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <img src="<?= get_template_directory_uri(); ?>/medias/15.jpg" class="section-presentation-image-1" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img src="<?= get_template_directory_uri(); ?>/medias/14.jpg" class="section-presentation-image-2"  alt="">
            </div>
            <div class="col-sm-5 ">
                <div class="info-container">
                    <p>
                        C’est l’expérience de la vie des avocats associés
                        de Chauveau Mulon & Associés, leur parcours personnel et professionnel, ainsi que leur personnalité qui ont permis d’établir une vision commune de leur métier d’avocat. Chacun est personnellement impliqué et en tant qu’avocats en droit de la famille, de la personne et du patrimoine, nouer des relations de confiance avec ses clients, avoir une déontologie prend réellement tout
                        son sens, parce qu’en réalité, Chauveau Mulon & Associés est à vos côtés à tous les moments
                        de la vie.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="popin-members" data-scroll data-scroll-sticky data-scroll-target="#scroll-container" >
        <div class="content-popin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?= get_template_directory_uri(); ?>/medias/16.jpg" class="image-user" width="100%" alt="">
                    </div>
                    <div class="col-sm-5">
                        <h2>
                            <span class="name">Elodie</span>
                            <span class="family-name">Mulon</span>
                        </h2>

                        <div class="post">
                            Associée
                        </div>

                        <div class="social">
                            <ul class="social-links">
                                <li>
                                    <a href="" target="_blank">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p>
                            <span class="email">elodie.mulon@chauveaumulon.fr</span><br/>
                            <span class="phone">+33 6 43 45 56 78</span>
                        </p>

                        <div class="col-sm-6">
                            <a href="" class="button vcard" target="_blank">VCARD</a>
                        </div>
                    </div>
                    <div class="col-sm-3 text-right">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/picto-cross.svg" class="close-popin" alt="">

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="description">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores cum cupiditate dolor dolores eligendi illo illum ipsa, itaque numquam optio qui saepe similique. Dicta doloribus ducimus error voluptates voluptatibus.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores cum cupiditate dolor dolores eligendi illo illum ipsa, itaque numquam optio qui saepe similique. Dicta doloribus ducimus error voluptates voluptatibus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="strate-teams container-gutters">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-h2 title-section">
                    <i>Notre</i> Équipe
                </div>
            </div>
        </div>
        <div class="row">
            <?php

            $args = array(
                'post_type' => 'membres',
                'orderby'        => 'date',
                'posts_per_page' => -1,
            );

            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();

                    $member_name = get_field('member_name');
                    $member_second_name = get_field('member_second_name');
                    $member_post = get_field('member_post');
                    $member_linkedin = get_field('member_linkedin');
                    $member_email = get_field('member_email');
                    $member_phone = get_field('member_phone');
                    $member_vcard = get_field('member_vcard');
                    $member_description = get_field('member_description');
                    $member_image = get_field('member_image');

                    if($member_image){
                        $member_image_url = getImageArray($member_image, '640_860');
                    }
                    ?>

                    <div class="col-sm-3">
                        <div class="push-team"
                             data-firstname="<?= $member_second_name; ?>"
                             data-secondname="<?= $member_name; ?>"
                             data-post="<?= $member_post; ?>"
                             data-linkedin="<?= $member_linkedin; ?>"
                             data-phone="<?= $member_phone; ?>"
                             data-email="<?= $member_email; ?>"
                             data-vcard="<?= $member_vcard; ?>"
                             data-image="<?= $member_image_url['url']; ?>"
                             data-description="<?= $member_description; ?>">
                            <img src="<?= $member_image_url['url']; ?>" class="push-team-image" alt="">
                            <div class="push-team-name title-h3">
                                <?= $member_second_name; ?>
                            </div>
                            <div class="push-team-sub-name title-h3">
                                <?= $member_name; ?>
                            </div>
                            <div class="push-team-post">
                                <?= $member_post; ?>
                            </div>
                        </div>
                    </div>


                <?php }
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>
</div>



<div class="strate-related-pushs container-gutters">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="push-related">
                    <img src="<?= get_template_directory_uri(); ?>/medias/17.jpg" class="push-related-image" alt="">
                    <div class="push-related-title title-h2">
                        Notre <br/><i>expertise</i>
                    </div>

                    <a href="" class="push-related-link button">En savoir +</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="push-related">
                    <img src="<?= get_template_directory_uri(); ?>/medias/18.jpg" class="push-related-image" alt="">
                    <div class="push-related-title title-h2">
                        Nos <br/><i>honoraires</i>
                    </div>

                    <a href="" class="push-related-link button">En savoir +</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
