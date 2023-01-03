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

                    <div class="col-sm-3 col-6">
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