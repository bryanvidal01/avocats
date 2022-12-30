<?php
    $strate_text_big_center_title = get_sub_field('strate_text_big_center_title');
    $strate_text_big_center_content = get_sub_field('strate_text_big_center_content');
?>

<div class="strate-titre-center container-gutters">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <?php if($strate_text_big_center_title): ?>
                <div class="introduction-section">
                    <?= $strate_text_big_center_title; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-6">
                <div class="title-h4">
                    <?= $strate_text_big_center_content; ?>
                </div>
            </div>
        </div>
    </div>
</div>
