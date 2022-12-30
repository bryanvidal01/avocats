<?php
    $strate_two_pushs_title_push_1 = get_sub_field('strate_two_pushs_title_push_1');
    $strate_two_pushs_description_push_1 = get_sub_field('strate_two_pushs_description_push_1');
    $strate_two_pushs_image_push_1 = get_sub_field('strate_two_pushs_image_push_1');

    if($strate_two_pushs_image_push_1){
        $strate_two_pushs_image_push_1_url = getImageArray($strate_two_pushs_image_push_1, '650_650');
    }

    $strate_two_pushs_title_push_2 = get_sub_field('strate_two_pushs_title_push_2');
    $strate_two_pushs_description_push_2 = get_sub_field('strate_two_pushs_description_push_2');
    $strate_two_pushs_image_push_2 = get_sub_field('strate_two_pushs_image_push_2');

    if($strate_two_pushs_image_push_2){
        $strate_two_pushs_image_push_2_url = getImageArray($strate_two_pushs_image_push_2, '650_650');
    }

?>
<div class="section-pushs-honoraires container-gutters">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="push-honoraire">
                    <?php if($strate_two_pushs_image_push_1_url): ?>
                    <img src="<?= $strate_two_pushs_image_push_1_url['url'] ?>" alt="">
                    <?php endif; ?>
                    <div class="title-h2">
                        <?= $strate_two_pushs_title_push_1; ?>
                    </div>
                    <div class="push-honoraire-price">
                        <?= $strate_two_pushs_description_push_1; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="push-honoraire">
                    <?php if($strate_two_pushs_image_push_2_url): ?>
                        <img src="<?= $strate_two_pushs_image_push_2_url['url'] ?>" alt="">
                    <?php endif; ?>
                    <div class="title-h2">
                        <?= $strate_two_pushs_title_push_2; ?>
                    </div>
                    <div class="push-honoraire-price">
                        <?= $strate_two_pushs_description_push_2; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>