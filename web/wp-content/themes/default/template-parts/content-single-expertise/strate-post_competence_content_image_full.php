<?php
    $post_competence_content_image_full_image = get_sub_field('post_competence_content_image_full_image');
    if($post_competence_content_image_full_image){
        $post_competence_content_image_full_image_url = getImageArray($post_competence_content_image_full_image, '1920_1080');
    }
?>
<?php if($post_competence_content_image_full_image_url): ?>
<div class="strate-image-full">
    <img src="<?= $post_competence_content_image_full_image_url['url']; ?>" alt="">
</div>

<?php endif; ?>