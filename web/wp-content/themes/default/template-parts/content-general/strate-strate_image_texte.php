<?php
    $strate_image_texte_image = get_sub_field('strate_image_texte_image');
    $strate_image_texte_text = get_sub_field('strate_image_texte_text');

    if($strate_image_texte_image){
        $strate_image_texte_image_url = getImageArray($strate_image_texte_image, '650_650');
    }
?>

<div class="strate-image-text container-gutters">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <div class="row">
                <div class="col-sm-7">
                    <?php if($strate_image_texte_image_url): ?>
                    <div class="container-image">
                        <img src="<?= $strate_image_texte_image_url['url']; ?>" alt="">
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-5">
                    <div class="container-text">
                        <?= $strate_image_texte_text; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>