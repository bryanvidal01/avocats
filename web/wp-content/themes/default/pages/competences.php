<?php
/* Template Name: Compétences */
get_header();
?>

<div class="hero about">
    <img src="<?= get_template_directory_uri(); ?>/medias/19.jpg" data-scroll data-scroll-speed="-1" class="img-hero" alt="">

    <div class="content-hero">
        <p>Expertises</p>
        <div class="title-h1" >
            la compétence<br/>
            <i>au service de</i><br/>
            vos intérêts
        </div>
    </div>
</div>

<div class="container-expertises container-gutters">
    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="title-h2">
                nos domaines d’expertises
            </div>
        </div>
    </div>

    <div class="row container-expertise-item">
        <div class="col-sm-6">
            <div class="container-image-expertise">
                <img src="<?= get_template_directory_uri(); ?>/medias/20.jpg" class="image-expertise" alt="">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="content-expertise">
                <div class="title-h2">
                    successions
                </div>
                <p>Lorsque vous décidez de vous marier, il est important de connaître et définir le cadre juridique de votre union.</p>
                <a href="" class="button">
                    Découvrir
                </a>
            </div>
        </div>
    </div>
    <div class="row container-expertise-item">
        <div class="col-sm-6">
            <div class="content-expertise">
                <div class="title-h2">
                    PERSONNES<br/>
                    <i>VULNÉRABLES</i>
                </div>
                <p>Lorsque vous décidez de vous marier, il est important de connaître et définir le cadre juridique de votre union.</p>
                <a href="" class="button">
                    Découvrir
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="container-image-expertise">
                <img src="<?= get_template_directory_uri(); ?>/medias/20.jpg" class="image-expertise" alt="">
            </div>
        </div>

    </div>
</div>

<?php
get_footer();
