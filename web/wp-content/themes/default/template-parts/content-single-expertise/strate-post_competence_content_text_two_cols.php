<?php
    $post_competence_content_text_two_cols_left = get_sub_field('post_competence_content_text_two_cols_left');
    $post_competence_content_text_two_cols_right = get_sub_field('post_competence_content_text_two_cols_right');
?>
<div class="strate-text-left container-gutters">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="row">
                <div class="col-sm-6">

                    <?php if($post_competence_content_text_two_cols_left): ?>
                    <div class="container-text">
                        <?= $post_competence_content_text_two_cols_left ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">

                    <?php if($post_competence_content_text_two_cols_right): ?>
                        <div class="container-text">
                            <?= $post_competence_content_text_two_cols_right ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>