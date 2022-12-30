<?php
    $strate_two_pushs_link_title_push_1 = get_sub_field('strate_two_pushs_link_title_push_1');
    $strate_two_pushs_link_label_push_1 = get_sub_field('strate_two_pushs_link_label_push_1');
    $strate_two_pushs_link_url_push_1 = get_sub_field('strate_two_pushs_link_url_push_1');
    $strate_two_pushs_link_image_push_1 = get_sub_field('strate_two_pushs_link_image_push_1');

    if($strate_two_pushs_link_image_push_1){
        $strate_two_pushs_link_image_push_1_url = getImageArray($strate_two_pushs_link_image_push_1, '650_650');
    }


    $strate_two_pushs_link_title_push_2 = get_sub_field('strate_two_pushs_link_title_push_2');
    $strate_two_pushs_link_label_push_2 = get_sub_field('strate_two_pushs_link_label_push_2');
    $strate_two_pushs_link_url_push_2 = get_sub_field('strate_two_pushs_link_url_push_2');
    $strate_two_pushs_link_image_push_2 = get_sub_field('strate_two_pushs_link_image_push_2');

    if($strate_two_pushs_link_image_push_2){
        $strate_two_pushs_link_image_push_2_url = getImageArray($strate_two_pushs_link_image_push_2, '650_650');
    }
?>

<div class="strate-related-pushs container-gutters">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="push-related">
                    <?php if($strate_two_pushs_link_image_push_1_url['url']): ?>
                    <img src="<?= $strate_two_pushs_link_image_push_1_url['url']; ?>" class="push-related-image" alt="">
                    <?php endif; ?>
                    <div class="push-related-title title-h2">
                        <?= $strate_two_pushs_link_title_push_1; ?>
                    </div>
                    <?php if($strate_two_pushs_link_label_push_1 && $strate_two_pushs_link_url_push_1): ?>
                    <a href="<?= $strate_two_pushs_link_url_push_1; ?>" class="push-related-link button"><?= $strate_two_pushs_link_label_push_1; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="push-related">
                    <?php if($strate_two_pushs_link_image_push_2_url['url']): ?>
                        <img src="<?= $strate_two_pushs_link_image_push_2_url['url']; ?>" class="push-related-image" alt="">
                    <?php endif; ?>
                    <div class="push-related-title title-h2">
                        <?= $strate_two_pushs_link_title_push_2; ?>
                    </div>
                    <?php if($strate_two_pushs_link_label_push_2 && $strate_two_pushs_link_url_push_2): ?>
                        <a href="<?= $strate_two_pushs_link_url_push_2; ?>" class="push-related-link button"><?= $strate_two_pushs_link_label_push_2; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>