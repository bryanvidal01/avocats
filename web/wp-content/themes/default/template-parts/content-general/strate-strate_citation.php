<?php
    $strate_citation_content = get_sub_field('strate_citation_content');
    $strate_citation_content_image = get_sub_field('strate_citation_content_image');

    if($strate_citation_content_image){
        $strate_citation_content_image_url = getImageArray($strate_citation_content_image, '650_650');
    }
?>

<div class="section-citation <?= ($strate_citation_content_image_url['url']) ? 'with-image': ''?>">
    <?php if($strate_citation_content_image_url['url']): ?>
        <img src="<?= $strate_citation_content_image_url['url']; ?>" class="image-bg" data-scroll data-scroll-speed="-1" alt="">
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="title-h2">
                    <?= $strate_citation_content; ?>
                </div>
            </div>
        </div>
    </div>
</div>