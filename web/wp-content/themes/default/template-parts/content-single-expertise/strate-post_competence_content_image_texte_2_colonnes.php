<?php
    $post_competence_content_image_texte_2_colonnes_image = get_sub_field('post_competence_content_image_texte_2_colonnes_image');
    $post_competence_content_image_texte_2_colonnes_text = get_sub_field('post_competence_content_image_texte_2_colonnes_text');

    if($post_competence_content_image_texte_2_colonnes_image){
        $post_competence_content_image_texte_2_colonnes_image_url = getImageArray($post_competence_content_image_texte_2_colonnes_image, 'full');
    }
?>

<div class="strate-image-text container-gutters">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <div class="row">
                <div class="col-sm-7">
                    <?php if($post_competence_content_image_texte_2_colonnes_image_url): ?>
                    <div class="container-image">
                        <img src="<?= $post_competence_content_image_texte_2_colonnes_image_url['url']; ?>" alt="">
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-5">
                    <div class="container-text">
                       <?= $post_competence_content_image_texte_2_colonnes_text; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>