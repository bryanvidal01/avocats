<?php
    $post_competence_content_citation_sup_title = get_sub_field('post_competence_content_citation_sup_title');
    $post_competence_content_citation_content = get_sub_field('post_competence_content_citation_content');
?>

<div class="strate-titre-center container-gutters">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <?php if($post_competence_content_citation_sup_title): ?>
            <div class="introduction-section">
                <?= $post_competence_content_citation_sup_title; ?>
            </div>
            <?php endif; ?>

            <div class="title-h4">
                <?= $post_competence_content_citation_content; ?>
            </div>
        </div>
    </div>
</div>