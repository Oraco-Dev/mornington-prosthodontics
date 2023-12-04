<?php

$cta_text = $args['ctaText'];
$cta_btn_text = $args['ctaBtnText'];
$cta_btn_link = $args['ctaBtnLink'];

?>

<section class="cta">
    <div class="container">
        <div class="container__inner">
            <div class="cta__outer">
                <h2 class="fade-content delay-200">
                    <?php echo $cta_text ?>
                </h2>
                <a href="<?php echo $cta_btn_link ?>" class="fade-content delay-400"><button
                        class="button-primary button-text-primary">
                        <?php echo $cta_btn_text ?>
                    </button></a>
            </div>
        </div>
    </div>
</section>