<?php

get_header();
?>

<div class="hero" data-module="homePage" data-scroll-section>
    <img src="<?= get_template_directory_uri(); ?>/medias/hero.jpg" class="img-hero" alt="">

    <div class="content-hero">
        <p>Notre mission</p>
        <div class="title-h1">
            nous défendons<br/>
            <span class="italic">la liberté par-delà</span><br/>
            les frontières<br/>
            <span class="italic">en droit de la famille.</span>
        </div>

        <div class="scroll-bottom">
            <p>Scroll</p>
        </div>
    </div>
</div>

    <div data-scroll-container>
        <div data-scroll-section>
            <h1 data-scroll>Hey</h1>
            <p data-scroll>👋</p>
        </div>
        <div data-scroll-section>
            <h2 data-scroll data-scroll-speed="1">What's up?</h2>
            <p data-scroll data-scroll-speed="2">😬</p>
        </div>
    </div>





<div class="section-presentation container-gutters">
    <div class="deco">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/deco-bloc-1.svg" alt="">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="introduction-section">
                    Nos valeurs
                </div>
                <div class="title-h2">
                    Nous croyons que<br/>
                    <i>la famille, quelle<br/>
                        que soit sa forme,</i> est le Corps intermédiaire <i>entre l’État et l’Individu.</i>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <img src="<?= get_template_directory_uri(); ?>/medias/01.png" class="section-presentation-image-1" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img src="<?= get_template_directory_uri(); ?>/medias/02.jpg" class="section-presentation-image-2" alt="">
            </div>
            <div class="col-sm-5">
                <div class="info-container">
                    <p>
                        Avocats de la famille car nous croyons que la famille, quelle que soit sa forme, est le Corps intermédiaire entre l’État et l’Individu, permet la sociabilisation, la transmission et l’apprentissage
                        de la solidarité parmi tant d’autres fonctions.
                        Les crises la traversent pouvant se régler par l’écoute, la négociation et en cas d’échec par le recours à la justice
                    </p>
                    <a href="" class="button">
                        Découvrez notre cabinet
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section-citation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="title-h2">
                    C’est l’expérience de la vie<br/>
                    des avocats associés de <i>Chauveau Mulon & Associés</i>, leur parcours personnel et professionnel, <i>ainsi que leur personnalité </i>qui ont permis d’établir une vision commune de leur métier d’avocat.
                </div>
            </div>
        </div>
    </div>
</div>



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


<div class="section-citation with-image">
    <img src="<?= get_template_directory_uri(); ?>/medias/07.jpg" class="image-bg" alt="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="title-h2">
                    C’est l’expérience de la vie<br/>
                    des avocats associés de <i>Chauveau Mulon & Associés</i>, leur parcours personnel et professionnel, <i>ainsi que leur personnalité </i>qui ont permis d’établir une vision commune de leur métier d’avocat.
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
