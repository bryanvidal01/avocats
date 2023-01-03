<?php $page_home_key_words = get_sub_field('strate_keywords_items'); ?>

<section class="presentation-section hidden-xs">
    <div class="markee title-h1 big js-wording">
        <div class="text-inner visible">
            <?= $page_home_key_words[0]['strate_keywords_items_word'] ?>
        </div>
    </div>
    <div class="scroll-X">

        <?php
        foreach ($page_home_key_words as $page_home_key_word):
            $page_home_key_words_item_image_1 = $page_home_key_word['strate_keywords_items_image_1'];
            $page_home_key_words_item_image_2 = $page_home_key_word['strate_keywords_items_image_2'];
            $page_home_key_words_item_image_3 = $page_home_key_word['strate_keywords_items_image_3'];

            $page_home_key_words_item_image_1_url = '';
            $page_home_key_words_item_image_2_url = '';
            $page_home_key_words_item_image_3_url = '';

            if($page_home_key_words_item_image_1){
                $page_home_key_words_item_image_1_url = getImageArray($page_home_key_words_item_image_1, '640_800');
            }
            if($page_home_key_words_item_image_2){
                $page_home_key_words_item_image_2_url = getImageArray($page_home_key_words_item_image_2, '640_800');
            }
            if($page_home_key_words_item_image_3){
                $page_home_key_words_item_image_3_url = getImageArray($page_home_key_words_item_image_3, '640_800');
            }

            ?>
            <div class="item-presentation js-scroll-X-subsection" data-title="<?= $page_home_key_word['strate_keywords_items_word']; ?>">
                <?php if($page_home_key_words_item_image_1_url['url']): ?>
                    <div class="image-1">
                        <img src="<?= $page_home_key_words_item_image_1_url['url']; ?>" alt="">
                    </div>
                <?php endif; ?>

                <?php if($page_home_key_words_item_image_2_url['url']): ?>
                    <div class="image-2">
                        <img src="<?= $page_home_key_words_item_image_2_url['url']; ?>" alt="">
                    </div>
                <?php endif; ?>

                <?php if($page_home_key_words_item_image_3_url['url']): ?>
                    <div class="image-3">
                        <img src="<?= $page_home_key_words_item_image_3_url['url']; ?>" alt="">
                    </div>
                <?php endif; ?>

                <div class="wording-presentation">
                    <p>
                        <?= $page_home_key_word['strate_keywords_items_content']; ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>