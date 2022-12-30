<?php
    $strate_two_text_two_images_sup_title = get_sub_field('strate_two_text_two_images_sup_title');
    $strate_two_text_two_images_text_left = get_sub_field('strate_two_text_two_images_text_left');
    $strate_two_text_two_images_image_right = get_sub_field('strate_two_text_two_images_image_right');

    if($strate_two_text_two_images_image_right){
        $strate_two_text_two_images_image_right_url = getImageArray($strate_two_text_two_images_image_right, '420_500');
    }

    $strate_two_text_two_images_text_right = get_sub_field('strate_two_text_two_images_text_right');
    $strate_two_text_two_images_image_left = get_sub_field('strate_two_text_two_images_image_left');

    if($strate_two_text_two_images_image_left){
        $strate_two_text_two_images_image_left_url = getImageArray($strate_two_text_two_images_image_left, '860_1130');
    }


    $strate_two_text_two_images_label_button = get_sub_field('strate_two_text_two_images_label_button');
    $strate_two_text_two_images_url_button = get_sub_field('strate_two_text_two_images_url_button');
?>

<div class="section-presentation container-gutters about" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="introduction-section">
                    <?= $strate_two_text_two_images_sup_title; ?>
                </div>
                <div class="title-h2">
                    <?= $strate_two_text_two_images_text_left; ?>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <?php if($strate_two_text_two_images_image_right_url): ?>
                <img src="<?= $strate_two_text_two_images_image_right_url['url']; ?>" class="section-presentation-image-1" alt="">
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?php if($strate_two_text_two_images_image_left_url['url']): ?>
                <img src="<?= $strate_two_text_two_images_image_left_url['url']; ?>" class="section-presentation-image-2"  alt="">
                <?php endif; ?>
            </div>
            <div class="col-sm-5 ">
                <div class="info-container">
                    <?= $strate_two_text_two_images_text_right; ?>

                    <?php if($strate_two_text_two_images_label_button && $strate_two_text_two_images_url_button): ?>
                        <a href="<?= $strate_two_text_two_images_url_button; ?>" class="button"><?= $strate_two_text_two_images_label_button; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>