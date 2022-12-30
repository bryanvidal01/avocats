<?php
    $strate_text_two_cols_left = get_sub_field('strate_text_two_cols_left');
    $strate_text_two_cols_right = get_sub_field('strate_text_two_cols_right');
?>

<div class="strate-text-left container-gutters">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="row">
                <div class="col-sm-6">
                    <div class="container-text">
                        <p>
                            <?= $strate_text_two_cols_left; ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="container-text">
                        <p>
                            <?= $strate_text_two_cols_right; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>