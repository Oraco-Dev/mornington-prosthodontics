<?php

get_header();


?>

<section class="rf__banner fade-content delay-200">
    <div class="container">
        <div class="container__inner">
            <div class="rf__banner-outer">
                <h1>
                    Referrals
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="rf__form fade-content delay-400">
    <div class="container">
        <div class="container__inner">
            <?php echo do_shortcode('[gravityform id="2" title="false"]'); ?>
        </div>
    </div>
</section>


<? get_footer(); ?>